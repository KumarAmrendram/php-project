<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="/public/favicon.ico">

    <link rel="stylesheet" href="style.css">


    <title>Ask Shivaji</title>
</head>

<body>

    <section class="banner">
        <?php include 'Partials/_header.php' ?>


        <div class="container-fluid d-flex row justify-content-evenly text-center">
            <div class="align-items-center banner-text col">
                <h1>Welcome to ASQ</h1>
                <p>Hello People, Welcome to <strong>Ask Shivaji Questions</strong>
                    <br /> create an account ask your teachers and seniors.
                </p>
            </div>
            <div class="col">
                <img src="./public/man-using-laptop-5612503-4678408.webp" />
            </div>
        </div>
    </section>

    <section class="categories">
        <!-- add for loop to iterate through categories from database -->
        <div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/300x300/?coding,python" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">View Thread</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/300x300/?coding,python" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">View Thread</a>
            </div>
        </div>
    </section>


    <section class="info-section text-center">
        <h1 class="mb-5">your friends are here, you shouldn't you?</h1>
        <div class="container-fluid d-flex row justify-content-evenly text-center">
            <div class="col info-img mt-4">
                <img src="./public/earth-483978_1280.webp" />
            </div>
            <div class="align-items-center col mt-5">
                <p>A public platform building
                    <br />the definitive collection of coding questions & answers
                </p>
                <button class="btn button">Get Started</button>

            </div>
        </div>
    </section>


    <?php include "Partials/_footer.php" ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>