<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>
        AQS
    </title>
  </head>
  <body>

  <?php
  include 'Partials/_header.php';
require_once('vendor/autoload.php');
$clientID = "880414152965-f2kn5op2rvpgk609qfqk7qe44i9lf014.apps.googleusercontent.com";
$clientSecret = "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";
$redirectUri = "http://localhost/php-project/demo.php";

// creating client request to google
$client = new Google_Client();
$client->setClientID($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope('profile');
$client->addScope('email');

if(isset($_GET['code'])){


}

else{
  echo "<div class='mt-5 mx-5 display-6 '>
  <a href='".$client->createAuthUrl()."'>Login with google</a>
  </div>";
}


?>
<div class="container">
<h1 class="text-center"> Login to Classroom </h1>
</div>
<centre>
<form class="" action="/loginsystem/login_page.php" method="post">
    <fieldset>
    <div class="form-group col-md-6" align="left" >
        <label type="email" class="form-control" id="username" name="username" aria-describedby="emailhelp">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email/Username</label>
    <input type="email" class="form-control" id="password" aria-describedby="">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</fieldset>
</form>
</enter>
</centre>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>


</body>
</html>
