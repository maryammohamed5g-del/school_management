<?php


include_once "../Conect.php";

if (isset($_POST['name_class'])) {
  
    $objConect = new Conect();

   if( $objConect->insert($_POST,'class_rooms')){
    header('location:/school_mangment/class_rooms/index.php?add=success');
    exit; // الانتقال الي صفحة جدول التلاميذ
  //  print "<div class= 'alert alert-success'>student add successfuly</div>";
   }else{
    print "<div class= 'alert alert-danger'>not add class</div>";
   }

 }





 include_once "../header.php";
?>







 



    
    <!-- نفتح هنا container -->
    <?php if(isset($_SESSION['id'])){ ;
?>
        <div class="row">
          <div class="alert alert-success">class add successfully</div>
            <div class="col-3"></div>
            <div class="col-6">
                <form method="POST">
                <!-- form -->
            
  <div class="mb-3">
    <label  class="form-label fw-bold">Class_name</label>
    <input type="text" name="name_class" class="form-control" placeholder="Enter class_name" required>
    
  </div>
  <div class="mb-3">
    <label  class="form-label fw-bold">Grade</label> 
    <input type="text" class="form-control" name="grade" placeholder="Enter grade" required>
  </div>
  
  <div class="mb-3">
    <label  class="form-label fw-bold">Capacity</label>
    <input type="text" name="capacity" class="form-control" placeholder="Enter capacity" required >
    
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