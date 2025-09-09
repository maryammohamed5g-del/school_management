<?php
include_once "../Conect.php";
$Conect= new Conect();

if(isset($_POST['id'])){
    if( $Conect->delete('teachers',$_POST['id'])){
      header('location:\school_mangment\teachers\index.php?delete=success');
      exit;
        // print "you delete record";
    }
}

$teacherData= $Conect->select("teachers");

include_once "../header.php";
?>

        
        <div class="card shadow-lg rounded-4 mx-auto" style="max-width: 600px;">
        <div class="card-header bg-info text-dark text-center rounded-top-4">
         <h1 class="card-title fw-bold">Welcome To Teachers Show</h1>
    
        </div>
        </div>

    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <a class="btn btn-info rounded-pill" href="\school_mangment\teachers\add.php">Add New Teachers</a>
            <?php
            if(isset($_GET['add']) && $_GET['add']=="success")
                {
                print "<div class='alert alert-success'> you add teacher successfully</div>";
            }
            if(isset($_GET['delete']) && $_GET['delete']=="success")
                {
               print "<div class='alert alert-danger'> you delete teacher successfully</div>";
            }
            if(isset($_GET['edit']) && $_GET['edit']=="success")
                {
                print "<div class='alert alert-info'> you edit teacher successfully</div>";
            }
            ?>
        <table class="table table-striped shadow table-hover align-middle text-center">
        <thead class="table-dark">
        <tr>
      <th scope="col">#</th>
      <th scope="col"> Name</th>
      <th scope="col"> Subject</th>
      <th scope="col"> Phone</th>
     <th scope="col">Email</th>
      <th scope="col"> Age</th>
      <th scope="col">Add by</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
      


    </tr>
  </thead>
  <tbody>
    <?php foreach($teacherData as $key=>$value){?>
         <tr>
      
      <th scope="row"><?= $key +1 ?></th>
      <td><?= $value['name'] ?></td>
      <td><?= $value['subject'] ?></td>
      <td><?= $value['phone'] ?></td>
      <td><?= $value['email'] ?></td>
      <td><?= $value['age'] ?></td>
      <td><?= @$Conect->selectOne('users',$value['user_id'])['user_name'] ?></td>
      

      <td>
        <form method="POST" onsubmit="return confirm('are you sure to delete teacher')">
            <input type="hidden" name="id" value="<?= $value['id'] ?>">
            <input type="submit" class="btn btn-danger rounded-pill" value="Delete">
        </form>
      </td>
        <td>
            <a class="btn btn-success rounded-pill" href="\school_mangment\teachers\edit.php?id=<?= $value['id'] ?>">Edit</a>
        </td>



    </tr>
    
    
    
    <?php }?>
    
  </tbody>
</table>    
        </div>
    </div>


    <?php
    include_once "../footer.php";