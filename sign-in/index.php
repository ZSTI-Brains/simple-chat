<?php session_start(); if (isset($_SESSION)) header("Location: .."); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <title>Simple Chat</title>
  </head>
  <body id="sign-in">
    <main>
        <h1>SIMPLE CHAT</h1>
        <form action="sign-in.php" method="post">
            <div class="row">
                <input type="text" placeholder="Username" name="username">
            </div>
            <div class="row">
                <input type="password" placeholder="Password" name="password">
            </div>
            <div class="row submit">
                <input type="submit" value="SIGN IN">
            </div>
            <div class="row">
                <p>Don't you have an account? <a href="../sign-up">Create it now.</a></p>
            </div>
        </form>
    </main>
  </body>
</html>
