<?php 
/**
 * route
 */

namespace core;

class route {

    public $controller = 'index';

    public $action = 'index';

    function __construct(){

        $path = $_SERVER['REQUEST_URI'];

        $path = trim($path, '/');

        $patharr = explode('/', $path);

        p($patharr);
        // set the controller
        if( isset($patharr[2]) ){
            $this->controller = $patharr[2];
        }
        // set the action
        if( isset($patharr[3]) ){
            $this->action = $patharr[3];
        }
    }
    
}


 ?>