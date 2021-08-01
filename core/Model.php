<?php
class Model{
     protected $_db,$_table,$_modelName,$_softDelete=false,$_columnNames =[];
     public $id;
     public function __construct($table){
         $this->_db = DB::getInstance();
         $this->_table=$table;
         $this->_setTableColumns();
         $this->_modelName=str_replace('','',ucwords(str_replace('_','',$this->_table)));

     }
     protected function _setTableColumns(){
         $columns =$this->get_columns();
         foreach($columns as $column){
             $columnName =$column->Field;
             $this->_columnNames[] =$columnName;
             $this->{$columnName}=null;
         }
     }
     
     protected function get_columns(){
         return $this->_db->get_columns($this->_table);
     }
    
     public function find($params=[]){
          $results =[];
          $resultQuery = $this->_db->find($this->_table,$params);
          foreach($resultQuery as $key =>$value){
              $obj = new $this->_modelName($this->_table);
              $obj->populateObjData($results);
              $results[] = $obj;
          }
         
          return $results;
     }

     public function findById($id){
         return $this->findFirst(['conditions'=>['id'=>'?'],'bind'=>[$id]]);
     }

     public function findFirst ($params =[]){
         $resultQuery = $this->_db->findFirst($this->_table,$params);
         $result = new $this->_modelName($this->_table);
        if($resultQuery) $result->populateObjData($resultQuery);
         return $result;
     }

     protected function populateObjData($results){
        foreach($results as $key => $val){
           $this->$key= $val;
        }
     }

     public function save(){
         $fields =[];
       
         foreach($this->_columnNames as $column){
          
             $fields[$column] = $this->$column;
            
         }
         //determine whether to update or insert
         if(property_exists($this,'id') && $this->id!=''){
          return $this->update($this->id,$fields);
         }
         else{
            
             return $this->insert($fields);
         }
     }

     public function date(){
         $date =  new stdClass();
         foreach($this->_columnNames as $column){
             $data->column = $this->column;
         }
         return $data;
     }
     
     public function assign($params){
         if(!empty($params)){
             foreach($params as $key=> $val ){
              if(in_array($key,$this->_columnNames)){
                  $this->$key = santize($val);
              }
             }
         }
     }
     public function insert($fields){
      
       if(empty($fields)) return false;
       return $this->_db->insert($this->_table,$fields);
     }
     public function delete($id =''){
        if($id == '' && $this->id=='') return false;
         $id = ($id=='') ? $this->$id : $id;
        if($this->_softDelete){
            $this->update($id,['deleted' => 1]);

        }
        return $this->_db->delete($this->table,$id);
     }

     public function update($id , $fields){
       if(empty($fields)|| $id=='') return false;
       return $this->_db->update($this->_table,$id,$fields);
     }
     public function query ($sql,$bind=[]){
         return $this->_db->query($sql,$bind);
     }

     public function getResults(){
        return $this->_db->find($this->_table,[]);
    }

    public function tableJoin($params=[]){
      
        $resultQuery=$this->_db->joinQuery($this->_table,$params);
        $result = new $this->_modelName($this->_table);
      
        
        return $resultQuery;
   }

     
   
}