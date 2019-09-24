<?php
    require_once("../php/db-connection.php");

    if (isset($_POST["username"])) {
        $username = $_POST["username"];
        $password = $_POST['password'];

        $mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);

        $query = "SELECT * FROM `users` WHERE `username` = '$username' AND password = '$password'";

        if ($result = $mysqli->query($query)) {
            if ($result->num_rows > 0) {
                session_start();
                $_SESSION["username"] = $username;

                $result->free_result();
                header("Location: ..");
            }
            else {
                echo "Incorrect nickname or password, missing user!";
            }
        }
        else {
            echo "Connect Error!";
        }
    }
    else {
        echo "Empty field nickname or password.";
    }

?>
