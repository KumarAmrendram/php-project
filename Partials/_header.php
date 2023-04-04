<?php 
echo '<nav class="navbar navbar-expand-lg navbar-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="#">ASQ</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/php-project">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="about.php">About Us</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="https://github.com/KumarAmrendram/php-project">Contribute</a>
  </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Categories
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">C++</a></li>
          <li><a class="dropdown-item" href="#">Data Science</a></li>
          <li><a class="dropdown-item" href="#">Others</a></li>
          <li><hr class="dropdown-divider"></li>

        </ul>
      </li>
    </ul>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Ask a Question" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</div>
</nav>';


?>