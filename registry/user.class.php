<?php
/* Created by Davie Munthali
 * February 2018
 * User class is used to create system users
 */
class User {
    
    // user id
    private $id = 0;
    
    // username
    private $username;
    
    // email
    private $email;
    
    // password
    private $password;
    
    // reference to the registry object
    private $regisry;
    
    // log in status used in authentication
    private $isLoggedIn = false;
    
    // user validity
    private $isValid = false;
    
    // reason for failed loggin attempt
    private $loginFailureReason;
    
    // active or inactive
    private $isActive;
    
    // password reset <not implemented>
    private $pwd_reset;
    
    /**
     * 
     * @param Registry $registry as reference to registry object
     * @param String $user for username
     * @param String $pass for password
     * @param Int $user_id for user_id
     */
    function __construct(Registry $registry,$user = "", $pass = "", $user_id = 0) {
        
        $this->regisry = $registry;
        
        if($user_id == 0 && $pass != '' && $user != ''){
            $pass = md5($pass);
            $user = $this->regisry->getObject("mysqldb")->sanitizeData($user);
            $sql = "SELECT * FROM users WHERE username='{$user}' AND password='{$pass}' AND deleted=0";
            $this->regisry->getObject("mysqldb")->executeQuery($sql);
            if($this->regisry->getObject("mysqldb")->numRows() == 1){
                $data = $this->regisry->getObject("mysqldb")->getRows();
                if(intval($data['active']) == 0){
                    // the account is blocked
                    $this->loginFailureReason = "The account is blocked, contact the admin";
                }
                elseif(intval($data['valid']) == 0){
                    // the user has to verify the account
                    $this->loginFailureReason = "Please confirm your account using a link sent to your email";
                }
                else{
                    $this->id = $data['id'];
                    $this->username = $data['username'];
                    $this->email = $data['email'];
                    $this->isValid = true; 
                }
                
                
            }
            else{
                $this->loginFailureReason = "Wrong username or password";
            }
        }
        elseif($user_id > 0){
           $id = intval($user_id);
           $sql = "SELECT * FROM users WHERE ID='{$id}' AND deleted=0";
           $this->regisry->getObject("mysqldb")->executeQuery($sql);
           if($this->regisry->getObject("mysqldb")->numRows() == 1){
               $data = $this->regisry->getObject("mysqldb")->getRows();
                if(intval($data['active']) == 0){
                    // the account is blocked
                    $this->loginFailureReason = "The account is blocked, contact the admin";
                }
                elseif(intval($data['valid']) == 0){
                    // the user has to verify the account
                    $this->loginFailureReason = "Please confirm your account using a link sent to your email";
                }
                else{
                    $this->id = $data['id'];
                    $this->username = $data['username'];
                    $this->email = $data['email'];
                    $this->isValid = true; 
                }
           }
           else{
                $this->loginFailureReason = "Wrong username or password";
            }
        }
    }
    /**
     * Gets the user id
     * @return int id user id
     */
    public function getuserID() {
        return $this->id;
    }
    /**
     * Gets the username
     * @return String useraneme
     */
    public function getuserName() {
        return $this->username;
    }
    /**
     * Gets the username email
     * @return String email
     */
    public function getEmail() {
        return $this->email;
    }
    /**
     * Gets validity status
     * @return boolean valid or invalid
     */
    public function checkValidity() {
        if($this->isValid == true){
            return true;
        }
        else{
            return false;
        }
    }
    /**
     * Get the failure reason after login attempt
     * @return String $loginFailureReason
     */
    public function getLoginFailReason(){
        return $this->loginFailureReason;
    }
}

