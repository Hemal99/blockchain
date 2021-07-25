<?php
class Validate{
    private $_passed=false,$_error=[],$_db=null;

    public function __construct(){
        $this->_db=DB::getInstance();
    }
    public function check($source ,$items){
      $this->error=[];
      
    }
}