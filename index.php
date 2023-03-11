<!DOCTYPE html>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);
    $conn->query('CREATE DATABASE IF NOT EXISTS MSCP');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        // log function here
    }

    $client_ip = $_SERVER['REMOTE_ADDR'];
    if (isset($_POST['login-username']) && isset($_POST['login-password'])) {
        session_start();
        $_SESSION[$client_ip]['username'] = $_POST['login-username'];
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="style/index.css">
        <script src="script/"></script>
    </head>
    <body>
        <center>
            <form class="login-form" action="./index.php" method="POST">
                <input name='login-username' id='LU' type="text" placeholder="username" required>
                <br></br>
                <input name='login-password' id='LP' type="password" placeholder="password" required>
                <br></br>
                <input type="submit" name="login-submit" id="lS" value="login" >
            </form>
        </center>
    </body>
</html>