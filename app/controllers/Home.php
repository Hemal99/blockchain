<?php

class Home extends Controller{
    private $_UserModel;
    public function __construct($controller,$action){
         parent::__construct($controller,$action);
         $this->load_model('Users');
    }

    public function indexAction(){
        $this->view->render('home/login');
    }
     
    public function loginAction(){
    //   dnd(password_hash('123456',PASSWORD_DEFAULT));
       
        if($_POST){
           $user = $this->UsersModel->findByEmail($_POST['email']);
           
           if(($user->email !=null) && (password_verify($_POST['password'],$user->password))){
   
               Router::redirect('dashboard');
           }
        }
        $this->view->render('home/login');
    }


    public function signupAction(){
        if($_POST){
            $user=$this->UsersModel->findByEmail($_POST['email']);
           
            if(validateSignup(posted_values($_POST))){
                $newUser = new Users();
                $newUser->registerNewUser($_POST);
                Router::redirect('');
                
            }
            
        }
        $this->view->render('home/signup');

       
    }
    public function forgotAction(){
    //forgot password action
    $this->view->render('home/forgotpw');
    }

}