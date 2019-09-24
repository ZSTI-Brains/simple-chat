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
        <form action="sign-up.php" method="post" onsubmit="return validateForm()">
            <div class="row">
                <input type="text" placeholder="Username" name="username">
            </div>
            <div class="row">
                <input type="password" placeholder="Password" name="password">
            </div>
            <div class="row">
                <input type="password" placeholder="Confirm password">
            </div>
            <div class="row submit">
                <input type="submit" value="SIGN UP">
            </div>
            <div class="row">
                <p>Do you already have an account? <a href="../sign-in">Sign in now.</a></p>
            </div>
        </form>
    </main>
    <script>
        var pass = document.querySelectorAll("input[type=password]");
        function validateForm() { return pass[0].value == pass[1].value; }
    </script>
  </body>
</html>
