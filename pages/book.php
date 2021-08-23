<style>
  .txt {
    text-align: justify;
  }
  .hover img {
    opacity: 0.8;
  }
  .hover .card-img-overlay:hover {
    background: rgba(0,0,0,0.5)
  }
  @media (max-width:870px) {
    .details img{
      width: 70%;
    }
  }
  @media (max-width:670px) {
    .details img{
      width: 100%;
    }
  }
</style>
<?php include_once('partial/header.php');
?>
<div class="top-book my-4">
  <div class="d-flex justify-content-end">
    <div class="p-2 bd-highlight">
      <a href="?actions=add_book_html" class="btn btn-warning text-white">+Add news book</a>
    </div>
    <div class="p-2 bd-highlight">
    <form action="?page=book" method="post" class="d-flex col-4 w-100">
        <select class="form-select" aria-label="Default select example" name="sort">
          <option selected>Sort title by...</option>
          <option value="a-z">A-Z</option>
          <option value="z-a">Z-A</option>
        </select>
        <input type="submit" id="" name="submit" value="Sort now" class="btn btn-primary text-white mx-2">
      </form>

    </div>
  </div>
</div>

<?php if(isset($_POST['submit']) && $_POST['sort'] ==="a-z"):?>
  <div class="row g-4 mx-3">
    <?php
      include_once('db/database.php');
      $sort_book = book_sortA_Z();
      foreach($sort_book as $book):
    ?>
    
    <hr>
    <div class="col-sm-4">
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
        <div class="col-sm-8 bg-light rounded p-3">
          <h6><?=$book['book_title'];?></h6>
          <p class="txt"><?=$book['description'];?></p>
        </div>
        <?php endforeach;?>
  </div>

<?php elseif(isset($_POST['submit']) && $_POST['sort'] ==="z-a"):?>
  <div class="row g-4 mx-3">
      <?php
        include_once('db/database.php');
        $sort_book = book_sortZ_A();
        foreach($sort_book as $book):
      ?>
      <hr>
      <div class="col-sm-4">
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
      <div class="col-sm-8 bg-light rounded p-3">
        <h6><?=$book['book_title'];?></h6>
        <p class="txt"><?=$book['description'];?></p>
      </div>
    <?php endforeach;?>
  </div>

<?php else:?>
  <div class="book">
    <div class="row row-cols-1 row-cols-md-3 m-2 g-4 row-cols-sm-2">
      <div class="col">
        <div class="card hover">
          <img src="https://www.grangerhertzog.com/media/catalog/product/b/o/bookcoffeetable.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=564&width=564&canvas=564:564" class="card-img" alt="..." style="height: 350px;">
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="https://actionlitho.com/wp-content/uploads/2017/01/original_look-inside.png" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="https://www.zxprinter.com/d/file/8f6c7ec29f199c352b2331a5b8b358f4.png" class="card-img-top" alt="...">
        </div>
      </div>
    </div>
    <!-- body book  -->
    <div class="row g-4 mx-3">
      <?php
          include_once('db/database.php');
          $all_book = selectAllBook();
         
          foreach($all_book as $book):
        ?>
          <hr>
            <div class="col-sm-4">
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
            <div class="col-sm-8 bg-light rounded p-3">
              <h6><?=$book['book_title'];?></h6>
              <p class="txt"><?=$book['description'];?></p>
            </div>
          <?php endforeach;?>
    </div>
  </div>
<?php endif;?>
<?php include_once('partial/footer.php');?>