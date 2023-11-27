<?php
session_start();
include 'connexion.php';
$idd=$_SESSION["id"];
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql = "insert into contacts values(null,'$username','$email','$phone','$idd')";
    $result=mysqli_query($conn,$sql);
    header('location:contacts.php');
}

?>