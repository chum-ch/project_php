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
      <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
  </div>
</div>
<div class="container">
  <div class="clearfixv details">
    <div class="action p-3 position-absolute mx-4">
      <a href="" class="text-danger"><i class="fa fa-trash"></i></a>
      <a href="" class="text-primary ms-2"><i class="fa fa-pencil"></i></a>
    </div>
    <img src="https://cdn.britannica.com/24/77424-050-4FF80B58/Angkor-Wat-Cambodia.jpg" 
    class="col-md-5 col-sm-2 float-md-start mb-3 ms-md-3 me-3 img-thumbnail" alt="..." >
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus et aliquam, earum beatae ipsum, ea nam magni vero, nobis porro qui repellat eaque explicabo! Minus mollitia quas totam explicabo ratione!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus et aliquam, earum beatae ipsum, ea nam magni vero, nobis porro qui repellat eaque explicabo! Minus mollitia quas totam explicabo ratione!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus et aliquam, earum beatae ipsum, ea nam magni vero, nobis porro qui repellat eaque explicabo! Minus mollitia quas totam explicabo ratione!</p>
    
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus et aliquam, earum beatae ipsum, ea nam magni vero, nobis porro qui repellat eaque explicabo! Minus mollitia quas totam explicabo ratione!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus et aliquam, earum beatae ipsum, ea nam magni vero, nobis porro qui repellat eaque explicabo! Minus mollitia quas totam explicabo ratione!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus et aliquam, earum beatae ipsum, ea nam magni vero, nobis porro qui repellat eaque explicabo! Minus mollitia quas totam explicabo ratione!</p>
  </div>  
  <div class="right">
    <div class="row row-cols-1 row-cols-md-2 g-2">
      <div class="col">
        <div class="card hover">
          <img src="https://thumbor.forbes.com/thumbor/711x474/https://blogs-images.forbes.com/jqlouise/files/2019/05/Cambodia-6734-1200x800.jpg?width=960" class="card-img" alt="...">
          <div class="card-img-overlay text-white">
            <div class="action float-end">
              <a href="?actions=edit" class="text-primary me-2"><i class="fa fa-pencil"></i></a>
              <a href="?actions=delete" class="text-danger"><i class="fa fa-trash"></i></a>
            </div>
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
            <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
          </figure>
        </div>
        <div class="col-sm-9 bg-light p-3">
          <h6><?=$news['news_title'];?></h6>
          <p class="txt"><?=$news['description'];?></p>
        </div>
        <?php endforeach;?>
    </div>
</div>
<?php include_once('partial/footer.php');?>