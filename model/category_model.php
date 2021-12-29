<?php

class category_model{
    private $categories;

    public function get_categories(){
        require_once "database/sqlConn.php";    
        $Connection = sqlConn::getInstance();        
        $sqlStatement = "SELECT * FROM categories;";        
        $query=$Connection->getCn()->query($sqlStatement);        
        
        while($category=$query->fetch(PDO::FETCH_ASSOC)){
            $this->categories[]=$category;
        }
        return $this->categories; 
    }
}

?>