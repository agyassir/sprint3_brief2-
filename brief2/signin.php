<?php 
session_start();

    if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) === 1){
        $sql2="select id from  user where username like '$username' and password like '$password'";
        $_SESSION["id"]=mysqli_query($conn,$sql2);
        header('location: full-img-cover.html');
    }else{
        echo "dima kokab is not the password";
    }


}
  