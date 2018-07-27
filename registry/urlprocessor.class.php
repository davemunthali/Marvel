<?php
/* Created by Davie Munthali
 * February 2018
 * Extracts url from the get request get array
 */
class Urlprocessor{

    // reference to the registry object
    private $registry;
    
    // stores the broken url
    private $urlBits = array();
    
    // request url
    private $urlPath;
    
    // stores the template to be loaded
    private $page;
        
        
    public function __construct(Registry $registry) {
        
        $this->registry = $registry;
        $this->geturl();
    }
    /**
    * Extracts the url from the get array
    */
    public function getURL(){
        
        $urldata = (isset($_GET['url']) ? $_GET['url'] : '');
        $this->urlPath = $urldata;
	if( $urldata == '' ){
            $this->urlBits[] = '';
            $this->urlPath = '';
	}
	else{
            $data = explode( '/', $urldata );
            $this->urlBits = $this->array_trim( $data );
        }
     }
     /**
     * Removes empty entries
     * @param array $array
     * @return array returns the trimmed array
     */
     private function array_trim($array){
         while(!empty($array) && strlen(reset($array)) === 0){
            array_shift($array);
         }
         while(!empty($array) && strlen(end($array)) === 0){
             array_pop($array);            
         }
	    
	 return $array;
      }
      /**
      * Gets the array with broken url
      * @return array array of broken url
      */
      public function getURLbits(){
        return $this->urlBits;
      }
      /**
      * Gets the url array
      * @return array contains the full url
      */
      public function getURLpath(){
        return $this->urlPath;
      }
      /**
       * Sets the smarty template to be loaded
       * @param String $page
       */
      public function setPage($page) {
        $this->page = $page;
      }
      /**
       * Gets the smarty template to be loaded
       * @param String $page
       */
      public function getPage() {
        return $this->page;
      }
        
    }

