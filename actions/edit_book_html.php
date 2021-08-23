
<p class="display-5 bg-success text-white p-2">Update book to database!</p>
<?php 
  include_once('db/database.php');
  $book_id = $_GET['book_id'];
  $get_one_book =  getOneRecordBook($book_id);
  foreach($get_one_book as $book):
?>

<div class="container w-75 border p-3 shadow bg-body rounded mb-3">
<form action="actions/edit_model.php" method="post" enctype="multipart/form-data">
    <div class="row g-3">
      <div class="col-sm-7">
        <input type="text" name="book_id" value="<?=$book_id;?>" hidden>
        <label for="book-title" class="form-label">Title your book<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="book_title" value="<?=$book['book_title'];?>" aria-label="Title here..." id="book-title">
      </div>
      <div class="col-sm">
        <label for="author" class="form-label">Name's author<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="author"  aria-label="Name..." id="author" value="<?=$book['author'];?>">
      </div>
      <div class="col-sm-12">
        <label for="img" class="form-label">Upload your image<span class="text-danger">*</span></label>
        <div class="input-group mb-3">
          <input type="file" class="form-control" name="file" id="inputGroupFile02">
          <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="mb-3 col-sm-12 col-md-12">
        <label for="exampleFormControlTextarea1" class="form-label">Description of your books<span class="text-danger">*</span></label>
        <textarea class="form-control w-100" name="description" id="exampleFormControlTextarea1" rows="6" placeholder="Description here...">
        <?=$book['description'];?>
        </textarea>
      </div>
    </div>
    <div class="col-12 ">
      <a href="?page=book">
        <button class="btn btn-success text-white" type="submit" name="add">Update</button>
      </a>
    </div>
  </form>
</div>
<?php endforeach;?>