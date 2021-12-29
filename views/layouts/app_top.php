<?php
  require_once "model/user.php";
  $user = new User();
  if(isset($_SESSION['UserId'])){
    $guest = $user->getById($_SESSION['UserId']);
  } 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title><?php echo $title; ?></title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Neuronabit</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/create_category">Create category<span class="sr-only">(current)</span></a>
      </li>            
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          <?php 
          if(isset($_SESSION['UserId'])){
            echo $guest['username'];
          }
          else{
            echo "Acount";
          } 
          ?>                  
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php if(!isset($_SESSION['UserId'])) echo "<a class=\"dropdown-item\" href=\"/login\">Login</a>";?>          
          <?php if(!isset($_SESSION['UserId'])) echo "<a class=\"dropdown-item\" href=\"/register\">Register</a>";?>                    
          <?php if(isset($_SESSION['UserId'])) echo "<a class=\"dropdown-item\" href=\"/logout\">Log out</a>";?>                    
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>