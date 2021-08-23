<style>
  .grid {
    display: grid;
    grid-template-columns: 35% 65%;
  }
  h4 {  
    height: 8vh;
    margin-top: 10px;
    border-bottom:8px solid gold;
  }
  .hover img {
    opacity: 0.8;
  }
  .hover .card-img-overlay:hover {
    background: rgba(0,0,0,0.5)
  }
  @media (max-width:560px){
    .grid {
      display: block;
    }
    .right {
      margin: auto;
    }
  }
</style>
<?php 
  include_once('partial/header.php');
  include_once('partial/navbar.php');
?>
<h4 class="bg-primary p-1 text-white">News..</h4>
<div class="grid m-auto" style="width: 95%;">
  <div class="left">
    <!-- end slide show  -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/96deac42317529.57c87c1411999.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h5>The books in the best friends for reader </h5>
            <p>Improves brain connectivity. increases your vocabulary and comprehension. empowers you to empathize with other people.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://images.theconversation.com/files/403968/original/file-20210602-27-l6czjd.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=754&fit=clip" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h5>Covid-19 in Cambodia</h5>
            <p>There have been 87,723 confirmed cases of COVID-19 with 1,747 deaths.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://blog.trekaroo.com/wp-content/uploads/2017/02/cambodia-angkor-wat-.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h5>Angkor wat in Cambodia</h5>
            <p>Angkor Wat, located in northwest Cambodia, is the largest religious structure in the world by land area, measuring 162.6 hectares.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="card m-2 shadow my-3 bg-body rounded" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-5">
          <img src="https://ichef.bbci.co.uk/news/976/cpsprodpb/10732/production/_119787376_04d9c32f-3d27-47d7-b740-63dc28d161a7.jpg" class="img-fluid rounded-start w-100" alt="...">
        </div>
        <div class="col p-2">
          <h6 class="card-text ms-1">Covid: WHO calls for booster pause to vaccinate poorer nations</h6>
        </div>
      </div>
    </div>
    <div class="card m-2 shadow my-3 bg-body rounded" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-5">
          <img src="https://static.bangkokpost.com/media/content/20210210/c1_2065891_210210122138.jpg" class="img-fluid rounded-start w-100" alt="...">
        </div>
        <div class="col p-2">
          <h6 class="card-text ms-1">Covid: However, some will become seriously ill and require medical attention....</h6>
        </div>
      </div>
    </div>
    <div class="card m-2 shadow my-3 bg-body rounded" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-5">
          <img src="https://cdn.cnn.com/cnnnext/dam/assets/210822081317-kabul-afghanistan-airport-08-16-2021-exlarge-169.jpg" class="img-fluid rounded-start w-100" alt="...">
        </div>
        <div class="col p-2">
          <h6 class="card-text ms-1">Kabul's airport is the epicenter of a desperate and deadly scramble to escape the Taliban...</h6>
        </div>
      </div>
    </div>
  </div>
  <!-- end slide show  -->
  <div class="right">
    <div class="row row-cols-1 row-cols-md-2 m-2 g-2">
      <div class="col">
        <div class="card hover">
          <img src="https://ichef.bbci.co.uk/onesport/cps/800/cpsprodpb/61D8/production/_119784052_gettyimages-1320393601.jpg" class="card-img" alt="...">
        </div>
      </div>
      <div class="col">
        <div class="card hover">
          <img src="https://ichef.bbci.co.uk/news/976/cpsprodpb/13B1D/production/_120096608_mediaitem120096607.jpg" class="card-img" alt="...">
        </div>
      </div>
    </div>
    <!-- body news  -->
      <div class="row m-3">
        <?php
          include_once('db/database.php');
            $all_news = selectAllNews();
            foreach($all_news as $news):
        ?>
        <div class="col-sm-6 col-md-4 shadow my-3 bg-body rounded">
          <img src="actions/images/news_img/<?=$news['news_img'];?>" class="card-img-top img-thumbnail" alt="...">
          <h6 class="card-title mt-3"> <?=$news['news_title'];?>.... </h6>
          <a href="?page=news_details&&news_id=<?=$news['news_id']?>">
            <button type="button" class="btn btn-outline-primary btn-sm w-100  my-2">Read more</button>
          </a>
      </div>
      <?php endforeach;?>
      </div>
    <!-- end body news  -->
  </div>
</div>
<div class="book">
  <h4 class="p-1 text-white bg-primary">Books..</h4>
  <div class="row row-cols-1 row-cols-md-3 m-2 g-2 row-cols-sm-2">
      <div class="col">
        <div class="card hover">
          <img src="https://mir-s3-cdn-cf.behance.net/projects/404/07e65456925249.Y3JvcCwyNTYzLDIwMDYsMjIxLDA.jpg" class="card-img" alt="...">
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/e6677745595261.5835e5d2f1473.jpg" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="https://mir-s3-cdn-cf.behance.net/projects/404/ddb05686095159.Y3JvcCwyNjkyLDIxMDUsNjUzLDQ1OQ.jpg" class="card-img-top" alt="...">
        </div>
      </div>
  </div>
  <!-- body book  -->
  <div class="row m-3">
      <?php
          include_once('db/database.php');
          $all_book = selectAllBook();
          foreach($all_book as $book):
      ?>
      <div class="col-sm-6 col-md-3 shadow my-3 bg-body rounded">
        <img src="actions/images/book_img/<?=$book['book_img']?>" class="card-img-top img-thumbnail" alt="...">
        <h5 class="card-title"> <?=$book['book_title']?> </h5>
        <a href="?page=book_details&&book_id=<?=$book['book_id']?>">
          <button type="button" class="btn btn-primary w-100  my-2">Read more</button>
        </a>
      </div>
    <?php endforeach;?>
  </div>
</div>
<?php include_once('partial/footer.php');?>