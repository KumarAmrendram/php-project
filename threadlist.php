<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/favicon-icon" href="/public/favicon.ico">
    <!-- custom css -->
    <link rel="stylesheet" href="style.css">



    <title>Ask Shivaji</title>
</head>

<body>
    <!-- Navbar -->
    <?php include "Partials/_header.php" ?>
    <!-- connecting database  -->
    <?php include 'Partials/_dbconnect.php' ?>

    <?php
    $id = $_GET['catid']; //category ID
    $sql = "SELECT * from `categories` WHERE category_id = $id"; //fetching category data from db
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $catname = $row['catregory_name'];
        $catdesc = $row['category_description'];
    }

    ?>

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo "$catname" ?> Thread</h1>
            <p class="lead"><?php echo "$catdesc" ?></p>
            <hr class="my-4">
            <h1 class="display-6">Forum Rules</h1>
            <p>This forum is for sharing knowledge with each other.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>
    <!-- form backend -->
    <?php
    $method = $_SERVER['REQUEST_METHOD'];
    $showAlert = false;
    if ($method == 'POST') {
        //insert data into db
        $th_title = $_POST['title'];
        $th_desc = $_POST['desc'];
        $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_use_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '0', current_timestamp())";
        $showAlert = true;
        if ($showAlert and $th_title != NULL) {
            $result = mysqli_query($conn, $sql);
            echo '<div class="alert alert-success container" role="alert">Success! Your question has been added. Please wait for community for to respond</div>';
        }
    }
    ?>


    <!-- question form -->
    <form class="container" action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
        <div class="mb-3">
            <label for="title" class="form-label h3">Question</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text text-white">ask </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" placeholder="" id="desc" name="desc" rows="4"></textarea>
            <!-- <label for="floatingTextarea">Comments</label> -->
        </div>
        <button type="submit" class="btn mt-3 button-primary">Submit</button>
    </form>

    <div class="container">
        <h1>Browse Questions</h1>
        <hr class="my-4">
        <?php
        $id = $_GET['catid'];
        $sql = "SELECT * from `threads` WHERE thread_cat_id = $id"; //fetching thread data from db
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $tid = $row['thread_cat_id'];
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];

            echo '<div class="media my-3 ms-3">
                <div class="user-img">
                    <div class="user-img">
                        <img src="img/user.png" alt="...">
                    </div>
                </div>
                <div class="media-body">
                    <h5 class="mt-0"><a class="text-dark" href="thread.php?threadid=' . $tid . '" >' . "$title" . '</a></h5>
                    <p>' . "$desc" . '</p>
                </div>
            </div>';
        }


        if ($noResult) {
            // echo "<div class='display-6'>Be the first person to ask</div><br/>";
            echo '<div class="container">
            <div class="jumbotron">
                <h1 class="display-4">No results found </h1>
                <h5>Be the first person to ask</h5><br/>
        <hr class="my-4">
    </div>
    </div>';
        }
        ?>


    </div>

    <?php include "Partials/_footer.php" ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>