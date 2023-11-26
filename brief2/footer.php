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
  
<script>
  function validateForm() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var usernameRegex = /^[a-zA-Z0-9]+$/;
    var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
    var phoneRegex = /^\d{10}$/;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!usernameRegex.test(username)) {
      alert('Invalid username. Use only letters and numbers.');
      return false;
    }

    if (!passwordRegex.test(password)) {
      alert('Invalid password. Password must be at least 6 characters long and include at least one digit, one lowercase letter, and one uppercase letter.');
      return false;
    }

    if (password !== confirmPassword) {
      alert('Passwords do not match.');
      return false;
    }

    if (!phoneRegex.test(phone)) {
      alert('Invalid phone number. Please enter a 10-digit phone number.');
      return false;
    }

    if (!emailRegex.test(email)) {
      alert('Invalid email address.');
      return false;
    }
    return true;
  }
  function validateLoginForm() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    
    var usernameRegex = /^[a-zA-Z0-9]+$/;

     if (!usernameRegex.test(username)) {
      alert('Invalid username. Use only letters and numbers.');
      return false;
    }
    return true;
  }
</script>
</body>

</html>