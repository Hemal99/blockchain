<?php
class Dashboard extends Controller{

    public function __construct($controller,$action){
        parent::__construct($controller,$action);
   }
   public function indexAction(){
    
    if(Users::currentUser()!=null){
        $userCurrent = Users::currentUser();
        $this->view->setInput($userCurrent);
        
        $this->view->render('account/dashboard');
    }
    else{
     Router::redirect('');
    }
    
      
   }
}