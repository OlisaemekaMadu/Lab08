<?php
    session_start();

    include 'error.inc';

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == 'admin' && $password == 'password123')
        {
            $_SESSION['User'] = $username;
            header('Location: welcome.php');
        }
        else
        {
            echo "Invalid login. <a href='login.php'>Try again</a>";
        }

?>
