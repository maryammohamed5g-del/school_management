<?php
session_start();

?>
<!-- header strat -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/school_mangment/assests/style/bootstrap.min.css">
</head>
<body>
   <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/school_mangment"><?php print isset($_SESSION['userName']) ? $_SESSION['userName']:"School Mangement" ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/school_mangment">Home</a>
          </li>
<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/school_mangment/users">Users</a>
        </li>



      <?php
      if(isset($_SESSION['userName'])){ ?>
          <li class="nav-item">
          <a class="nav-link" href="/school_mangment/student">student</a>
        
        </li>
      <?php }
      ?>
        
        
       
        <?php
      if(isset($_SESSION['userName'])){ ?>
        <li class="nav-item">
          <a class="nav-link"  href="/school_mangment/teachers">Teachers</a>

        </li>
         <?php }
      ?>
      <?php
      if(isset($_SESSION['userName'])){ ?>
         <li class="nav-item">
          <a class="nav-link"  href="/school_mangment/class_rooms">Class_rooms</a>
        </li>
        <?php }
      ?>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Auth
          </a>
          <ul class="dropdown-menu">
            <?php
            if(!isset($_SESSION['userName'])){?>
            <li><a class="dropdown-item" href="/school_mangment/users/Login.php">Login</a></li>
            <li><a class="dropdown-item" href="/school_mangment/users/add.php">Register</a></li>

              <?php } else{?>

            <li><a class="dropdown-item" href="/school_mangment/users/Logout.php">Logout</a></li>
            <?php } ?>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- header end -->
