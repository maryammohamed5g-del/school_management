<?php
include_once "../Conect.php";

$Conect = new Conect();
$student =$Conect->selectOne('students_info',$_GET['id']); // الكود هنا بعمل منه هاتلي من الجدول اي دي بيساوي كذا
if(isset($_POST['first_name'])){
  $Conect->update($_POST,'students_info',$student['id']);
  header('location:\school_mangment\student\index.php?edit=success');
  exit;
    
}
include_once "../header.php";
if(!isset($_SESSION['userName'])){
  header('location:\school_mangment\users\login.php');
  exit;
}
?>


    <div class="row justify-content-center">
        <div class="col-6 bg-info">
            <h1>page edit student <?= $student ['first_name']?></h1>
        </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-6">
                <form method="POST">
                <!-- form -->
            <form>
  <div class="mb-3">
    <label  class="form-label">First name</label>
    <input type="text" value="<?= $student['first_name']?>" name="first_name" class="form-control" >
    <div  class="form-text">add you first name</div>
  </div>
  <div class="mb-3">
    <label  class="form-label">last name </label>
    <input type="text"value="<?= $student['last_name']?>"  class="form-control" name="last_name">
  </div>
  
  <div class="mb-3">
    <label  class="form-label">email</label>
    <input type="text" value="<?= $student['email']?>" name="email" class="form-control" >
    
  </div>
  <div class="mb-3">
    <label  class="form-label">age</label>
    <input type="text" value="<?= $student['age']?>"name="age" class="form-control" >
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                        </div>
                        </div>
                        </div>





<?php
include_once "../footer.php";