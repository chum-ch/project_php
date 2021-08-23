<?php
  session_start();
  include_once('../db/database.php');
  if(isset($_POST['submit'])) {
    function validate($data){
      # Removes whitespace from beginning and end of a string
      $vali = trim($data);
      return $vali;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    if(empty($username)) {
      header("location:login.php?error=*Require your username, Please input!");
      exit();
    }
    if(empty($password)) {
      header("location:login.php?error=*Require your username, Please input!");
      exit();
    }
    else{
      $username_lowercase = strtolower($username);
      $password_enc = getEncryptPwd($username_lowercase);
      if (mysqli_num_rows($password_enc) === 0) {
        # if mysqli_num_rows reture 0 mean can not get data.
        header("location:login.php?incorect=Your username incorect, Please check!");
        exit();
      }
      else {
        foreach($password_enc as $pass){
          if ($username_lowercase != $pass['full_name']){
            header("location:login.php?incorect=Your username incorect, Please check!");
            exit();
          }else {
            if(password_verify($password, $pass['password']) && ($username_lowercase === $pass['full_name'])){
              print_r($pass);
              $_SESSION['first_name'] = $pass['first_name'];
              $_SESSION['full_name'] = $pass['full_name'];
              $_SESSION['user_id'] = $pass['user_id'];
              $$_SESSION['role'] = $pass['role'];
              header("location:../index.php");
            }else {
              header("location:login.php?incorect=Your password incorect, Please check!");
              exit();
            }
          }
        }
      }
    }
  }else{header("location:login.php");}