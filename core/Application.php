<?php
class Application{
    public function __construct(){
        $this->_unregister_globals();
    }
    //FOR THE SECURITY REASONS
    private function _unregister_globals(){
        if(ini_get('register_globals')){
            $globalsAry = ['_SESSION','_COOKIE','_POST','_GET','REQUEST','SERVER','ENV','FILES'];
            foreach($globalsAry as $g ){
                foreach($GLOBALS[$g] as $k=> $v){
                    if($GLOBALS[$k] ===$v){
                        unset($GLOBALS[$k]);
                    }
                }
            }
        }
    }
}