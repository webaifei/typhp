<?php 
/**
 * 框架核心代码
 */
// load function modules

namespace core;

class AI {

    function __construct(){
       
        $this->init();

        $this->run();

    }
    private function init (){
        // define some variables
        define('ROOT', realpath('./'));

        define('APP', ROOT.'/app');

        define('CORE', ROOT.'/core');

        define('DEBUG', true);

        require_once(ROOT.'/config.php');
        // config
        define('CONFIG', $config);
        // set debug mode
        if(CONFIG['debug']){
            ini_set('display_error', 'On');
        }else{
            ini_set('display_error', 'Off');
        }
        require_once(CORE.'/common/function.php');

        // autoload class
        spl_autoload_register('core\AI::load');
    }
    public function run (){
        // get the controller and action
        $route = new \core\route();
        $action = $route->action;
        $controllerPath = APP.'/controller/'.$route->controller.'Ctrl.php';
        
        if( is_file($controllerPath) ){
            require_once($controllerPath);
            $ctrlClass = '\\app'.'\\'.$route->controller.'Ctrl';
            $controller = new $ctrlClass;
            $controller->$action();
        }
    }
    /**
     * 自动加载类
     * @param  string $class 加载的类名
     * @return null
     */
    public static function load( $class ){
        $classPath = str_replace('\\', '/', $class);
        p($class);
        
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