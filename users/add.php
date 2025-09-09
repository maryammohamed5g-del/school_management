<?php
include_once "../Conect.php";

if (isset($_POST['user_name'])) {
    $objConect = new Conect();
   if( $objConect->insert($_POST,'users')){
    header('location:\school_mangment\users\index.php?add=success');
    exit; // الانتقال الي صفحة جدول التلاميذ
  //  print "<div class= 'alert alert-success'>student add successfuly</div>";
   }else{
    print "<div class= 'alert alert-danger'>not add user</div>";
   }


}
include_once "../header.php";
?>

<div class="row">
          <div class="alert alert-success">page add user</div>
            <div class="col-3"></div>
            <div class="col-6">
                <form method="POST">
                <!-- form -->
            <form>
  <div class="mb-3">
    <label  class="form-label fw-bold">User Name</label>
    <input type="text" name="user_name" class="form-control" placeholder="Enter user name" required >
    </div>
  <div class="mb-3">
    <label  class="form-label fw-bold">Email </label>
    <input type="text" class="form-control" name="email" placeholder="Enter email" required>
  </div>
  
  <div class="mb-3">
    <label  class="form-label fw-bold">password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter password" required>
    
  </div>
  
  
  <button type="submit" class="btn btn-primary rounded-pill">Submit</button>
</form>
 </div>
                        
        
<?php
include_once "../footer.php";