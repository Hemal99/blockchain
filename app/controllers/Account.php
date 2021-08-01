<?php
class Account extends Controller{
    private $_user;

    public function __construct($controller,$action){
        parent::__construct($controller,$action);
        $this->user=Users::currentUser();
   }
   public function indexAction(){
    if(Users::currentUser()!=null){
        $userCurrent = Users::currentUser();
        $this->view->setInput($userCurrent);
        
        $this->view->render('account/info');
    }
    else{
     Router::redirect('');
    }
      
   }

   public function changePassAction(){
    $this->view->render('account/changePassword');
   }

   public function updateFieldsAction(){
   
    if($_POST){
     
     $this->user->updateDetails($_POST);
     Router::redirect('account');
    }
}


}