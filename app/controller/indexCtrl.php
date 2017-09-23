<?php
/**
 * index controller 
 */

namespace app;

class indexCtrl extends \core\AI{
    function __construct ( ){

    }
    // action index
    public function index (){
        dump('index action');
    }
    public function list (){
        $db = new \app\model\db;
        $articles = $db->select('articles', "*" ,null);
        $this->assign('title', 'hello php');
        $this->assign('articles', $articles);

        $this->display('index.html');
    }
}


 ?>