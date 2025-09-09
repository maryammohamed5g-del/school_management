<?php
include_once "../Conect.php";
$Conect= new Conect();

if(isset($_POST['id'])){
    if( $Conect->delete('users',$_POST['id'])){
      header('location:\school_mangment\users\index.php?delete=success');
      exit;
        // print "you delete record";
    }
}

$userData= $Conect->select("users");

include_once "../header.php";
?>

        <div class="card shadow-lg rounded-4 mx-auto" style="max-width: 600px;">
        <div class="card-header bg-info text-dark text-center rounded-top-4">
         <h1 class="card-title fw-bold">Welcome To Users Show</h1>
    
        </div>
        </div>


    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <a class="btn btn-info rounded-pill" href="\school_mangment\users\add.php">Add New Users</a>
            <?php
            if(isset($_GET['add']) && $_GET['add']=="success")
                {
                print "<div class='alert alert-success'> you add user successfully</div>";
            }
            if(isset($_GET['delete']) && $_GET['delete']=="success")
                {
               print "<div class='alert alert-danger'> you delete user successfully</div>";
            }
            if(isset($_GET['edit']) && $_GET['edit']=="success")
                {
                print "<div class='alert alert-info'> you edit user successfully</div>";
            }
            ?>
             
        <table class="table table-striped shadow table-hover align-middle text-center">
        <thead class="table-dark">
        <tr>
       <th scope="col">#</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
      
    </tr>
  </thead>
  <tbody>
          
  
    <?php foreach($userData as $key=>$value){?>
         <tr>
      <th scope="row"><?= $key +1 ?></th>
      <td><?= $value['user_name'] ?></td>
      <td><?= $value['email'] ?></td>
      <td>
        <form method="POST" onsubmit="return confirm('are you sure to delete student')">
            <input type="hidden" name="id" value="<?= $value['id'] ?>">
            <input type="submit" class="btn btn-danger rounded-pill" value="Delete">
        </form>
      </td>
        <td>
            <a class="btn btn-success rounded-pill" href="\school_mangment\users\edit.php?id=<?= $value['id'] ?>">Edit</a>
        </td>



    </tr>
    
    
    
    <?php }?>
    
  </tbody>
  </table>    
    </div>
    </div>


    <?php
    include_once "../footer.php";