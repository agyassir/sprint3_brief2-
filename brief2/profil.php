<?php
include 'connexion.php';
include 'header.php';
$sql="SELECT * from user where id='$idd'";
$resulta=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_assoc($resulta)){

?>
<div class="container rounded bg-white mt-5 mb-5">
    <form action="" method="post">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?=$rows['username']?></span><span class="text-black-50"><?=$rows['email']?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" name="username" value="<?=$rows['username']?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email </label><input type="email" class="form-control" placeholder="enter email" name="email" value="<?=$rows['email']?>"></div>
                </div>
                <div class="mt-5 text-center"><input class="btn btn-primary profile-button" type="submit" name="updateprofil" value="save"></div></form>
            </div>
        </div>
       <br>
    </div>
</div>
</div>
</div>




<?php
} 
if(isset($_POST['updateprofil'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $sql="UPDATE `user` SET `username`='$username',`email`='$email' WHERE id='$idd'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('refresh:1');
    }else{
header('location:index.php');
    }

}

include 'modals.php';
include 'footer.php';
?>