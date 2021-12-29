<?php

 class sqlConn{    
    private $servername="localhost";
    private $username="geminizNeurona";
    private $password="ocsicnarf";
    private $database="neurona";    
    private $id;

    //private static $instance = new sqlConn();
    private static $instance = [];
    private $cn = null;

    private function __construct(){        
    }

    public function isConnected(){
        $connection = false;
        try{
            $this->cn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
            $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $this->id=rand();
        }catch(PDOException $e){

        }
        if($this->cn<>null){
            $connection = true;            
        }
        return $connection;
    }

    public function getInstance(){
        //return $this->instance;
        $cls = static::class;
        if (!isset(self::$instance[$cls])) {
            self::$instance[$cls] = new static(); 
        }
        return self::$instance[$cls];
    }

    public function getCn(){
        return $this->cn;
    }   

    public function getId(){
        return $this->id;
    }
}
?>