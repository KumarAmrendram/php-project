<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){ //a genuine post request 

            include "_dbconnect.php";

            $user_name = $_POST['SignupName'];
            $user_email = $_POST['signupEmail'];
            $pass = $_POST['signupPassword'];
            $cpass = $_POST['CPassword'];

        //check if email already in use
        $existSql = "SELECT * FROM `users` WHERE user_email = $user_email";
        $result = mysqli_query($conn, $existSql);
        $numRows = mysqli_num_rows($result);

        if($numRows > 0 ){
            $showError = "Email already in use";
        } else {
            if($pass == $cpass){
                    $passHash = password_hash($pass, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO `users` (`name`, `user_email`, `user_password`) VALUES ('$user_name', '$user_email', '$passHash')";
                    $result = mysqli_query($conn, $sql);    
                    if($result){
                    $showAlert = true;
                    header("Location: /php-project/index.php?signupsuccess=true");
                }

            }
            else{
                $showError = "passwords do not match";
            }
        }
        // header("Location: /php-project/index.php?signupsuccess=flase&error=$showError"); 


}

?>