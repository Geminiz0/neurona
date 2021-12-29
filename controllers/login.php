<?php
require_once "model/user.php";

class Login{    

    function __construct(){             
    }

    public function register(){
        require_once "views/posts/register.php";
        require_once "model/user.php";
        $user = new User();
                
        //$user->create_user_table(); //create user table
    }

    public function show(){                
        require_once "views/posts/login.php";        
    }
    public function authenticate(){
        $user = new User();
        $resultSet = $user->getUser($_POST['username']);                
        if(strcmp($resultSet['password'],$_POST['password'])==0){
            if (!isset($_SESSION['UserId'])) {
                $_SESSION['UserId'] = $resultSet['id'];
              } else {
                unset($_SESSION['UserId']);                
              }
              header("Location: /");
        }else{            
            echo "Incorrect Password";
        }        
    }

    public function logout(){
        unset($_SESSION['UserId']);
        header("Location: /");
        
    }
}