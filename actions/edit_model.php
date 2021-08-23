<?php
  include_once('../db/database.php');
  if(isset($_POST['add'])){
    if (count($_POST) === 4) {
      updateNews($_POST);
      header("location:../?page=news");
      // print_r($_POST);
      // echo count($_POST);
    }
    else {
      // print_r($_POST);
      // echo count($_POST);
      updateBook($_POST);
      header("location:../?page=book");
    }
  }