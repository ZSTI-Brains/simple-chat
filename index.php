<?php session_start(); if (empty($_SESSION)) header("Location: sign-in"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap">
        <link rel="stylesheet" href="fontawesome/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery-3.4.1.min.js"></script>
        <title>Simple Chat</title>
    </head>
    <body id="main">
        <button id="settings-open-button" class="settings-button">
            <i class="fas fa-user-cog"></i>
        </button>
        <div id="settings-container" class="settings-container hidden">
            <div class="inner-container">
                <button id="logout-button">
                    <a href="php/logout.php"><i class="fas fa-sign-out-alt"></i></a>
                </button>
                <button id="settings-close-button">
                    <i class="fas fa-times"></i>
                </button>
                <div class="avatar-container">
                    <img src="assets/default-avatar.png">
                </div>
                <input type="text" value="Szary">
            </div>
        </div>
        <main>
            <div class="messages-container">
            <!--<div class="message">Hello, guys! What's up?</div>-->
            </div>
            <input id="message-input" type="text" placeholder="Type your message here...">
        </main>
        <script src="js/chat.js"></script>
        <script>
            document.getElementById('settings-open-button').addEventListener('click', (e) => {
                document.getElementById('settings-container').classList.remove('hidden');
            });

            document.getElementById('settings-close-button').addEventListener('click', (e) => {
                document.getElementById('settings-container').classList.add('hidden');
            });
        </script>
    </body>
</html>
