<?php include_once('../partial/header.php');?>
<form action="verify_login.php" method="POST" enctype="multipart/form-data"
class="row g-3 m-auto p-3 col-md-4 col-8 shadow-lg p-3 mb-5 mt-5 bg-body rounded-3">
<img src="https://www.ivolunteer.com.ph/storage/logo_images/org_e3d76f2451a22c6866d85c5c45b81842.png"
  class="rounded-circle m-auto mt-2" alt="" style="width: 30%;">
  <div class="brand text-center fw-bolder fs-4 g-2">
    <span class="text-warning">P</span>
    <span class="text-primary">N</span>
    <span class="text-info">C</span>
  </div>
  <?php if (isset($_GET['incorect'])){echo "<h5 class='ms-2 text-danger'>".$_GET['incorect']."</h5>";};?>
  <?php if (isset($_GET['sign_in'])){echo "<h5 class='ms-2 text-success'>".$_GET['sign_in']."</h5>";};?>
  
  <div class="col-md-12">
    <input type="text" class="form-control my-2" name="username" id="inputAddress" placeholder="Your username...">
    <?php if (isset($_GET['error']))
    {
      echo "<small class='ms-2 text-danger'>".$_GET['error']."</small>";
    };?>
  </div>
  <!-- <div class="col-12">
    <label for="inputEmail4" class="form-label">Email<span class="text-danger">*</span></label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="Your email">
  </div> -->
  <div class="col-12">
    <input type="password" class="form-control my-2" name="password" id="inputPassword4" placeholder="Your password">
    <?php if (isset($_GET['error']))
    {
      echo "<small class='ms-2 text-danger'>"."*Require your password, Please input!"."</small>";
    };?>
  </div>
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary col-12">Loing</button>
  </div>
  <div class="create d-flex">
    <h6 class="mx-2 g-0">Did you create account?</h6> 
    <a href="signup.php" style="text-decoration: none; margin-top:-2px;">Sign in!</a>

  </div>
</form>