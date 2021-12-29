<?php

class Home{
    function __construct(){      
        require_once "model/category_model.php";        
        $category = new category_model();
        $categories = $category->get_categories();       
        require_once "views/posts/home.php";
    }

}

?>
