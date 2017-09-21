<?php 
/**
 * model class
 */

namespace app;

class db extends \PDO{
    function __construct(){
        $dsn = 'mysql:host=localhost;dbname=blog';

        $user = 'root';
        $pwd = 'root';

        try{
            parent::__construct($dsn, $user, $pwd);
        } catch(\PDOException $e){
            p( $e->getMessage() );
        }
    }
}


 ?>