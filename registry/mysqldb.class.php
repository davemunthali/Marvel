<?php
/* Created by Davie Munthali
 * February 2018
 * A class which manages database connections, insertion, deletion and updating of database data
 * Sanitises data to be included in queries
 */
class Mysqldb {
    
    // array containing database connections
    public $connections = array();
    
    // database connection in use
    private $activeConnection = 0;
    
    //reference to the registry object
    private $registry;
    
    // contains database results
    private $last;
    
    function __construct(Registry $registry) {
        $this->registry = $registry;
        
    }
    /**
     * Creates new database connection
     * @param String $host database hostname
     * @param String $user database user
     * @param String $database database name
     * @param String $password database password
     * @return int database connection id
     */
    public function newConnection($host,$user,$database,$password){
        $this->connections[] = new mysqli($host,$user,$password,$database);
        $connection_id = count($this->connections)-1;
        if(mysqli_connect_error()){
            trigger_error("Failed to connect to ".$this->connections[$connection_id]->error, E_USER_ERROR);
        }
        return $connection_id;
    }
    /**
     * Executes database queries
     * @param array $query contains the results of a query
     */
    public function executeQuery($query) {
        if(!$result = $this->connections[$this->activeConnection]->query($query)){
            trigger_error('Error executing query: ' . $query .' - '.$this->connections[$this->activeConnection]->error, E_USER_ERROR);
        }
        else{
            $this->last = $result;
           
        }
    }
    /**
     * Insert new records into the database
     * @param String $table database table
     * @param String $data array of data to be inserted
     * @return boolean success
     */
    public function insertRecords($table,$data) {
        
        //var_dump($data);
        $fields = '';
        $values = '';
	foreach ($data as $f => $v){
            $fields  .= "`$f`,";
            $values .= ( is_numeric( $v ) && ( intval( $v ) == $v ) ) ? $v."," : "'$v',";
	}		
        // remove our trailing ,
    	$fields = substr($fields, 0, -1);
    	// remove our trailing ,
    	$values = substr($values, 0, -1);
    	
	$insert = "INSERT INTO $table ({$fields}) VALUES({$values})";
	// var_dump($insert);
	$this->executeQuery( $insert );
	return true;
    }
    /**
     * gets the rows from the last query
     * @return array of database data
     */
    public function getRows()
    {
    	return $this->last->fetch_array(MYSQLI_ASSOC);
    }
    /**
     * gets the number of rows from the previous query
     * @return array of database data
     */
    public function numRows()
    {
	    return $this->last->num_rows;
    }
    /**
     * Deletes data in the database
     * @param String $table tablename
     * @param String $condition query condition
     * @param string $limit query limit if any
     */
    public function deleteRecords($table,$condition,$limit) {
        $limit = ($limit === 1 ) ? '' : 'LIMIT '.$limit;
        $delete = "DELETE FROM {$table} WHERE {$condition} {$limit}";
        $this->executeQuery($delete);
    }
    /**
     * Sets active connection
     * @param Int $newConnection connection id
     */
    public function setActiveConnection($newConnection) {
        $this->activeConnection = $newConnection;
    }
    /**
     * Closes the active connection
     */
    public function closeConnection() {
        $this->connections[$this->activeConnection]->close();
    }
    /**
     * Sanitizes data to be used in the database
     * @param String $data data to be sanitised
     * @return String data
     */
    public function sanitizeData($data) {
        if(get_magic_quotes_gpc()){
            $data = stripslashes($data);
        }
	if( version_compare( phpversion(), "4.3.0" ) == "-1" ){
            $data = $this->connections[$this->activeConnection]->escape_string($data);
	} 
	else{
            $data = $this->connections[$this->activeConnection]->real_escape_string($data);
	}
    	return $data;
    }
    public function __destruct() {
        foreach ($this->connections as $connection){
            $connection->close();
        }
    }
    

}

