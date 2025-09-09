<?php
include_once "../Conect.php";

$Conect = new Conect();
$class =$Conect->selectOne('class_rooms',$_GET['id']); // الكود هنا بعمل منه هاتلي من الجدول اي دي بيساوي كذا
if(isset($_POST['name_class'])){
  $Conect->update($_POST,'class_rooms',$class['id']);
  header('location:\school_mangment\class_rooms\index.php?edit=success');
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
            <h1>page edit class <?= $class ['name_class']?></h1>
        </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-6">
                <form method="POST">
                <!-- form -->
            
  <div class="mb-3">
    <label  class="form-label"> Name_class</label>
    <input type="text" value="<?= $class['name_class']?>" name="name_class" class="form-control" >
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Grade </label>
    <input type="text"value="<?= $class['grade']?>"  class="form-control" name="grade">
  </div>
    <div class="mb-3">
    <label  class="form-label">Capacity </label>
    <input type="text"value="<?= $class['capacity']?>"  class="form-control" name="capacity">
  </div>
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                        </div>
                        </div>
                        </div>





<?php
include_once "../footer.php";