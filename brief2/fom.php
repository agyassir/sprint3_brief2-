<?php
include('connexion.php');
session_start();
if(isset($_SESSION["id"])){
  header('location:contacts.php');
}else{
  include('header.php');
}
?>


    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
          <div class="text-white">
            <h1 class="mb-3">GET TO CONTACT WHOEVER YOU HAVE IN MIND</h1>
            <h5 class="mb-4">Best & free contact web site</h5>
            <a class="btn btn-outline-light btn-lg m-2"  role="button"
              rel="nofollow" target="_blank" data-toggle="modal" data-target="#exampleModalCenter">sign in</a>
            <a class="btn btn-outline-light btn-lg m-2"  target="_blank"
              role="button" data-toggle="modal" data-target="#exampleModalCenter">sign up</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->

 

  <!--Footer-->
  <footer class="bg-light text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="#">dima kokab</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->
  <!-- MDB -->
  <script type="text/javascript" src="./js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script src="./modal/js/jquery.min.js"></script>
  <script src="./modal/js/popper.js"></script>
  <script src="./modal/js/bootstrap.min.js"></script>
  <script src="./modal/js/main.js"></script>

<?php
if(isset($_POST['submit'])
){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select   VALUES(NULL,'$username','$email','$number','1')";
$result = mysqli_query($conn,$sql);
$search="SELECT * FROM CONTACT";
$res=mysqli_query($conn,$search);
while ($row = mysqli_fetch_assoc($res)) {

    echo "<tr>";
    // echo "<td>" . $row['id'] . "</td>";
    // echo "<td>" . $row['username'] . "</td>";
    // echo  "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["phone"] . "</td>" . "</br>";
    echo "<tr>";
}
}



?>
</body>

</html>