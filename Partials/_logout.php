<?php

session_start();
echo "logging you out, Please wait...";
header("Location:/php-project/index.php");
session_destroy();
?>