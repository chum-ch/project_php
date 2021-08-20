<?php 
  include_once('../db/database.php');

  $one_page = 5;
  $sql =db()->query("SELECT * FROM book");
  $all_rows = mysqli_num_rows($sql);
  $number_of_page = ceil($all_rows/$one_page);
  
  if (!isset($_GET['page'])) {
    $page = 1;
  }else{$page=$_GET['page'];}
  $start_limit = ($page-1)* $one_page;
  
  for ($page=1; $page<$one_page; $page++) {
    echo '<a href="pagi.php?page='.$page.'    ">    '.$page.'</a>';
  }
  $sql = db()->query("SELECT * FROM book LIMIT $start_limit, $one_page");
  foreach ($sql as $book){
    echo "<br>". $book['book_title'];
  }
  ?>