<?php
    require_once("../php/db-connection.php");


    if (isset($_POST["nickname"]) && isset($_POST["password"]) && isset($_POST["email"])) {
        $mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);

        $nickname = $_POST["nickname"];
        $password = $_POST["password"];
        $email = $_POST["email"];

        $query = "SELECT * FROM `users` WHERE `nickname` = '$nickname' OR `email` = '$email'";

        if ($result = $mysqli->query($query)) {
            $is = $result->num_rows;
            $row = $result->fetch_assoc();
            if($is > 0) {
                if ($nickname == $row["nickname"])
                    echo "User exists.";
                else if ($email == $row["email"])
                    echo "Email exists.";
            }
            else {
                $query = "INSERT INTO `users`(`id`,`nickname`, `password`, `email`) VALUES ('','$nickname','$password','$email')";
                $mysqli->query($query);
                echo "Account created successful!";
                mkdir("../users/$nickname"); // ???
            }
        }
        $mysqli->close();
    }
?>
