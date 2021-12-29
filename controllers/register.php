<?php
require_once "model/user.php";

class Register{    
    
    public function __construct(){

    }
    public function show(){
        require_once "views/posts/register.php";
    }

    public function store_user(){
        $user = new User();
        $user->setUsername($_POST['username']);
        $user->setEmail($_POST['email']);
        $user->setImageProfile($_POST['imageprofile']);
        $user->setPassword($_POST['password']);
        $user->setRole(1);
        $user->save();
        header("Location: /");

    }

}

?>