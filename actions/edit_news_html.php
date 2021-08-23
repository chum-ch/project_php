<h1 class='display-5 btn-success'>Edit </h1>
<?php 
  include_once('db/database.php');
  $news_id = $_GET['news_id'];
  $get_one_news =  getOneRecordNews($news_id);
  foreach($get_one_news as $news):
?>
<div class="container w-75 border p-3 shadow-lg mb-5 bg-body rounded">
  <form action="actions/edit_model.php" method="post" enctype="multipart/form-data">
    <div class="row g-3">
      <div class="col-sm-7">
        <input type="text" name="news_id" value="<?=$news_id?>" hidden>
        <label for="news-title" class="form-label">Title the news<span class="text-danger">*</span></label>
        <input type="text" name="news_title" value="<?=$news['news_title']?>" class="form-control" aria-label="Title here..." id="news-title">
      </div>
      <div class="col-sm">
        <label for="img" class="form-label">Upload your image<span class="text-danger">*</span></label>
        <div class="input-group mb-3">
          <input type="file" class="form-control" id="inputGroupFile02" name="file">
          <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="mb-3 col-sm-12 col-md-12">
        <label for="exampleFormControlTextarea1" class="form-label">Description the news<span class="text-danger">*</span></label>
        <textarea class="form-control w-100" name="description" id="exampleFormControlTextarea1" rows="6">
          <?=$news['description']?>
        </textarea>
      </div>
    </div>
    <div class="col-12 ">
      <a href="?page=news">
        <button class="btn btn-success text-white" type="submit" name="add">Update</button>
      </a>
    </div>
  </form>
</div>
<?php endforeach;?>