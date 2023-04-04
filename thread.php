<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="/public/favicon.ico">

    <link rel="stylesheet" href="style.css">


    <title>Community Room</title>
</head>

<body class="section">

    <?php

    include "Partials/_header.php";
    include 'Partials/_dbconnect.php';

    $id = $_GET['threadid'];
    $sql = "SELECT * from `threads` WHERE thread_id=$id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
    }
    ?>


    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo "$title" ?></h1>
            <p class="lead"><?php echo "$desc" ?></p>
            <p class="lead">
            <p>Asked by: Amrendram</p>
            </p>
            <hr class="my-4">
        </div>
    </div>

    <div class="container">
        <h4>Discussion</h4>
    </div>

    <!-- comments backend -->
    <?php
    $method = $_SERVER['REQUEST_METHOD'];
    $showAlert = false;
    if ($method == 'POST') {
        //insert data into db
        $cmnt_content = $_POST['comment'];
        $sql = "INSERT INTO `comments` (`comment_content`, `thread_id`, `comment_time`, `comment_by`) VALUES ('$cmnt_content', '$id', current_timestamp(), 0);";
        $showAlert = true;
       
        if ($showAlert and $cmnt_content != NULL) {
            $result = mysqli_query($conn, $sql);
            echo '<div class="alert alert-success container" role="alert">Success! Your comment has been added.</div>';
            $cmnt_content = NULL;
        }
    }
    ?>

    <div class="container">
        <!-- comments form -->
        <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
            <div class="mb-3">
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="" id="comment" name="comment" rows="4"></textarea>
                <label for="floatingTextarea">Type your Comment</label>
            </div>
            <button type="submit" class="btn mt-3 button-primary">Post</button>
        </form>


        <!-- Comments -->
        <?php
        $id = $_GET['threadid'];
        $sql = "SELECT * FROM `comments` WHERE thread_id = $id"; //fetching thread data from db
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        echo $comment_time;

        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $desc = $row['comment_content'];
            $cmt_time = $row['comment_time'];

            echo '<div class="media my-4">
        <div class="user-img d-flex align-items-center">
        <img class="me-3" src="img/user.png">
        <div class="media-body">
        <h5 class="mt-0">Anonymous User at ' . $cmt_time . '</h5>
          ' . $desc . '</div>
        </div>
        </div>';
        } ?>
    </div>















    <?php include "Partials/_footer.php" ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>