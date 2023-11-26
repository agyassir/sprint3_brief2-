<?php session_start();include 'connexion.php';



    if(isset($_POST['submit'])){
        
        echo "dima kokab is not the answer";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $sql = "INSERT INTO `user` VALUES (NULL,'$username','$email','$password')";
    $result=mysqli_query($conn,$sql);
    $sal="select id from user where email = '$email'";
    $ghr=mysqli_query($conn,$sal);
    while($str=mysqli_fetch_assoc($ghr)){
        $_SESSION['id']=$str['id'];
    }
    header('location:contacts.php');
   if($result){
   
   }else{
    echo "dima kokab is not the password";
   }

}
?>
  