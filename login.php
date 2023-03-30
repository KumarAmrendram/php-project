<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="style.css">
  <title>Slider Sign In/Sign up Form</title>
</head>

<body>

  <?php
  require('./Partials/_dbconnect.php');
  require_once('./vendor/autoload.php');
  $clientID = "880414152965-f2kn5op2rvpgk609qfqk7qe44i9lf014.apps.googleusercontent.com";
  $clientSecret = "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";
  $redirectUri = "http://localhost/php-project/login.php";


  // Creating new google client instance
  $client = new Google_Client();

  // Vaibhav's Client ID
  $client->setClientID($clientID);

  // vaibhav's Client Secrect
  $client->setClientSecret($clientSecret);

  //Redirect URL
  $client->setRedirectUri($redirectUri);
  
  // Adding those scopes which we want to get (email & profile Information)
  $client->addScope('profile');
  $client->addScope('email');

  if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAssertion($_GET['code']);
    $client->setAccessToken($token['access_token']);

    // getting profile info
    $google_oauth = new Google\Service\Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();


    // showing profile info
    echo "<pre>";
    var_dump($google_account_info);
  } else {

    echo ' <div class="container" id="container">
    <!-- Form Sign Up -->
    <div class="form-container sign-up-container">
      <form action="#">
        <h1>Create Account</h1>
        <div class="social-container">
          <a href="' . $client->createAuthUrl() . '" class="social"><i class="fab fa-google-plus-g"></i></a>
        </div>
        <span>or use your email for registration</span>
        <input type="text" placeholder="Name" />
        <input type="email" placeholder="Email" />
        <input type="password" placeholder="Password" />
        <button>Sign Up</button>
      </form>
    </div>

    <div class="form-container sign-in-container">
      <!-- Forms Sign In-->
      <form action="#">
        <h1>Sign in</h1>
        <div class="social-container">
          <a  href="' . $client->createAuthUrl() . '" class="social"><i class="fab fa-google-plus-g"></i></a>
        </div>
        <span>or use your account</span>
        <input type="email" placeholder="Email" />
        <input type="password" placeholder="Password" />
        <a href="#">Forgot your password?</a>
        <button>Sign In</button>
      </form>
    </div>

    <div class="overlay-container">
      <div class="overlay">
        <!-- Overlay Sign In -->
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back!</h1>
          <p>
            To keep connected with us, please login with your personal info
          </p>
          <button class="ghost" id="signIn">Sign In</button>
        </div>

        <!-- Overlay Sign Up -->
        <div class="overlay-panel overlay-right">
          <h1>Hello, Friend!</h1>
          <p>Enter your personal details and start a journey with us!</p>
          <button class="ghost" id="signUp">Sign Up</button>
        </div>
      </div>
    </div>
  </div>';
  }

  ?>

  <script>
    const signUpButton = document.getElementById("signUp");
    const signInButton = document.getElementById("signIn");
    const container = document.getElementById("container");

    signUpButton.addEventListener("click", () =>
      container.classList.add("right-panel-active")
    );

    signInButton.addEventListener("click", () =>
      container.classList.remove("right-panel-active")
    );
  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>

</html>