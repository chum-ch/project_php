<?php
  include_once('../db/database.php');
  if (count($_POST) === 4) {
    updateNews($_POST);
    header("location:../?page=news");
  }
  else {
    updateBook($_POST);
    header("location:../?page=book");
    
  }