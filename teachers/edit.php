<?php
include_once "../Conect.php";

$Conect = new Conect();
$teacher =$Conect->selectOne('teachers',$_GET['id']); // الكود هنا بعمل منه هاتلي من الجدول اي دي بيساوي كذا
if(isset($_POST['name'])){
  $Conect->update($_POST,'teachers',$teacher['id']);
  header('location:\school_mangment\teachers\index.php?edit=success');
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
            <h1>page edit teacher <?= $teacher ['name']?></h1>
        </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-6">
                <form method="POST">
                <!-- form -->
            
  <div class="mb-3">
    <label  class="form-label"> Name</label>
    <input type="text" value="<?= $teacher['name']?>" name="name" class="form-control" >
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Subject </label>
    <input type="text"value="<?= $teacher['subject']?>"  class="form-control" name="subject">
  </div>
    <div class="mb-3">
    <label  class="form-label">Phone </label>
    <input type="text"value="<?= $teacher['phone']?>"  class="form-control" name="phone">
  </div>
  
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="text" value="<?= $teacher['email']?>" name="email" class="form-control" >
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Age</label>
    <input type="text" value="<?= $teacher['age']?>"name="age" class="form-control" >
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                        </div>
                        </div>
                        </div>





<?php
include_once "../footer.php";