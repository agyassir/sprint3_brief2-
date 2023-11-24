<?php 
include "connexion.php";
session_start();
function validate($data){

    $data = trim($data);

    $data = stripslashes($data);

    $data = htmlspecialchars($data);

    return $data;

 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
     <input type="text" name="username" id="">
     <input type="password" name="password" id="">
     <input type="submit" value="login" name="submit">
    </form>
    <?php 
    if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
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
    
    ?>
</body>
</html>