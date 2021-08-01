<?php
class Minutes extends Model{
    public function __construct(){
        $table='minutes';
        parent::__construct($table);
    }

    public function addNewMinutes($params){
       $this->assign($params);
       $this->save();
    }

    public function findByID($id){
        return $this->findFirst(['conditions' => 'id= ?','bind'=>[$id]]);

    }

    

    public function getAllMinutes(){
        return $this->getResults();
    }

    public function joinUser(){
        return $this->tableJoin(['join_condition'=>' INNER JOIN users ON user.id=minutes.user_id ']);

    } 

}