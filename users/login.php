<?php

include_once "../Conect.php";
include_once "../header.php";
$Conect = new Conect();
if(isset($_POST['user_name'])){
    $user = $Conect->login($_POST['user_name'],$_POST['password']);
    if(count($user)>0){
        // يتم تسجيل جلسة سيشن فيها بيانات المستخدم
        
        $_SESSION['userName' ] = $user['user_name'];
        $_SESSION['id'] = $user['id'];
        header('location:\school_mangment\home.php');
        exit;
    }else{
        print "user not login";
    }
}
?>


<div class="row justify-content-center">
    <div class="col-6">
        <h1> Login in Site</h1>
    <form action="" method="POST">
    <div class="mb-3">
    <label  class="form-label">User name</label>
    <input type="text" name="user_name" class="form-control" >
    
  </div>
  <div class="mb-3">
    <label  class="form-label"> password </label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="mb-3">
  <button type="submit" class="btn btn-primary">Login</button>
  </div>
</form>
                    



</div>
    </form>
</div>
<?php

include_once "../footer.php";
