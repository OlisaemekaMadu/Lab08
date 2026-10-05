<?php

    include 'header.inc';

    session_start();

    if (isset($_SESSION['User']))
        {
            echo "Welcome, ".$_SESSION['User'];
        }
        else
        {
            header('Location: login.php');
        }

    include 'footer.inc';
?>
