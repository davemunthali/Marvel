<?php
/**
 * A class to create an object which contains core system objects
 * Created by Davie Munthali
 * 20 feb 2018
 */
class Registry {
    
    // array to keep registry objects
    private $objects;
    
    function __construct() {
       
    }
    /**
     * Creates and stores core objects
     * @param String $file filename of the class
     * @param String $object the class name
     * @param String $key reference key
     */
    public function createAndStoreObject($file, $object, $key)
    {
        require_once $file.'.class.php';
        $this->objects[$key] = new $object($this);
        
    }
    /**
     * Stores core objects
     * @param Object $object object to be stored
     * @param String $key reference key
     */
    public function storeObject($object,$key) {
        $this->objects[$key] = $object;
    }
    /**
     * Gets the object from the array
     * @param String $key reference key
     * @return Object object refered
     */
    public function getObject($key)
    {
        return $this->objects[$key];
    }
    

}

