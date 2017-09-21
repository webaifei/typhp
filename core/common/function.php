<?php 
/**
 * common function utils
 */

function p($var){
    if( is_bool($var) ){
        var_dump($var);
    }else if( is_null($var) ){
        var_dump($var);
    }else {
        echo "<pre style=\"padding: 10px; color: #333; border: 1px solid #ddd; background: #ccc; border-radius: 4px;\">".print_r($var, true)."</pre>";
    }
}


 ?>