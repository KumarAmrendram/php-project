<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link href="login.css" rel=stylesheet>
</head>

<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form action="/php-project/Partials/_handleSignup.php" method="POST">
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" placeholder="Full Name" name="SignupName" required="">
                <input type="email" placeholder="Email" name="SignupEmail" required="">
                <input type="password" placeholder="Password" name="SignupPassword" required="">
                <input type="password" placeholder="Confirm Password" name="CPassword" required="">
                <button>Sign up</button>
            </form>x
        </div>

        <div class="login">
            <form>
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <button>Login</button>
            </form>
        </div>
    </div>
</body>

</html>