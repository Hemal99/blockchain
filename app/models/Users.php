<?php

class Users extends Model{
    private $_isLoggedIn , $_sessionName,$cookieName;
    public static $currentLoggedInUser  = null;
    public function __construct($user=''){
        // $this->user = $user;
        $table = 'users';
        parent::__construct($table);
           $this->_sessionName = CURRENT_USER_SESSION_NAME;
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
    public static function currentUser(){

        if (!isset(self::$currentLoggedInUser) && Session::exists(CURRENT_USER_SESSION_NAME)) {
            self::$currentLoggedInUser = new Users((int) Session::get(CURRENT_USER_SESSION_NAME));
        }
        return self::$currentLoggedInUser;
    }

    public function findByEmail($email){
        return $this->findFirst(['conditions' => 'email = ?','bind'=>[$email]]);
    }
    public function findByPassword($password){
        $hashed_pw = password_hash($password,PASSWORD_DEFAULT);
        return $this->findFirst(['conditions'=>'password = ?','bind'=>[$hashed_pw]]);
    }
    
    public function login($rememberMe=false){
        Session::set($this->_sessionName, $this->id);
        self::$currentLoggedInUser = $this;
        if ($rememberMe) {
            $hash = md5(uniqid() + rand(0, 100));
            $user_agent = Session::uagent_no_version();
            Cookie::set($this->_cookieName, $hash, REMEMBER_ME_COOKIE_EXPIRY);
            $fields = ['session' => $hash, 'user_agent' => $user_agent, 'user_id' => $this->id];
            $this->_db->query("DELETE FROM user_session WHERE user_id = ? AND user_agent = ?", [$this->id, $user_agent]);
            $this->_db->insert('user_session', $fields);
        }
    }

    public function registerNewUser($params)
    {
      
        $this->assign($params);
        $this->deleted = 0;
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        $this->save();
    }

    public function logout()
    {
        
        Session::delete(CURRENT_USER_SESSION_NAME);
        if (Cookie::exsits(REMEMBER_ME_COOKIE_NAME)) {
            Cookie::delete(REMEMBER_ME_COOKIE_NAME);
        }
        self::$currentLoggedInUser = null;
        return true;
    }

}