<?php
include 'connexion.php'; 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
        if (!preg_match("/^[a-zA-Z0-9]+$/", $username)) {
            $usernameErr = "Invalid username. Use only letters and numbers.";
        }
    }
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]); }
    if (empty($usernameErr) && empty($passwordErr)) {
        // Perform login logic here
        // For example, check the username and password against your database
        // If the credentials are valid, redirect the user to a dashboard or home page
        // Otherwise, display an error message
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
                header('location:index.php');
            }
           
        } 
                
        if(isset($_SESSION["id"])){
            header('location:contacts.php');
        }
    }
}
?>


?>
  