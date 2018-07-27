<?php
    session_start();
    require './registry/registry.class.php';
    require './libs/Smarty.class.php';
    require 'config.php';
    
    // create the registry object
    $registry = new Registry();
    
    //create and store the template object
    $smarty = new Smarty();
    $registry->storeObject($smarty, "smarty");
    
    //create the other objects and store them in the registry
    $registry->createAndStoreObject("urlprocessor","Urlprocessor", "url");
    $registry->createAndStoreObject("mysqldb", "Mysqldb","mysqldb");
    $registry->createAndStoreObject("authenticate", "Authenticate","auth");
    
    // create a connection to MySQL database
    $db = $registry->getObject("mysqldb");
    $db->newConnection($configs['db_host'],$configs['db_user'],$configs['db_name'],$configs['db_pass']);
    
    // get the url to extract the controller
    $url = $registry->getObject("url");
    $urlarray = $url->getURLbits();
    $controller = $urlarray[0];
    
    // create the controller
    if(in_array($controller."Controller", $controllers)){
        
        $controllerInc = $controller."Controller";
        require './controllers/'.$controllerInc.'.php';
        $controller = new $controllerInc($registry);
    }
    else{
        
        header("Location: http://localhost/Marvel/Home/Index");
    }
    // load the page 
    $smarty->display($url->getPage());

    
