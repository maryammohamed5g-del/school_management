<!-- هنا سنقوم باضافة طلاب الي قاعدة البيانات -->
<?php


include_once "../Conect.php";

if (isset($_POST['first_name'])) {
  
    $objConect = new Conect();

   if( $objConect->insert($_POST,'students_info')){
    // تسجيل كوكيز ويتم عرضه بشكل احترافي
    // طريقة حفظ الكوكيز
    setcookie("lastStudent", $_POST['first_name'], time()+(86400 * 7), '/');
    setcookie("lastStudentEmail", $_POST['email'], time()+(86400 * 7), '/');
    setcookie("lastStudentAge", $_POST['age'], time()+(86400 * 7), '/');




    header('location:/school_mangment/student/index.php?add=success');
    exit; // الانتقال الي صفحة جدول التلاميذ
  //  print "<div class= 'alert alert-success'>student add successfuly</div>";
   }else{
    print "<div class= 'alert alert-danger'>not add student</div>";
   }

 }










// $host_name = "localhost";
// $user_name = "root";
// $password = "";
// $db = "school_mangment";
// $conn = mysqli_connect($host_name, $user_name, $password, $db);

// if ($conn->query("INSERT INTO students_info (first_name,last_name) VALUES ('mohamed','yossef')")) {
//     print "<h1>yes you add</h1>";
// }

//     print "<pre>";
//     var_dump($_POST);
//     exit;
// $colms=[];
// $values=[];
//     foreach($_POST as $key=>$value){
//     $colms[] = $key;
//     $values[] = "'".$value."'";
//     }
    //  print_r($values);
    // exit;
    // $colmsString= implode(',',$colms);
    // $valuesString= implode(',', $values);
    //  print("insert into students_info($colmsString) VALUES ($valuesString)");
    //  exit;
//    if( $conn->query("insert into students_info($colmsString) VALUES ($valuesString)")){
//     print "<h1> yes you add </h1>";

   
    // if هنا معناها ضيفت اللي انا كتباه في 
    // form اضافت عندي كدا علي طول في الداتا بيز

// }
include_once "../header.php";
?>







 



    
    <!-- نفتح هنا container -->
    <?php if(isset($_SESSION['userName'])){ ;
?>
        <div class="row">
          <div class="alert alert-success">student add successfuly</div>
            <div class="col-3"></div>
            <div class="col-6">
                <form method="POST">
                <!-- form -->
            
  <div class="mb-3">
    <label  class="form-label fw-bold">First name</label>
    <input type="text" name="first_name" class="form-control" placeholder="Enter first name" required >
  <div class="mb-3">
    <label  class="form-label fw-bold">last name </label>
    <input type="text" class="form-control" name="last_name" placeholder="Enter last name" required>
  </div>
  
  <div class="mb-3">
    <label  class="form-label fw-bold">email</label>
    <input type="text" name="email" class="form-control" placeholder="Enter email" required>
    
  </div>
  <div class="mb-3">
    <label  class="form-label fw-bold">age</label>
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