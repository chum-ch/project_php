<?php
  include_once('../db/database.php');
  function upload_img() {
    $img_name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
    if ($error === 0) {
      $get_extension = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_extension = strtolower($get_extension);
      $allow_extension = ["jpg", "png", "jpeg"];
      if (in_array($img_extension, $allow_extension)) {
        $new_img_name = uniqid("IMG-", true).'.'.$get_extension;
        if(count($_POST) === 3) {
          $img_path = 'images/news_img/'.$new_img_name;
          move_uploaded_file($tmp_name, $img_path);
        }
        else {
          $img_path = 'images/book_img/'.$new_img_name;
          move_uploaded_file($tmp_name, $img_path);
        }
        return $new_img_name;
      }else{ echo "worng type files!";}
    }
  }

if (count($_POST) ===3) {
  // echo "To news folder " .upload_img();
  insertToNews($_POST, upload_img());
  header("location:../?page=news");
}
else {
  // echo(count($_POST));
  insertTobook($_POST, upload_img());
  header("location:../?page=book");
  // echo "To book folder " .upload_img();
}