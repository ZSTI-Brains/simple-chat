<?php
    require_once("db-connection.php");

    if (isset($_POST["messageId"])) {
        $id = $_POST["messageId"];
        $mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);

        $query = "SELECT chat_messages.id, chat_messages.message, users.username FROM chat_messages
                  INNER JOIN users ON chat_messages.user_id = users.id WHERE chat_messages.id > $id
                  ORDER BY chat_messages.id";

        if ($result = $mysqli->query($query)) {
            $msg = array();

            while ($row = $result->fetch_assoc())
                $msg[] = $row;

            if (count($msg) > 0)
                echo json_encode($msg);
        }

        $mysqli->close();
    }
?>
