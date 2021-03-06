<?php

/**
 * 
 * A Page is related to a public url, that will display something. In practice this "something" is a Controller.
 *
 * @author david marsalone
 */
class Page {
    
    /**
     * A Page is related to a public url, that will display something. In practice this "something" is a Controller.
     * @param type $route
     * @param type $controler 
     */
    public function __construct($route,$controler) {
        $this->route=$route;
        $this->controler=$controler;
    }


    /**
     * This regexp will lead to the related controler
     * @var String a regexp
     */
    public $route;
    /**
     * The controler used to display the page
     * @var Controller 
     */
    public $controler;
    
    public function getPublicUrl(){
        return "#you-should-define-this-function"; 
    }
    
}

?>
