<?php
    session_start();

    function clean_input($data) 
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $username = clean_input($_POST["username"]);
            $password = clean_input($_POST["password"]);
            $age = clean_input($_POST["age"]);

            $species = clean_input($_POST["species"]);
            $accom = isset($_POST["accom"]) ? $_POST["accom"] : [];

            $food = clean_input($_POST["food"]);
            $partysize = clean_input($_POST["partysize"]);
        }

?>