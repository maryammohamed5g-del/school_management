<?php
include_once "../Conect.php";

$Conect = new Conect();
$user =$Conect->selectOne('users',$_GET['id']); // الكود هنا بعمل منه هاتلي من الجدول اي دي بيساوي كذا
if(isset($_POST['user_name'])){
  $Conect->update($_POST,'users',$user['id']);
  header('location:\school_mangment\users\index.php?edit=success');
  exit;
    
}
include_once "../header.php";
?>


    <div class="row justify-content-center">
        <div class="col-6 bg-info">
            <h1>page edit user <?= $user ['user_name']?></h1>
        </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-6">
                <form method="POST">
                <!-- form -->
            <form>
  <div class="mb-3">
    <label  class="form-label">User Name</label>
    <input type="text" value="<?= $user['user_name']?>" name="user_name" class="form-control" >
    <div  class="form-text">add you user name</div>
  </div>
  
  
  <div class="mb-3">
    <label  class="form-label">email</label>
    <input type="text" value="<?= $user['email']?>" name="email" class="form-control" >
    
  </div>
  <div class="mb-3">
    <label  class="form-label">password</label>
    <input type="password" value="<?= $user['password']?>" name="password" class="form-control" >
    
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                        </div>
                        </div>
                        </div>





<?php
include_once "../footer.php";