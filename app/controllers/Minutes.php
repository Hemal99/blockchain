<?php
class Minutes extends Controller{
    private $_user;

    public function __construct($controller,$action){
        parent::__construct($controller,$action);

        
    }

    public function indexAction(){

        if(Users::currentUser()!=null){
            $this->view->render('minutes/minutesView');
        }
        else{
            Router::redirect('');
        }
    }
}