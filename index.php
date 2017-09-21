<?php 
/**
 * 入口文件
 */

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

// load function modules
require_once(CORE.'/common/function.php');


// load AI modules
require_once(CORE.'/AI.php');

// autoload class
spl_autoload_register('\core\AI::load');

\core\AI::run();

 ?>