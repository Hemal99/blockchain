<?php

class Users extends Model{
 
    private $_isLoggedIn , $_sessionName,$cookieName;
    public static $currentLoggedInUser  = null;
    public function __construct($user){
    
        $table = 'users';
        parent::__construct($table);
        // $this->_sessionName = CURRENT_USER_SESSION_NAME;
           $this->_cookieName= REMEBER_ME_COOKIE_NAME;
           if ($user != '') {
            if (is_int($user)) {
                $u = $this->_db->findFirst($table, ['conditions' => 'id = ?', 'bind' => [$user]]);
            } else {
                $u = $this->_db->findFirst($table, ['conditions' => 'email = ?', 'bind' => [$user]]);
            }
            if ($u) {
                foreach ($u as $key => $val) {
                    $this->$key = $val;
                }
            }
        }
    }
    public function findByEmail($email){
        return $this->findFirst(['conditions' => 'email = ?','bind'=>[$email]]);
    }

    
    

    public function findByPassword($password){
        $hashed_pw = password_hash($password,PASSWORD_DEFAULT);
        return $this->findFirst(['conditions'=>'password = ?','bind'=>[$hashed_pw]]);
    }
    
    public function login($rememberMe=false){
        // Session ::set($this->_sessionName,$this->id);
        if($rememberMe){
            $hash = md5(uniqid()+rand(0,100));
            Cookie::set($this->_cookieName,$hash,REMEMBER_COOKIE_EXPIRY);
        }

    }
}