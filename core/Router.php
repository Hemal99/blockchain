<?php
class Router{
    private static $controller_str;
    public static function getRouteName(){
       return self::$controller_str;
    }
    public static function route($url){
        //url
         
         //controller
         $controller = (isset($url[0]) && $url[0]!='') ? ucwords($url[0]) : DEFAULT_CONTROLLER;
         $controller_name =$controller;
         self::$controller_str=$controller;
         array_shift($url);
         
         //action
         $action = (isset($url[0]) && $url[0]!='') ? $url[0].'Action': 'indexAction';
         $action_name = $action;
         array_shift($url);
        
         //params
         $quary_Params =$url;
         $dispatch = new $controller($controller_name,$action);
        
         if(method_exists($controller,$action)){
             call_user_func_array([$dispatch,$action],$quary_Params);
         }else{
             die('That methods does not exist in the controller');
         }

    }
    public static function redirect($location){
        if(!headers_sent()){
            header('Location: '.PROOT.$location);
            exit();
        }else{
            echo '<script type="text/javascript">';
            echo 'window.location.href="'.PROOT.$location.'";';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="0;url='.$location.'" />';
            echo '</noscript>';exit;
        }
    }

} 