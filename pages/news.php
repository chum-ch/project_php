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
<?php include_once('partial/header.php');?>
<div class="top-news my-4">
  <div class="d-flex justify-content-end">
    <div class="p-2 bd-highlight">
      <a href="?actions=add_news_html" class="btn btn-primary">+Add news</a>
    </div>
    <div class="p-2 bd-highlight">
      <form action="?page=news" method="post" class="d-flex col-4 w-100">
        <select class="form-select" aria-label="Default select example" name="sort">
          <option selected>Sort title by...</option>
          <option value="a-z">A-Z</option>
          <option value="z-a">Z-A</option>
        </select>
        <input type="submit" id="" name="submit" value="Sort now" class="btn btn-warning text-white mx-2">
      </form>
    </div>
  </div>
</div>

<?php if(isset($_POST['submit']) && $_POST['sort'] ==="a-z"):?>
  <div class="row g-4 mt-4">
    <?php
        include_once('db/database.php');
        $news_sort = news_sortA_Z();
        foreach($news_sort as $sort):
      ?>
      <hr>
      <div class="col-sm-3">
        <div class="action position-absolute p-2 m-2">
          <a href="?actions=edit_news_html&&news_id=<?=$sort['news_id']?>" class="text-primary me-2"><i class="fa fa-pencil"></i></a>
          <a href="?actions=delete_news_model&&news_id=<?=$sort['news_id']?>" class="text-danger"><i class="fa fa-trash"></i></a>
        </div>
        <figure class="figure shadow bg-body rounded p-2">
          <img src="actions/images/news_img/<?=$sort['news_img'];?>" class="w-100 figure-img img-fluid rounded img-thumbnail">
          <figcaption class="figure-caption">Date post: <?=$sort['date_post'];?></figcaption>
        </figure>
      </div>
      <div class="col-sm-9 bg-light p-3">
        <h6><?=$sort['news_title'];?></h6>
        <p class="txt"><?=$sort['description'];?></p>
      </div>
      <?php endforeach;?>
  </div>
<?php elseif(isset($_POST['submit']) && $_POST['sort'] ==="z-a"):?>
  <div class="row g-4 mt-4">
      <?php
          include_once('db/database.php');
          $news_sort = news_sortZ_A();
          foreach($news_sort as $sort):
        ?>
        <hr>
        <div class="col-sm-3">
          <div class="action position-absolute p-2 m-2">
            <a href="?actions=edit_news_html&&news_id=<?=$sort['news_id']?>" class="text-primary me-2"><i class="fa fa-pencil"></i></a>
            <a href="?actions=delete_news_model&&news_id=<?=$sort['news_id']?>" class="text-danger"><i class="fa fa-trash"></i></a>
          </div>
          <figure class="figure shadow bg-body rounded p-2">
            <img src="actions/images/news_img/<?=$sort['news_img'];?>" class="w-100 figure-img img-fluid rounded img-thumbnail">
            <figcaption class="figure-caption">Date post: <?=$sort['date_post'];?></figcaption>
          </figure>
        </div>
        <div class="col-sm-9 bg-light p-3">
          <h6><?=$sort['news_title'];?></h6>
          <p class="txt"><?=$sort['description'];?></p>
        </div>
        <?php endforeach;?>
    </div>

<?php else:?>
  <div class="right">
    <div class="row row-cols-1 row-cols-md-2 g-2 container m-auto">
      <div class="col">
        <div class="card hover">
          <img src="https://ichef.bbci.co.uk/news/976/cpsprodpb/13B1D/production/_120096608_mediaitem120096607.jpg" class="card-img" alt="...">
          <div class="card-img-overlay text-white">
            <h5 class="card-title">Afghanistan: The desperate scramble to escape In front of him, many frantically waved their British passports in the air, hoping to be allowed through but a group of Afghan security guards wielding rubber hoses tried to push them back.</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card hover">
          <img src="https://ichef.bbci.co.uk/news/976/cpsprodpb/18159/production/_120194689_hi069626882.jpg" class="card-img-top" alt="...">
          <div class="card-img-overlay text-white">
            <h5 class="card-title">A former tour manager for US R&B singer R. Kelly has testified that he bribed a government worker in 1994 to obtain a fake ID for then 15-year-old Aaliyah - so the singers could marry.</h5>
            
          </div>
        </div>
      </div>
    </div>
    <!-- body news  -->
    <div class="row g-4 mt-4">
      <?php
          include_once('db/database.php');
          $all_news = selectAllNews();
          foreach($all_news as $news):
        ?>
        <hr>
        <div class="col-sm-3">
          <div class="action position-absolute p-2 m-2">
            <a href="?actions=edit_news_html&&news_id=<?=$news['news_id']?>" class="text-primary me-2"><i class="fa fa-pencil"></i></a>
            <a href="?actions=delete_news_model&&news_id=<?=$news['news_id']?>" class="text-danger"><i class="fa fa-trash"></i></a>
          </div>
          <figure class="figure shadow bg-body rounded p-2">
            <img src="actions/images/news_img/<?=$news['news_img'];?>" class="w-100 figure-img img-fluid rounded img-thumbnail">
            <figcaption class="figure-caption">Date post: <?=$news['date_post'];?></figcaption>
          </figure>
        </div>
        <div class="col-sm-9 bg-light p-3">
          <h6><?=$news['news_title'];?></h6>
          <p class="txt"><?=$news['description'];?></p>
        </div>
        <?php endforeach;?>
    </div>
  </div>
<?php endif;?>
<?php include_once('partial/footer.php');?>