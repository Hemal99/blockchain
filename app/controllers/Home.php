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
             // Check for POST
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Process form

                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // dnd($_POST);
                // Init data
                $data =[
                'fname' => trim($_POST['fname']),
                'lname' => trim($_POST['lname']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'fname_err' => '',
                'lname_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
                ];

                // Validate Email
                if(empty($data['email'])){
                $data['email_err'] = 'Pleae enter email';
                } else {
                // Check email
                if($this->UsersModel->findByEmail($data['email'])){
                    $data['email_err'] = 'Email is already taken';
                }
                }

                // Validate first Name
                if(empty($data['fname'])){
                $data['fname_err'] = 'Pleae enter first name';
                }

                  // Validate last Name
                  if(empty($data['lname'])){
                    $data['lname_err'] = 'Pleae enter last name';
                    }

                // Validate Password
                if(empty($data['password'])){
                $data['password_err'] = 'Pleae enter password';
                } elseif(strlen($data['password']) < 6){
                $data['password_err'] = 'Password must be at least 6 characters';
                }

                // Validate Confirm Password
                if(empty($data['confirm_password'])){
                $data['confirm_password_err'] = 'Pleae confirm password';
                } else {
                if($data['password'] != $data['confirm_password']){
                    $data['confirm_password_err'] = 'Passwords do not match';
                }
                }

                // Make sure errors are empty
                if(empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
                // Validated
                
                // Hash Password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                // Register User
                if($this->UsersModel->register($data)){
                    flash('register_success', 'You are registered and can log in');
                    Router::redirect('home/login');
                    // redirect('users/login');
                } else {
                    die('Something went wrong');
                }

                } else {
                // Load view with errors
                $this->view->render('home/signup', $data);
                }

            } else {
                // Init data
                $data =[
                'fname' => '',
                'lname' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
                ];

                // Load view
                $this->view->render('home/signup',$data);
                }


       
    }
    public function forgotAction(){
    //forgot password action
    $this->view->render('home/forgotpw');
    }

}