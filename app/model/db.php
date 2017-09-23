<?php 
/**
 * model class
 */

namespace app\model;
// Using Medoo namespace
use Medoo\Medoo;

class db extends Medoo{
    public function __construct(){
        $options = CONFIG['db'];
        try{
            parent::__construct($options);
        }catch(\PDOException $e){
            dump($e->getMessage());
        }
    }
}


 ?>