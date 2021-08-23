<?php
  include_once('../db/database.php');
  function vali_date($data){
    # Removes whitespace from beginning and end of a string
    $vali = trim($data);
    return $vali;
  }
  $first_name = vali_date($_POST['f_name']);
  $last_name = vali_date($_POST['l_name']);
  $email = vali_date($_POST['email']);
  $password = vali_date($_POST['password']);
  $encrpty_pass = password_hash($password, PASSWORD_DEFAULT);
  if(isset($_POST['sign_in'])){
    createUser($_POST, $encrpty_pass);
    header("location:login.php?sign_in=Your account have done created login now!");
  }