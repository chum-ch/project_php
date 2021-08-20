<?php
  # connect to database
  function db() {
    return new mysqli('localhost', 'root','', 'project_php');
  }
  # select all record from table news
  function selectAllNews() {
    return db()->query("SELECT * FROM news ORDER BY news_id DESC");
  }
  # select all record from table book
  function selectAllBook() {
    return db()->query("SELECT * FROM book ORDER BY book_id DESC");
  }

  # insert data to table news
  function insertToNews($news, $image) {
    $news_title = $news['news_title'];
    $description = $news['description'];
    return db()-> query("INSERT INTO news(news_title, description, news_img) VALUES('$news_title', '$description','$image')");
  }
  # insert data to table book
  function insertTobook($book, $image) {
    $book_title = $book['book_title'];
    $description = $book['description'];
    $author = $book['author'];
    return db()-> query("INSERT INTO book(book_title, description,author, book_img) VALUES('$book_title', '$description','$author','$image')");

  }

  # Get one record to Update date from table news
  function getOneRecordNews($news_id){
    return db()->query("SELECT * FROM news WHERE news_id = '$news_id'");
  }
  # get one record to update date from table book
  function getOneRecordBook($book_id) {
    return db()->query("SELECT * FROM book WHERE book_id = '$book_id'");

  }

  # update the one record that match from table news
  function updateNews($news) {
    $news_title = $news['news_title'];
    $description = $news['description'];
    $news_id = $news['news_id'];
    return db()->query("UPDATE news SET news_title='$news_title', description='$description' WHERE news_id = '$news_id'");
  }
  # update the one record that match from table book
  function updateBook($book) {
    $book_title = $book['book_title'];
    $description = $book['description'];
    $author = $book['author'];
    $book_id = $book['book_id'];
    return db()->query("UPDATE book SET book_title='$book_title', description='$description',author='$author' WHERE book_id = '$book_id'");
  }


  # delete the one record that macth from table news
  function deleteNews($news_id) {
    return db()->query("DELETE  FROM news WHERE news_id='$news_id'");
  }
  # delete the one record that macth from table book
  function deleteBook($book_id) {
    return db()->query("DELETE  FROM book WHERE book_id='$book_id'");
  }

  # search by title the table news
  function searchTitleBook($name) {
    return db()->query("SELECT * FROM book WHERE book_title LIKE '%$name%';");
  }
  # search by title the table news
  function searchTitleNews($name) {
    return db()->query("SELECT * FROM news WHERE news_title LIKE '%$name%';");
  }
?>