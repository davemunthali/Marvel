<?php

class Authenticate {
    
    // used to hold the system user object
    private $user;
    
    // used to store login status of the user
    private $isLoggedIn = false;
    
    // refernce to the registry object
    private $registry;
    
    function __construct(Registry $registry) {
        $this->registry = $registry;
    }
    /**
     * Validates the session
     */
    public function sessionAuthenticate() {
        if(isset($_SESSION['user_id']) && intval($_SESSION['user_id'] > 0)){
            require_once 'user.class.php';
            $this->user = new User($this->registry,"","",  intval($_SESSION['user_id']));
        
            if($this->user->checkValidity() == true){
                $this->isLoggedIn = true;
            }
            if($this->isLoggedIn == true){
                // redirect the user to the requested page           
            }
            else{
                // redirect the user to login page
            }
        }
                 
    }
    /**
     * Authenticates loging in user
     * @param type $username
     * @param type $password
     * @return boolean true if user is valid, false if invalid
     */
    public function loginAuthenticate($username,$password){
        require_once 'user.class.php';
        $this->user = new User($this->registry,$username,$password,0);
        
        if($this->user->checkValidity() == true){
            $this->isLoggedIn = true;
            $_SESSION['username'] = $this->user->getUsername();
            $_SESSION['email'] = $this->user->getEmail();
            $_SESSION['id'] = $this->user->getUserID();
            return true;
        }
        else{
            return false;
        }
    }
    /**
     * Gets the reason for login failure
     * @return string containing login failure reason
     */
    public function getReason() {
        return $this->user->getLoginFailReason();
    }
    

}

