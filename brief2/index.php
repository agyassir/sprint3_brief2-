<?php
include('connexion.php');
include('header.php');
?>
    <!-- Navbar -->

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
          <div class="text-white">
            <h1 class="mb-3">GET TO CONTACT WHOEVER YOU HAVE IN MIND</h1>
            <h5 class="mb-4">Best & free contact web site</h5>
            <?php
            if(isset($idd)){
            
            ?>
            <a class="btn btn-outline-light btn-lg m-2"  href="contacts.php">contacts</a>
            <a class="btn btn-outline-light btn-lg m-2"  href="contacts.php">log out</a><?php }else{?>
                
            <a class="btn btn-outline-light btn-lg m-2"  role="button"
              rel="nofollow" target="_blank" data-toggle="modal" data-target="#exampleModalCenter">sign in</a>
            <a class="btn btn-outline-light btn-lg m-2"  target="_blank"
              role="button" data-toggle="modal" data-target="#examplesignup">sign up</a>
              
              
              
              <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->

 <?php 
 include('modals.php');
 include('footer.php');?>

