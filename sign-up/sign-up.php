<?php
    session_start();
    require_once("../php/db-connection.php");

    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);

        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "SELECT * FROM `users` WHERE `username` = '$username'";
        $mysqli->query($query);

        if ($result->num_rows > 0) {
            echo "User exists.";
        }
        else {
            $query = "INSERT INTO `users`(`id`,`username`, `password`) VALUES ('','$username','$password')";
            $mysqli->query($query);
            echo "Account created successful!";
            header("Location:../sign-in/");
            mkdir("../user/$username");
        }

        $mysqli->close();
    }
?>
