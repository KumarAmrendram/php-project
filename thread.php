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

<body class="section">
    <?php include "Partials/_header.php" ?>
    <?php include 'Partials/_dbconnect.php' ?>
    <?php
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

    <?php include "Partials/_footer.php" ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>