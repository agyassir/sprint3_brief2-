<?php 
include 'connexion.php';
if(isset($_POST['delet'])){

$ids=$_POST['id'];
$username=$_POST['username'];
$phone=$_POST['phone'];
$email=$_POST['email'];
     
    $sql54= "UPDATE `contacts` SET `username`='$username',`email`='$email',`phone`='$phone' where id=$ids ";
    $resultdel=mysqli_query($conn,$sql54);
    if($resultdel){
    header('location:contacts.php');
    }
}
?> 