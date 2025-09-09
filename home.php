<?php include_once "./header.php"; ?>




<!-- content -->
 <div class="container">
 <div class="row justify-content-center">
    <div class="col-6">
        <?php if(isset($_SESSION['userName'])){

        
      print  "<h1> welcome" .$_SESSION['userName'] ."</h1>";
        } ?>
        <br>
        <div class="card text-center bg-light">
  <div class="card-header bg-info">
    Add Last Student
  </div>
  <div class="card-body">
    <h1>Welcome</h1>
    <p class="card-text">Last name: <?php print isset( $_COOKIE['lastStudent']) ? $_COOKIE['lastStudent']: ""?></p>
    <p class="card-text">Email: <?php print isset( $_COOKIE['lastStudentEmail']) ? $_COOKIE['lastStudentEmail']: ""?></p>
    <p class="card-text">Age: <?php print isset( $_COOKIE['lastStudentAge']) ? $_COOKIE['lastStudentAge']: ""?></p>
  </div>
  </div>
  </div>
  </div>

 <br>
 <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="\school_mangment\assests\imge\39f9783216a35baec42b2375f934fb68.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="\school_mangment\assests\imge\69e93826d7ae1840088d9c1b91ad8b22.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="\school_mangment\assests\imge\93d8e0396fc54216cc404ec95e06e65e.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br>
  <div class="row justify-content-center ">
    <!-- Card 1 -->
    <div class="col-md-4">
    
        <img src="\school_mangment\assests\imge\164cf7da7a066d6b879c7b80aa509044.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">STUDENT</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
          <a href="/school_mangment/student/index.php" class="btn btn-primary">student</a>
        </div>
      </div>
    

    <!-- Card 2 -->
    <div class="col-md-4">
      
        <img src="\school_mangment\assests\imge\93d8e0396fc54216cc404ec95e06e65e.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">USER</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
          <a href="/school_mangment/users/index.php" class="btn btn-primary">users</a>
        </div>
      </div>
    </div>
  </div>
  
<?php include_once "./footer.php"; ?>





