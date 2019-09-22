<?php
    require_once("../php/db-connection.php");

    if (isset($_POST["nickname"])) {
        $nickname = $_POST["nickname"];
        $password = $_POST['password'];
        $mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);

        $query = "SELECT * FROM `users` WHERE `nickname` = '$nickname' AND password = '$password'";

        if ($result = $mysqli->query($query)) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION["nickname"] = $row["nickname"];
                $_SESSION["password"] = $row["password"];

                $result->free_result();
                header("Location:../index.php");
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
