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
<div class="mt-5">
  <div class="clearfix details container">
      <?php
        include_once('db/database.php');
        $details = newsDetail($_GET['news_id']);
        foreach ($details as $detail):
      ?>
      <img src="actions/images/news_img/<?=$detail['news_img'];?>"
      class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
      <h6><?=$detail['news_title'];?></h6>
      <p class="txt"><?=$detail['description'];?></p>
      <?php endforeach;?>
  </div>  

</div>
  <h5 class="bg-primary p-3 text-center text-white">Others the news</h5>
  <div class="right​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​ container">
    <!-- body news  -->
    <div class="row g-​4 mt-4">
      <?php
          include_once('db/database.php');
          $all_news = selectAllNews();
          foreach($all_news as $news):
      ?>
          <?php if($_GET['news_id'] != $news['news_id']):?>
            <hr>
            <div class="col-sm-3">
              <div class="action position-absolute p-2 m-2">
                <a href="?actions=edit_news_html&&news_id=<?=$news['news_id']?>" class="text-primary me-2"><i class="fa fa-pencil"></i></a>
                <a href="?actions=delete_news_model&&news_id=<?=$news['news_id']?>" class="text-danger"><i class="fa fa-trash"></i></a>
              </div>
              <figure class="figure shadow bg-body rounded p-2">
                <img src="actions/images/news_img/<?=$news['news_img'];?>" class="w-100 figure-img img-fluid rounded img-thumbnail">
                <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
              </figure>
            </div>
            <div class="col-sm-9 bg-light p-3">
              <h6><?=$news['news_title'];?></h6>
              <p class="txt"><?=$news['description'];?></p>
            </div>
          <?php endif; ?>
        <?php endforeach;?>
    </div>
</div>
<?php include_once('partial/footer.php');?>