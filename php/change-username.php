<?php
    session_start();
    require_once("db-connection.php");

    if (isset($_POST["newMessage"])) {
        $username = $_SESSION["username"];
        $username = "thethx";
        
        $mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);
        
        $query = "SELECT id FROM `users` WHERE username = '$username'";

        if ($result = $mysqli->query($query)) {
            $row = $result->fetch_assoc();
            $id = $row["id"];
        }

        $username = $_POST["newMessage"];
            
        $query = "UPDATE users SET username = '$username' WHERE id = '$id'";
        $mysqli->query($query)


        $mysqli->close();
    }
?>