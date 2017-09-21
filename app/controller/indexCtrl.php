<?php
/**
 * index controller 
 */

namespace app\ctrl;

class indexCtrl {
    function __construct ( ){

    }
    // action index
    public function index (){
        p('action');
    }
    public function list (){
        $db = new \app\model\model;
    }
}


 ?>