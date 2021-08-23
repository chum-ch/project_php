<?php
  # connect to database
  function db() {
    return new mysqli('localhost', 'root','', 'project_php');
  }
  # create a user 
  function createUser($addUser,$enc_password) {
    $first_name = $addUser['f_name'];
    $last_name = $addUser['l_name'];
    $email = $addUser['email'];
    $full_name =strtolower($addUser['f_name']).strtolower($addUser['l_name']);
    return db()->query("INSERT INTO user(first_name, last_name, email, password, role,full_name) VALUES('$first_name', '$last_name' ,'$email', '$enc_password','user','$full_name')");
  }
  # get password check when user login
  function getEncryptPwd($username) {
    return db()->query("SELECT * FROM user WHERE full_name = '$username'");
  }
  # select all record from table news
  function selectAllNews() {
    return db()->query("SELECT * FROM news ORDER BY news_id DESC");
  }
  # select all record from table book
  function selectAllBook() {
    return db()->query("SELECT book.*, user.role FROM book JOIN user USING(user_id)");
  }

  # insert data to table news
  function insertToNews($news, $image) {
    $title = $news['title'];
    $sms = $news['sms'];
    return db()->query("INSERT INTO news(news_title, news_img, description ) VALUES('$title', '$image' ,'$sms')");
  }
  # insert data to table book
  function insertTobook($book, $image) {
    $title = $book['title'];
    $sms = $book['description'];
    $made = $book['author'];
    return db()->query("INSERT INTO book(book_title , book_img , description, author) VALUES('$title', '$image' , '$sms', '$made')");

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

  # get one recorde from table news for detail
  function newsDetail($news_id) {
    return db()->query("SELECT * FROM news WHERE news_id ='$news_id'");
  }
  # get one recorde from table book for detail
  function bookDetail($book_id) {
    return db()->query("SELECT * FROM book WHERE book_id ='$book_id'");
  }

  # sort A-Z from table news
  function news_sortA_Z(){
    return db()->query("SELECT * FROM news ORDER BY news_title ASC");
  }
  # sort A-Z from table news
  function news_sortZ_A(){
    return db()->query("SELECT * FROM news ORDER BY news_title DESC");
  }
  # sort A-Z from table book
  function book_sortA_Z(){
    return db()->query("SELECT * FROM book ORDER BY book_title ASC");
  }
  # sort A-Z from table news
  function book_sortZ_A(){
    return db()->query("SELECT * FROM book ORDER BY book_title DESC");
  }
?>