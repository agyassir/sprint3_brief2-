<?php 
session_start();
$idd=$_SESSION["id"];
if($idd < 0){
  header('location:contacts.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Material Design for Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="./css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
  <!--Main Navigation-->
  <header>
    <style>
      #intro {
        background-image: url("https://mdbootstrap.com/img/new/fluid/city/018.jpg");
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark d-lg-block" style="z-index: 2000;">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link"  href="index.php">
          <img src="./image/icon2.png" height="30" alt="MDB Logo" loading="lazy" style="margin-top: -1px" alt="">
        </a>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary py-2 px-3" data-toggle="modal" data-target="#exampleModalCenter">
  <i class="fa-solid fa-user" style="color: #ffffff;"></i>
</button>

<?php 
include('modals.php');
?>
    </nav>
    <!-- Navbar -->