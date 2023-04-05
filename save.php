if($rows > 0 ){
            $showError = "Email already in use";
        } else {
            if($pass == $cPass){
                    // $passHash = password_hash($pass, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO `users` (`name`, `user_email`, `user_password`, `timestamp`) VALUES ('$user_name', '$user_email', '$pass', current_timestamp())";
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
        header("Location: /php-project/index.php?signupsuccess=flase&error=$showError"); 