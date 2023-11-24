<?php 
include('connexion.php');
include('header.php');
include('delete.php');
$idd=$_SESSION["id"] ;
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
<table class="table table-primary table-bordered table-hover border-black ">
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
echo "<td>".$row['email']." </td>";
echo "<td>".$row['phone']." </td>" ;
echo '<td><button type="button" class="btn btn-primary py-2 px-3 me-2" data-toggle="modal" data-target="#editmodal">
<i class="fa-solid fa-user" style="color: #ffffff;"></i>
</button><button type="button" class="btn btn-danger py-2 px-3" data-toggle="modal" data-target="#deletemodal">
<i class="fa-solid fa-trash" style="color: #ffffff;"></i>
</button> </td></tr>';
if(isset($_POST['delete'])){
  $idd2 = $row['id'];
  $sql5= "delete from contact where id = '$idd2'";
  $resultdel=mysqli_query($conn,$sql5);
  if($resultdel){
    header('refresh:1');
  }

};


}
 echo '</table></button><button type="button" class="btn btn-danger py-2 px-3" data-toggle="modal" data-target="#deletemodal">
 <i class="fa-solid fa-trash" style="color: #ffffff;"></i> </div>';
 include 'footer.php';?>