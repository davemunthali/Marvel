<?php
/* Created by Davie Munthali
 * February 2018
 * HomeController class is used to load default pages
 */
class HomeController{
    
    //reference to the registry object
    private $registry;
    
    // used to store the smarty object
    private $page;


    public function __construct(Registry $registry) {
        
        $this->registry = $registry;
        $urlarray = $this->registry->getObject("url")->getURLbits();
        $action = isset($urlarray[1]) ? $urlarray[1] : '';
        $this->page = $this->registry->getObject("smarty");
        
        
        switch ($action) {
            case "Index":
                $this->Index();
                break;
            case "About":
                $this->About();
                break;
            case "Contact":
                $this->Contact();
                break;
            default:
                $this->Index();
                break;
        }
    }
    /**
     * Loads the index page or home page
     */
    public function Index() {
        $this->registry->getObject("url")->setpage('home.tpl');
        $this->page->assign("date",  date('d:m:Y'));
        $this->page->assign("active","home");
        $this->page->assign("title","Home");
    }
    /**
     * Loads the about page
     */
    public function About() {
        $this->registry->getObject("url")->setPage('about.tpl');
        $this->page->assign("date",  date('d:m:Y'));
        $this->page->assign("active","about");
        $this->page->assign("title","About");
    }
    /**
     * Loads the contact page
     */
    public function Contact() {
        $this->registry->getObject("url")->setPage('contact.tpl');
        $this->page->assign("active","contact");
        $this->page->assign("title","Contact");
        
    }
}

