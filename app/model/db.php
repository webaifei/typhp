<?php 
/**
 * model class
 */

namespace app\model;

class db extends \PDO{
    function __construct(){
        $dsn = 'mysql:host=127.0.0.1;dbname=blog';

        $user = 'root';
        $pwd = '123456';

        try{
            parent::__construct($dsn, $user, $pwd);
        } catch(\PDOException $e){
            p( $e->getMessage() );
        }
    }
}


 ?>