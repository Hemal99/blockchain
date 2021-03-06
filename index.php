<?php

define('DS',DIRECTORY_SEPARATOR);
define('ROOT',dirname(__FILE__));

//load configuration and helper functions

require_once(ROOT.DS.'config'.DS.'config.php');
require_once(ROOT.DS.'app'.DS.'lib'.DS.'helpers'.DS.'functions.php');

//Autoload classes
function autoload($className){
    if(file_exists(ROOT.DS.'core'.DS.$className.'.php')){
        require_once(ROOT.DS.'core'.DS.$className.'.php');

    }elseif(file_exists(ROOT.DS.'app'.DS.'controllers'.DS.$className.'.php')){
        require_once(ROOT.DS.'app'.DS.'controllers'.DS.$className.'.php');
    }
    elseif(file_exists(ROOT.DS.'app'.DS.'models'.DS.$className.'.php')){
        require_once(ROOT.DS.'app'.DS.'models'.DS.$className.'.php');
    }
    elseif(file_exists(ROOT.DS.'app'.DS.'lib'.DS.'helpers'.DS.$className.'.php')){
        require_once(ROOT.DS.'app'.DS.'lib'.DS.'helpers'.DS.$className.'.php');
    }
}

spl_autoload_register('autoload');
session_start();
$url = isset($_SERVER['PATH_INFO']) ? explode('/',ltrim($_SERVER['PATH_INFO'],'/')) : [];
//Database connection
// $db =DB::getInstance();
// $sql="SELECT * FROM users";
// $users=$db->query($sql);
// dnd($users);
//Route the request
Router::route($url);



