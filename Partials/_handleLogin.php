<?php 
$showError = "false";
$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){ //a genuine post request 

            include "_dbconnect.php";

            $email = $_POST['loginEmail'];
            $pass = $_POST['loginPassword'];

            
        // check if email already in use
        $sql = "SELECT * FROM `users` WHERE user_email= '$email'";
        $result = mysqli_query($conn, $sql);
        $Vrows = mysqli_num_rows($result);
        if($Vrows == 0){
                $rows = mysqli_fetch_assoc($result);   
                if($rows['user_password'] == $pass){
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['useremail'] = $email;
                    $_SESSION['username'] = $rows['name'];
                    header("Location: /php-project/index.php");
                    exit();
                }
        } else {
            echo "enable to login";
        }

}
