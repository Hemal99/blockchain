<?php
class Members extends Model{
    public function __construct(){
        $table='users';
        parent::__construct($table);
    }

    public function addNewMember($params){
       $this->assign($params);
       $this->save();
    }

    public function findByID($id){
        return $this->findFirst(['conditions' => 'id= ?','bind'=>[$id]]);

    }
    public function getAllMembers(){
        return $this->getResults();
    }

}