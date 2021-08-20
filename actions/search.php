<?php include_once('../partial/header.php');?>
<div class="search p-3 sticky-top bg-light">
  <a href="../?page=home">
    <h5 class="btn btn-outline-primary">Back</h5>
  </a>
  <h4 class="bg-primary p-2 text-white rounded">Result</h4>
</div>
  <div class="row g-3 m-3">
    <!-- news block  -->
    <?php
        include_once('../db/database.php');
        $search_title_news = searchTitleNews($_POST['name']);
        foreach($search_title_news as $search_news):
    ?>
    <hr class="border border-dark">
    <div class="col-sm-3">
      <img src="../actions/images/news_img/<?=$search_news['news_img'];?>" class="w-100 img-thumbnail">
    </div>
    <div class="col-sm-9 bg-light p-3">
      <h5><?=$search_news['news_title'];?></h5>
      <p class="txt" style="text-align: justify;"><?=$search_news['description'];?></p>
    </div>
    <?php endforeach;?>
    <!-- book block  -->
    <?php
        include_once('../db/database.php');
        $search_title = searchTitleBook($_POST['name']);
        foreach($search_title as $search):
    ?>
    <hr class="border border-dark">
    <div class="col-sm-3">
      <figure class="figure feature">
       
        <img src="../actions/images/book_img/<?=$search['book_img'];?>" class="w-100 img-thumbnail">
        <figcaption class="figure-caption text-warning">Author by: <?=$search['author'];?></figcaption>
     </figure>
    </div>
    <div class="col-sm-9 bg-light p-3">
      <h5><?=$search['book_title'];?></h5>
      <p class="txt" style="text-align: justify;"><?=$search['description'];?></p>
    </div>
    <?php endforeach;?>
  </div>
<?php   include_once('../partial/footer.php');?>