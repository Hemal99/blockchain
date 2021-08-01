<?php

class Member extends Controller{
    private $_user;
    private static $page='';

    public function __construct($controller,$action){
        
        parent::__construct($controller,$action);
        $this->load_model('Members');
    }


    public function indexAction(){
        if(Users::currentUser()!=null){
            $input = $this->MembersModel->getAllMembers();

            $this->view->setInput($input);
            $this->view->render('member/memberTableView');
        }
    }
}