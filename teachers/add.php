<?php


include_once "../Conect.php";

if (isset($_POST['name'])) {
  
    $objConect = new Conect();

   if( $objConect->insert($_POST,'teachers')){
    header('location:/school_mangment/teachers/index.php?add=success');
    exit; // الانتقال الي صفحة جدول التلاميذ
  //  print "<div class= 'alert alert-success'>student add successfuly</div>";
   }else{
    print "<div class= 'alert alert-danger'>not add teacher</div>";
   }

 }





 include_once "../header.php";
?>







 



    
    <!-- نفتح هنا container -->
    <?php if(isset($_SESSION['id'])){ ;
?>
        <div class="row">
          <div class="alert alert-success">teacher add successfully</div>
            <div class="col-3"></div>
            <div class="col-6">
                <form method="POST">
                <!-- form -->
            
  <div class="mb-3">
    <label  class="form-label fw-bold"> Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter name" required>
    
  </div>
  <div class="mb-3">
    <label  class="form-label fw-bold">Subject</label> 
    <input type="text" class="form-control" name="subject" placeholder="Enter subject" required>
  </div>
  
  <div class="mb-3">
    <label  class="form-label fw-bold">Phone</label>
    <input type="text" name="phone" class="form-control" placeholder="Enter phone" required >
    
  </div>
  <div class="mb-3">
    <label  class="form-label fw-bold">Email</label>
    <input type="text" name="email" class="form-control" placeholder="Enter email" required>
    
  </div>
  <div class="mb-3">
    <label  class="form-label fw-bold">Age</label>
    <input type="number" name="age" class="form-control" placeholder="Enter age" required>
    
  </div>
  <!-- ارسال معرف المستخدم المسجل دخول الحفظ في الداتا -->
  <input type="hidden" name="user_id" value="<?= $_SESSION['id'] ?>">

  
  <button type="submit" class="btn btn-primary rounded-pill">Submit</button>
</form>
                        
        <?php }else{
          //print"<div class=' alert alert-danger'>you dontn't login user</div>";
          header('location:\school_mangment\users\login.php');
        } ?>

<?php
include_once "../footer.php";