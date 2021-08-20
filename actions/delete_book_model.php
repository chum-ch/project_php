<h1 class="display-5 btn-danger">Deleted date!</h1>
<?php
  include_once('db/database.php');
  $book_id = $_GET['book_id'];
  deleteBook($book_id);
  header("location:?page=book");
