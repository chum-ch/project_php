
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand text-primary fw-bolder" href="?page=home"><?=$_SESSION['first_name']?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=news">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=book">Books</a>
        </li>
      </ul>
      <form class="d-flex" action="actions/search.php" method="POST">
        <input class="form-control me-2" type="search" placeholder="Title news or book..." aria-label="Search" name="name" required>
        <a href="?actions=search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </a>
      </form>
      <a href="pages/login.php">
        <button class="btn btn-warning mx-2 text-white" type="button">Logout</button>
      </a>
    </div>
  </div>
</nav>