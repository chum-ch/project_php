<style>
  .txt {
    text-align: justify;
  }
</style>
<?php include_once('partial/header.php');
?>
<div class="mt-5">
  <div class="clearfix details container">
      <?php
            include_once('db/database.php');
            $details = bookDetail($_GET['book_id']);
            foreach($details as $detail):
      ?>
      <img src="actions/images/book_img/<?=$detail['book_img'];?>"
      class="col-md-6 float-md-end mb-3 ms-md-3 w-25" alt="...">
      <h6><?=$detail['book_title'];?></h6>
      <p class="txt mt-3"><?=$detail['description'];?></p>
      <?php endforeach;?>
  </div> 
</div>
<h5 class="bg-primary p-3 text-center text-white">Others books</h5>
<div class="book ">
  <!-- body book  -->
  <div class="row g-4 mx-3">
      <?php
          include_once('db/database.php');
          $all_book = selectAllBook();
          foreach($all_book as $book):
        ?>
        <hr>
        <?php if($_GET['book_id'] != $book['book_id']):?>
        <div class="col-sm-3">
          <div class="action position-absolute p-2 m-3">
          <a href="?actions=delete_book_model&&book_id=<?=$book['book_id'];?>" class="text-danger"><i class="fa fa-trash"></i></a>
              <a href="?actions=edit_book_html&&book_id=<?=$book['book_id'];?>" class="text-primary ms-2"><i class="fa fa-pencil"></i></a>
          </div>
          <figure class="figure feature shadow p-2 bg-body rounded">
            <img src="actions/images/book_img/<?=$book['book_img'];?>" class="w-100 figure-img img-fluid rounded img-thumbnail">
            <figcaption class="figure-caption text-warning">
              <span>Author by: <?=$book['author'];?></span><br>
              <span>Date post: <?=$book['date_post'];?></span>
            </figcaption>
          </figure>
        </div>
        <div class="col-sm-9 bg-light rounded p-3">
          <h6><?=$book['book_title'];?></h6>
          <p class="txt"><?=$book['description'];?></p>
        </div>
        <?php endif;?>
      <?php endforeach;?>
    </div>
</div>
<?php include_once('partial/footer.php');?>