<?php 
include('connexion.php');
include('header.php');
if(isset($_SESSION["id"])){
$idd=$_SESSION["id"] ;}
else{
  header('location:index.php');
}
$sql="insert into contacts value(NULL,)";
$sql="select * from contact where iduser='$idd'";
$result=mysqli_query($conn,$sql);
$name="select * from user where id='$idd'";
$resu=mysqli_query($conn,$name);
while ($row2 = mysqli_fetch_assoc($resu)){
?>
<div class="container d-flex align-items-centerq justify-content-center text-center h-25">
          <div class="text-primary">
<h1 class="mb-3">Welcome back</h1>
<h5 class="mb-4"><?php echo $row2['username'];  ?></h5>
          </div></div>
          <div class="container w-50">
            <button class="float-end btn-primary rounded py-2 px-3 me-2" data-toggle="modal" data-target="#addmodal"><i class="fa-solid fa-plus" style="color: #ffffff;"></i></button>
            <table class="table table-primary table-bordered table-hover ">
<thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col"></th>
    </tr>
  </thead>
<?php

};
while ($row = mysqli_fetch_assoc($result)) {
 echo "<tr><td>".$row['username']."</td>";
 $idd2=$row["id"];
echo "<td>".$row['email']." </td>";
echo "<td>".$row['phone']." </td>" ;
echo '<td><button type="button" class="btn btn-primary py-2 px-3 me-2" data-toggle="modal" data-target="#editmodal'.$idd2.'"><i class="fa-solid fa-user" style="color: #ffffff;"></i></button>';
echo'
</button><button type="button" class="btn btn-danger py-2 px-3" data-toggle="modal" data-target="#deletemodal'.$idd2.'" >
<i class="fa-solid fa-trash" style="color: #ffffff;"></i>
</button> </td></tr>';


$_SESSION["cid"] = $idd2;
$fas="SELECT * FROM CONTACT WHERE id = $idd2";
$ref=mysqli_query($conn,$fas);
while($fill=mysqli_fetch_assoc($ref)){
?>
<!-- edit modal -->
<div class="modal fade" id="<?='editmodal'.$idd2?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="ion-ios-close"></span>
        </button>
      </div>
      <div class="modal-body p-4 p-md-5">
        <div class="icon d-flex align-items-center justify-content-center">
          <span class="ion-ios-person"></span>
        </div>
        <h3 class="text-center mb-4">edit</h3>
        <form action="edit.php?" method="POST" class="login-form">
          <div class="form-group">
            <input type="hidden" value="<?=$idd2?>" name="id">
            <input type="text" name="username" class="form-control rounded-left " placeholder="Username" value="<?= $fill['username']?>">
          </div>
          
          <div class="form-group d-flex">
            <input type="tel" name="phone" class="form-control rounded-left mt-1" placeholder="phone number" value="<?= $fill['phone']?>">
          </div>
          <div class="form-group d-flex">
            <input type="email" name='email' class="form-control rounded-left mt-1" placeholder="email" value="<?=$fill['email']?>">
          </div>
        <button type="submit" name='delet' class=" btn btn-primary rounded-left px-3" ><i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i></button>
        </form>  
    </div>

    </div>
  </div>
</div>
<?php } ?>
<!-- delete modal -->
</div>
      <div class="modal fade" id="<?='deletemodal'.$idd2?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="ion-ios-close"></span>
        </button>
      </div>
      <div class="modal-body p-4 p-md-5">
        <div class="icon d-flex align-items-center justify-content-center">
          <span class="ion-ios-person"></span>
        </div>
        <h3 class="text-center mb-4">Confirm</h3>
        <h4 class="text-center mb-4">are you sure you want to delete this contact</h4>
      </div>
      <div class="modal-footer">
      <div class="form-group">
        <form action="delete.php" method="POST">
        <input type="hidden" value="<?=$idd2?>" name="id">
        <input type="submit" name='delete' class=" btn btn-danger d-flex rounded-left px-3 mx-auto" value="I am sure"></form>
        </div>
      </div>

    </div>
  </div>
</div>
      </div>
<?php 
}
 echo '</table></button><button type="button" class="btn btn-danger py-2 px-3" data-toggle="modal" data-target="#clearmodal" >
 <i class="fa-solid fa-trash" style="color: #ffffff;"></i> </div>';
 include 'modals.php';
 include 'footer.php';?>