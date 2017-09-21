<?php 
/**
 * 框架核心代码
 */

namespace core;

class AI {
    static public function run (){
        // get the controller and action
        $route = new \app\route();
        $action = $route->action;
        $controllerPath = APP.'/controller/'.$route->controller.'Ctrl.php';
        
        if( is_file($controllerPath) ){
            require_once($controllerPath);
            $ctrlClass = '\\app\ctrl\\'.$route->controller.'Ctrl';
            $controller = new $ctrlClass;
            $controller->$action();
        }
    }
    /**
     * 自动加载类
     * @param  string $class 加载的类名
     * @return null
     */
    static public function load( $class ){
        $classPath = str_replace('\\', '/', $class);
        p($class);
        p($classPath);
        $file = ROOT.'/'.$classPath.'.php';
        p($file);
        if( is_file($file) ){
            require_once( $file );
        }else{
            p('the class '.$class.' is not existed!');
            exit();
        }   
    }
}


 ?>