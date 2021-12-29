<?php
//Init Session to login
session_start();        
class App{
    
    //Single Pattern
    function __construct(){
        require_once "database/sqlConn.php";    
        $sqlConn = sqlConn::getInstance();
        //Boolean variable to conect
        $sqlConn->isConnected();                  

        //Friendly URL's
        $url = $_GET['url'];        
        $url = rtrim($url,'/');        
        $url = explode('/',$url);

        //Comparate url[0], if empty this is home
        if(strcmp($url[0],"")==0){
            require_once "controllers/home.php" ;
            $home = new Home();
        }
        if(strcmp($url[0],"create_category")==0){
            require_once "controllers/category.php";
            $category = new Category();
            $category->create();
        }
        if(strcmp($url[0],"login")==0){
            require_once "controllers/login.php";
            $login = new Login();
            $login->show();
        }
        if(strcmp($url[0],"authenticate")==0){
            require_once "controllers/login.php";
            $login = new Login();
            $login->authenticate();
        }
        if(strcmp($url[0],"register")==0){
            require_once "controllers/register.php";            
            $register = new Register();
            $register->show();
        }
        if(strcmp($url[0],"store_user")==0){   
            require_once "controllers/register.php";
            $register = new Register();
            $register->store_user();                                    
        }
        if(strcmp($url[0],"logout")==0){   
            require_once "controllers/login.php";
            $login = new Login();
            $login->logout();                                    
        }

    }            
}

?>