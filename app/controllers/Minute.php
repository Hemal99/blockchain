<?php
class Minute extends Controller{
    private $_user;

    public function __construct($controller,$action){

        parent::__construct($controller,$action);
         $this->load_model('Members');
        $this->load_model('Minutes');
      
   }
   public function indexAction(){
       
    if(Users::currentUser()!=null){
        $input = $this->MinutesModel->getAllMinutes();
        $this->view->setInput($input);
        $this->view->render('minutes/minutesTableView');
    }
     else{
         Router::redirect('');
     }

   }

    public function addMinuteAction(){
        $input= $this->MembersModel->getAllMembers();   
      $this->view->setInput($input);
      $this->view->render('minutes/minutesCreateView');

    }
 
   public function insertFieldAction(){

       if($_POST){
        $q1=implode(',', $_POST['name']);

            $_POST['name'] = $q1;
            $_POST['user_id']= Users::currentUser()->id;
   
           $this->MinutesModel->addNewMinutes($_POST);
           Router::redirect('minute');
       }
   }
   
   

  
}