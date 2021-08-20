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
<?php include_once('partial/header.php');?>
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
          <img src="https://thumbor.forbes.com/thumbor/711x474/https://blogs-images.forbes.com/jqlouise/files/2019/05/Cambodia-6734-1200x800.jpg?width=960" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://thumbor.forbes.com/thumbor/711x474/https://blogs-images.forbes.com/jqlouise/files/2019/05/Cambodia-6734-1200x800.jpg?width=960" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://thumbor.forbes.com/thumbor/711x474/https://blogs-images.forbes.com/jqlouise/files/2019/05/Cambodia-6734-1200x800.jpg?width=960" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
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
          <img src="https://thumbor.forbes.com/thumbor/711x474/https://blogs-images.forbes.com/jqlouise/files/2019/05/Cambodia-6734-1200x800.jpg?width=960" class="img-fluid rounded-start w-100" alt="...">
        </div>
        <div class="col">
          <p class="card-text ms-1">Card title</p>
        </div>
      </div>
    </div>
    <div class="card m-2 shadow my-3 bg-body rounded" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-5">
          <img src="https://thumbor.forbes.com/thumbor/711x474/https://blogs-images.forbes.com/jqlouise/files/2019/05/Cambodia-6734-1200x800.jpg?width=960" class="img-fluid rounded-start w-100" alt="...">
        </div>
        <div class="col">
          <p class="card-text ms-1">Card title</p>
        </div>
      </div>
    </div>

  </div>
  <!-- end slide show  -->
  <div class="right">
    <div class="row row-cols-1 row-cols-md-2 m-2 g-2">
      <div class="col">
        <div class="card hover">
          <img src="https://thumbor.forbes.com/thumbor/711x474/https://blogs-images.forbes.com/jqlouise/files/2019/05/Cambodia-6734-1200x800.jpg?width=960" class="card-img" alt="...">
          <div class="card-img-overlay text-white">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
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
          <a href="#">
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
          <img src="https://thumbor.forbes.com/thumbor/711x474/https://blogs-images.forbes.com/jqlouise/files/2019/05/Cambodia-6734-1200x800.jpg?width=960" class="card-img" alt="...">
          <div class="card-img-overlay text-white">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
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
        <a href="#">
          <button type="button" class="btn btn-primary btn-sm w-100  my-2">Read more</button>
        </a>
      </div>
    <?php endforeach;?>
  </div>
</div>
<?php include_once('partial/footer.php');?>