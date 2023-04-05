<?php 
$showError = "false";
$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){ //a genuine post request 

            include "_dbconnect.php";

            $user_name = $_POST['SignupName'];
            $user_email = $_POST['SignupEmail'];
            $pass = $_POST['SignupPassword'];
            $cPass = $_POST['CPassword'];

            
        // check if email already in use
        $sql = "SELECT * FROM `users` WHERE user_email= '$user_email'";
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($result);   
        if($rows > 0){
                echo "email already in use";
        } else {
                if($pass == $cPass){
                    echo $rows;
                    $sql = "INSERT INTO `users` (`name`, `user_email`, `user_password`, `timestamp`) VALUES ('$user_name', '$user_email', '$pass', current_timestamp())";
                    $result = mysqli_query($conn, $sql);
                    if($result){
                        $showAlert = true;
                        header("Location:/php-project/index.php?signupsuccess=true");
                        exit();
                    } 
                } else {
                    echo "password do not match";
                }
        }
        header("Location: /php-project/index.php?signupsuccess=flase&error=$showError"); 

}

?>