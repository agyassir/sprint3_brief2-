<?php
include 'connexion.php'; 
session_start();
    if(isset($_POST['log'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM user WHERE username='$username' AND password ='$password'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) === 1){
            $sql2="select id from  user where username='$username' AND password='$password'";
            $res=mysqli_query($conn,$sql2);
            while ($row = $res->fetch_assoc()) {
                $_SESSION["id"]= $row["id"];
            }
            }
                else{
            echo "dima kokab is not the password";
        }
       
    } 
            
    if(isset($_SESSION["id"])){
        header('location:contacts.php');
    }
?>
  