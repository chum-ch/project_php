<?php include_once('../partial/header.php');?>
<form action="verify_signup.php" method="POST" enctype="multipart/form-data" class="row g-3 m-auto p-3 col-md-5 col-8 shadow-lg p-3 mb-5 mt-5 bg-body rounded">
<img src="https://www.ivolunteer.com.ph/storage/logo_images/org_e3d76f2451a22c6866d85c5c45b81842.png"
  class="rounded-circle m-auto mt-2 w-25" alt="">
  <div class="brand text-center fw-bolder fs-4 g-2">
    <span class="text-warning">P</span>
    <span class="text-primary">N</span>
    <span class="text-info">C</span>
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">First name<span class="text-danger">*</span></label>
    <input type="text" name="f_name" class="form-control" id="inputAddress" placeholder="Your first name..." >
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Last name<span class="text-danger">*</span></label>
    <input type="text" name="l_name" class="form-control" id="inputAddress" placeholder="Your last name..." >
  </div>
  <div class="col-12">
    <label for="inputEmail4" class="form-label">Email<span class="text-danger">*</span></label>
    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Your email" >
  </div>
  <div class="col-12">
    <label for="inputPassword4" class="form-label">Password<span class="text-danger">*</span></label>
    <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Your password" >
  </div>
  <div class="float-end">
    <button type="submit"  name="sign_in" class="btn btn-primary col-3 float-end">Sign in</button>
  </div>
</form>