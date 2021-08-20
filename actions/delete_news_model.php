<h1 class="display-5 btn-danger">Deleted date!</h1>
<?php
  include_once('db/database.php');
  $news_id = $_GET['news_id'];
  deleteNews($news_id);
  header("location:?page=news");
