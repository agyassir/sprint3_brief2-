<?php 
include 'connexion.php';
if(isset($_POST['delete'])){

$ids=$_POST['id'];

     
    $sql54= "DELETE FROM `contact`  where id=$ids ";
    $resultdel=mysqli_query($conn,$sql54);
    if($resultdel){
    header('location:contacts.php');
    }
}
?>   