<p class="display-6 bg-success text-white p-2">Add news to database!</p>
<div class="container w-75 border p-3 shadow-lg p-3 mb-5 bg-body rounded">
  <form action="actions/add_new_model.php" method="post" enctype="multipart/form-data">
    <div class="row g-3">
      <div class="col-sm-7">
        <label for="title" class="form-label">Title the news<span class="text-danger">*</span></label>
        <input type="text" name="title" class="form-control" placeholder="Title here..." aria-label="Title here..." id="news-title" required>
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
        <textarea class="form-control w-100" name="sms" id="exampleFormControlTextarea1" rows="6" placeholder="Description here..." required></textarea>
      </div>
    </div>
    <div class="col-12 ">
      <a href="?actions=add_new_model">
        <button class="btn btn-primary text-white" type="submit" name="add">Post the news</button>
      </a>
    </div>
  </form>
</div>