<?php
session_start();

    if(isset($_SESSION['username'])){
        header('Location: dashboard.php');
    }

    $username = 'dhika';
    $password = 1234;

    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        $ambil_username = $_POST["username"];
        $ambil_password = $_POST["password"];

        if($ambil_username == $username && $ambil_password == $password)
        {
            $_SESSION['username'] = $ambil_username;
            echo "login Berhasil", $_SESSION['username'];
            header("Location: dashboard.php");
        }
        else{
            echo "Login dlu bro";
        }
    }
?>
<html>
    <head>
        <title>login</title>
    </head>
    <body>
        <h3>Login dlu gais</h3>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="username">
            <br>
            <input type="text" name="password" placeholder="password">
            <br>
            <input type="submit" value="Login"><br>
        </form>
    </body>
</html>