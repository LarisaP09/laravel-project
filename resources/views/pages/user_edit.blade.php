@include('navigation.nav-bar')
include "../php-connection/show_user.php";

<div class="container rounded bg-white mt-5 mb-5">
  <div class="row">
    <div class="col-md-3 border-right">
      <div class="d-flex flex-column align-items-center text-center p-3 py-5">
        <span class="font-weight-bold"><?php echo $user_fullname; ?></span>
        <span class="text-black-50"><?php echo $user_email; ?></span>
        <span> </span>
      </div>
    </div>
  </div>
  <div class="col-md-5 border-right">
    <div class="p-2 py-5">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="text-right">Profile Settings</h4>
      </div>
      <div class="row mt-2">
        <form action="../php-connection/user_settings.php" method="post">
          <div class="col-md-6">
            <label class="labels">Last name</label>
            <input type="text" class="form-control" placeholder="last name" name="last_name">
          </div>
          <div class="col-md-6">
            <label class="labels">First name</label>
            <input type="text" class="form-control" placeholder="first name" name="first_name">
          </div>
          <div class="col-md-6">
            <label class="labels">Username</label>
            <input type="text" class="form-control" name="username" placeholder="username">
          </div>
          <button class="btn btn-primary m-2" type="submit" name="save_profile">Save data</button>
        </form>


      </div>
    </div>
  </div>
</div>
</div>
</div>

@include('navigation.footer')
