<?php
    session_start();
    require_once("db-connection.php");

    if (isset($_POST["message"])) {
        $message = $_POST["message"];
        $date = date("Y-m-d H:i:s");
        $username = $_SESSION["username"];
        
        $mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);
        
        $query = "SELECT id FROM `users` WHERE username = '$username'";

        if ($result = $mysqli->query($query)) {
            $row = $result->fetch_assoc();
            $id = $row["id"];
        }
        
        $query = "INSERT INTO chat_messages VALUES ('', '$id', '$message', '$date')";
        $result = $mysqli->query($query);

        $mysqli->close();
    }
?>
