 <!-- log in Modal -->
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="ion-ios-close"></span>
        </button>
      </div>
      <div class="modal-body p-4 p-md-5">
        <div class="icon d-flex align-items-center justify-content-center">
          <span class="ion-ios-person"></span>
        </div>
        <h3 class="text-center mb-4">Sign In</h3>
        <form action="login.php" class="login-form" method="post">
          <div class="form-group">
            <input type="text" name="username" class="form-control rounded-left" placeholder="Username" required>
          </div>
          <div class="form-group d-flex">
            <input type="password" class="form-control rounded-left" placeholder="Password" name="password" required>
          </div>
          <div class="form-group">
            <input type="submit" class="form-control btn btn-primary rounded submit px-3" value="submit" name="log">
            <input type="hidden" name="trait" value="sign_in">
          </div>
          <div class="form-group d-md-flex">
            <div class="form-check w-50">
              <label class="custom-control fill-checkbox">
                <input type="checkbox" class="fill-control-input">
                <span class="fill-control-indicator"></span>
                <span class="fill-control-description">Remember Me</span>
              </label>
            </div>
            <div class="w-50 text-md-right">
              <a href="#">Forgot Password</a>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>


<!-- signup modal -->
<div class="modal fade" id="examplesignup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="ion-ios-close"></span>
        </button>
      </div>
      <div class="modal-body p-4 p-md-5">
        <div class="icon d-flex align-items-center justify-content-center">
          <span class="ion-ios-person"></span>
        </div>
        <h3 class="text-center mb-4">Sign Up</h3>
        <form action="signin.php" method="post" class="login-form" onsubmit="return validateForm()">
          <div class="form-group">
            <input type="text" name="username" class="form-control rounded-left" placeholder="Username" required>
          </div>
          <div class="form-group d-flex">
            <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
          </div>
          <div class="form-group d-flex">
            <input type="password" class="form-control rounded-left" placeholder="confirm Password" required>
          </div>
          <div class="form-group d-flex">
            <input type="tel" name="phone" class="form-control rounded-left" placeholder="Phone" required>
          </div>
          <div class="form-group d-flex">
            <input type="email" name="email" class="form-control rounded-left" placeholder="email" required>
          </div>
          <div class="form-group">
            <input type="submit" class="form-control btn btn-primary rounded submit px-3" name="submit" value="sign up">
          </div>
          <div class="form-group d-md-flex">
            <div class="form-check w-50">
             
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- delete modal -->




      <!-- add modal -->

      <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="ion-ios-close"></span>
        </button>
      </div>
      <div class="modal-body p-4 p-md-5">
        <div class="icon d-flex align-items-center justify-content-center">
          <span class="ion-ios-person"></span>
        </div>
        <h3 class="text-center mb-4">contact detail</h3>
        <form action="adding.php" method="POST" class="login-form">
          <div class="form-group">
            <input type="text" name="username" class="form-control rounded-left " placeholder="Username">
          </div>
          
          <div class="form-group d-flex">
            <input type="tel" name="phone" class="form-control rounded-left mt-1" placeholder="phone number">
          </div>
          <div class="form-group d-flex">
            <input type="email" name='email' class="form-control rounded-left mt-1" placeholder="email">
          </div>
          <div class="form-group">
            <input type="submit" class="form-control btn btn-primary rounded submit px-3 mt-3 " name="submit" value="add contact">
          <div class="form-group d-md-flex">
            <div class="form-check w-50">
             
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- edit modal -->


      <!-- delete all modal -->
      <div class="modal fade" id="clearmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="ion-ios-close"></span>
        </button>
      </div>
      <div class="modal-body p-4 p-md-5">
        <div class="icon d-flex align-items-center justify-content-center">
          <span class="ion-ios-person"></span>
        </div>
        <h3 class="text-center mb-4">Confirm</h3>
        <h4 class="text-center mb-4">are you sure you want to clear your contacts</h4>
      </div>
      <div class="modal-footer">
      <div class="form-group">
        <form action="contacts.php" method="post">
        <input type="submit" name='delete' class=" btn btn-danger d-flex rounded-left px-3 mx-auto" value="I am sure">
        </form></div>
      </div>

    </div>
  </div>
</div>
      </div>