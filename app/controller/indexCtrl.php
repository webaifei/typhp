<?php
/**
 * index controller 
 */

namespace app;

class indexCtrl {
    function __construct ( ){

    }
    // action index
    public function index (){
        p('index action');
    }
    public function list (){
        $db = new \app\model\db;
    }
}


 ?>