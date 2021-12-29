<?php
require_once "database/sqlConn.php";    
class base_model{
    private $table;
    
    private $Connection;
    public function __construct($table){
        $this->table=(string) $table;
        $this->Connection = sqlConn::getInstance();
    }

    public function getAll(){
        $sqlStatement = "SELECT * FROM $this->table ORDER BY id DESC";          
        $query=$this->Connection->getCn()->query($sqlStatement);                
        while ($row = $query->fetch_object()){
            $resultSet[]=$row;
        }
        return $resultSet;
    }
    //
    public function getById($id){
        $sqlStatement = "SELECT * FROM $this->table WHERE id = $id";
        $query=$this->Connection->getCn()->query($sqlStatement); 
        if($row = $query->fetch(PDO::FETCH_ASSOC)){
            $resultSet = $row;
        }
        return $resultSet;
    }

    public function getBy($column, $value){
        $sqlStatement = "SELECT * FROM $this->table WHERE $column= '$value';";        
        $query=$this->Connection->getCn()->query($sqlStatement); 
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            $resultSet = $row;
        }        
        return $resultSet;
    }

    public function deleteById($id){
        $sqlStatement = "DELETE FROM $this->table WHERE id = $id";
        $query=$this->Connection->getCn()->query($sqlStatement); 
        return $query;
    }

    public function deleteBy($column,$value){
        $sqlStatement = "DELETE FROM $this->table WHERE $column = $value";
        $query=$this->Connection->getCn()->query($sqlStatement); 
        return $query;
    }

}

?>