<?php
class View {
    protected $_head,$_body,$siteTitle,$_outputBuffer,$_layout=DEFAULT_LAYOUT;
    protected $_inputObj;
    public function __construct(){
         
    }
    public function render($viewName,$data = []){
        $viewArray=explode('/',$viewName);
        $viewString =implode(DS,$viewArray);
        // dnd(ROOT.DS.'app'.DS.'views'.DS.$viewString.'.php');
        if(file_exists(ROOT.DS.'app'.DS.'views'.DS.$viewString.'.php')){
            include(ROOT.DS.'app'.DS.'views'.DS.$viewString.'.php');
            include(ROOT.DS.'app'.DS.'views'.DS.'layouts'.DS.$this->_layout.'.php');
        }
        else{
            die('404 not found');
        }
    }
   public function content($type){
      
        if($type=='head'){
            return $this->_head;
        }
        elseif($type=='body'){
            return $this->_body;
        }
        return false;
   }

   public function start($type){
          $this->_outputBuffer=$type;
          ob_start();
   }
  
   public function end(){
         if($this->_outputBuffer=='head'){
             $this->_head =ob_get_clean();
         }
         elseif($this->_outputBuffer=='body'){
            $this->_body=ob_get_clean();
         }
         else{
             die('you must first run start method');
         }
   }

   public function siteTitle(){
       return $this->_siteTitle;
   }

   public function setSiteTitle($title){
       if($title==='') {
           $title=SITE_TITLE;
       }else{
       $this->_siteTitle = $title;
       }
   }
   
   public function setLayout($path){
       $this->_layout=$path;
   }

   public function setInput($inputObj){
    if(isset($inputObj)){
        $this->_inputObj=$inputObj;
    }
   }
   
   public function getInput(){
    return $this->_inputObj;
    }
}