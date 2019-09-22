<?php
    require_once("../php/db-connection.php");


    if (isset($_POST["nickname"]) && isset($_POST["password"])) {
        $mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);

        $nickname = $_POST["nickname"];
        $password = $_POST["password"];

        $query = "SELECT * FROM `users` WHERE `nickname` = '$nickname'";

        if ($result = $mysqli->query($query)) {
            $row = $result->fetch_assoc();
            if($result->num_rows > 0) {
                if ($nickname == $row["nickname"])
                    echo "User exists.";
            }
            else {
                $query = "INSERT INTO `users`(`id`,`nickname`, `password`) VALUES ('','$nickname','$password')";
                $mysqli->query($query);
                echo "Account created successful!";
                mkdir("../users/$nickname"); // ???
            }
        }
        $mysqli->close();
    }
?>
