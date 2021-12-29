<?php
require_once "base_model.php";

class User extends base_model{
    private $id;
    private $username;
    private $password;
    private $role;
    private $imageProfile;
    private $email;
    private $Connection;

    public function __construct(){
        $table = "users";
        parent::__construct($table);
        $this->Connection = sqlConn::getInstance();        
    }

    public function save(){
        $sqlStatement = "INSERT INTO users (username,password,role,imageprofile,email)
                         VALUES ('".$this->username."',
                                 '".$this->password."',
                                 '".$this->role."',
                                 '".$this->imageprofile."',
                                 '".$this->email."');";
        $save=$this->Connection->getCn()->query($sqlStatement);                              
        return $save;
    }

    public function create_user_table(){
        $sqlStatement = "CREATE TABLE users (
                        id INT (6) UNSIGNED AUTO_INCREMENT,
                        username VARCHAR(30) NOT NULL,
                        password VARCHAR(15) NOT NULL,
                        role INT DEFAULT 1,
                        imageprofile VARCHAR(15),
                        email VARCHAR (40),
                        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                        PRIMARY KEY(id)
                        );";                
        $query=$this->Connection->getCn()->query($sqlStatement);
        return $query;
    }

    public function setId($id){
        $this->id=$id;
    }
    public function setUsername($username){
        $this->username=$username;
    }
    public function setPassword($password){
        $this->password=$password;
    }
    public function setRole($role){
        $this->role=$role;
    }
    public function setImageProfile($imageprofile){
        $this->imageprofile=$imageprofile;
    }
    public function setEmail($email){
        $this->email=$email;
    }   

    public function getUser($value){
        $sqlStatement = "SELECT * FROM users WHERE username = '$value';";        
        $query=$this->Connection->getCn()->query($sqlStatement);                 
        $resultSet = $query->fetch(PDO::FETCH_ASSOC);
        return $resultSet;                
    }
}


?>