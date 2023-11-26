sql ='select * from contacts where id=$row["id"]'

$edit=mysqli_query($conn,$sql);
while($fill=mysqli_fetch_assoc($edit)){
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
        <h3 class="text-center mb-4">edit</h3>
        <form action="edit.php" method="POST" class="login-form">
          <div class="form-group">
            <input type="text" name="username" class="form-control rounded-left " placeholder="Username" value="<?= $fill['username']?>">
          </div>
          
          <div class="form-group d-flex">
            <input type="tel" name="phone" class="form-control rounded-left mt-1" placeholder="phone number" value="<?= $fill['phone']?>">
          </div>
          <div class="form-group d-flex">
            <input type="email" name='email' class="form-control rounded-left mt-1" placeholder="email" value="<?=$fill['email']?>">
          </div>
        <input type="button" name='edit' class=" btn btn-danger rounded-left px-3" value="I am sure">
        </form>  
    </div>

    </div>
  </div>
</div>
}