<?php
/* Created by Davie Munthali
 * February 2018
 * AccountController class is used to register,authenticate sessions and login users
 */
class AccountController {
    
    // reference to registry object
    private $registry;
    
    // array to hold form errors
    private $errors = array();
    
    // array to hold database ready data
    private $sanitizedValues = array();

    // array containing fields of registration form
    private $fields = array(
        'username' => 'username',
        'password' => 'password',
        'repeat_password' => 'password confirmation',
        'email' => 'email address');
    
    // array containing fields of login form
    private $login_fields = array(
        'username' => 'username',
        'password' => 'password'
    );
    
    function __construct(Registry $registry) {
        $this->registry = $registry;
        
        // get the method from the url array
        $urlarray = $this->registry->getObject("url")->getURLbits();
        $action = isset($urlarray[1]) ? $urlarray[1] : '';
        $this->page = $this->registry->getObject("smarty");
        
        switch ($action) {
            case "Register":
                $this->Register();
                break;
            case "Login":
                $this->Login();
                break;
            case "Logout":
                $this->Logout();
                break;
            default:
                $this->Index();
                break;
        }
    }
    /**
     * Register a new user or load the register page
     */
    public function Register(){
        
        if(isset($_POST['register_btn'])){
            
           if($this->validateFields() == true){
            $this->registerUser();
            $_SESSION['success'] = "Your  account was created succssessfully, log in";
            header("Location: http://localhost/Marvel/Account/Login");
            }
            else{

            $this->registry->getObject("url")->setpage('register.tpl');
            $this->page->assign("active","register");
            $this->page->assign("errors",  $this->errors);
            $this->page->assign("title","Register");
            } 
        }
        else{
            $this->registry->getObject("url")->setpage('register.tpl');
            $this->page->assign("active","register");
            $this->page->assign("title","Register");
        }
        
            
    }
    /**
     * Login a user or load the login page
     */
    public function Login() {
        
        if(isset($_POST['login_btn'])){
            $this->checkBlankFields($this->login_fields);
            if(isset($this->errors['password']) || isset($this->errors['username'])){
          
                $this->registry->getObject("url")->setpage('login.tpl');
                $this->page->assign("active","login");
                $this->page->assign("title","Login");
                $this->page->assign("errors",  $this->errors);
            }
            else{
                $auth = $this->registry->getObject("auth");
                if($auth->loginAuthenticate($_POST['username'],$_POST['password']) == true){
                   header("Location: http://localhost/Marvel/Home/Index");
                }
                else{
                    $this->registry->getObject("url")->setpage('login.tpl');
                    $this->page->assign("active","login");
                    $this->page->assign("title","Register");
                    $this->page->assign("loginFailed",$auth->getReason());
                }
            }
        }
        else{
           $this->registry->getObject("url")->setpage('login.tpl');
           $this->page->assign("active","login");
           $this->page->assign("title","Register"); 
        }
        
    }
    /**
     * unsets the session and logs out the user
     */
    public function Logout() {
        if(isset($_SESSION['id'])){
            session_unset();
        }
       header("Location: http://localhost/Marvel/Account/Login"); 
    }
    /**
     * Default method if no action was
     */
    public function Index() {
        $this->registry->getObject("url")->setpage('register.tpl');
        $this->page->assign("active","register");
        $this->page->assign("title","Register");
    }
    /**
     * Registers the user into the database
     */
    public function registerUser() {
        $db = $this->registry->getObject("mysqldb");
        //var_dump($this->sanitizedValues);
        $db->insertRecords("users",$this->sanitizedValues);
    }
    /**
     * checks for blank fields
     * @param array $fields containing form fields
     */
    public function checkBlankFields($fields) {   
        foreach ($fields as $field => $name) {
            if(!isset($_POST[$field]) || $_POST[$field] == ''){
                $this->errors[$field] = "You must enter a ".$name;
            }
        }
    }
    /**
     * validates all the input data in the fields
     * @return boolean true if fields are valid
     */
    public function validateFields(){
            
        $allClear = true;
        $this->checkBlankFields($this->fields);
        
        // confirm passwords
        if($_POST['password'] != $_POST['repeat_password']){
            $allClear = false;
            if(!isset($this->errors['repeat_password'])){
                $this->errors['repeat_password'] = "passwords do not match";
            }    
        }
        
        // validate email
        if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})^", $_POST['email'])){
            $allClear = false;
            if(!isset($this->errors['email'])){
               $this->errors['email'] = "Please enter a valid email"; 
            }
        }
        
        // validate password
        
        if(intval(strlen($_POST['password'])) < 6){
            $allClear = false;
            if(!isset($this->errors['password'])){
                $this->errors['password'] = "The password is too short";
            }
        }
        
        // avoid duplicate username
        $db = $this->registry->getObject("mysqldb");
        $username = $db->sanitizeData($_POST['username']);
        $sql = "SELECT * FROM users WHERE username='{$username}'";
        $db->executeQuery($sql);
        if($db->numRows() > 0 ){
            $allClear = false;
            if(!isset($this->errors['username'])){
                $this->errors['username'] = "username already exist";
            }     
        }
        
        // avoid duplicate email address
        $email = $db->sanitizeData($_POST['email']);
        $sql = "SELECT * FROM users WHERE email='{$email}'";
        $db->executeQuery($sql);
        if($db->numRows() > 0 ){
            $allClear = false;
            if(!isset($this->errors['email'])){
                $this->errors['email'] = "email already exist";
            }       
        }
        
        // sanitise the user data if allClear is true
        if($allClear == true){
            
            $this->sanitizedValues['username'] = $db->sanitizeData($_POST['username']);
            $this->sanitizedValues['email'] = $db->sanitizeData($_POST['email']);
            $this->sanitizedValues['password'] = md5($db->sanitizeData($_POST['password']));
            $this->sanitizedValues['active'] = 1;
            $this->sanitizedValues['valid'] = 1;
            $this->sanitizedValues['pass_reset'] = "HkTcVGdlUygdRedCgjgDFynNCdRCJNBCxX";
            $this->sanitizedValues['deleted'] = 0;
            return true;
        }
        else{
            return false;
        } 
    }

}
