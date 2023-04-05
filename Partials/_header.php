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
      </li>';
if($_SESSION['loggedin'] && $_SESSION['loggedin']==true){
  echo '<p class="h5">welcome' . $_SESSION['username'] .'</p>';
} else {
  echo '<li class="nav-item">
  <a class="nav-link" href="login.php">Login</a>
</li>';
}
  
    echo '</ul>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Ask a Question" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</div>
</nav>';


// include('_handleSignup.php');
if($_GET['signupsuccess'] && $_GET['signupsuccess'] == 'true'){
  echo '<div class="alert alert-success h1" role="alert">
  signup successful
</div>';
}
?>