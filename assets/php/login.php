<?php
include_once '../config/config.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //username and password for validation
        $validUsername = $config['username'];
        $validPassword = $config['password'];
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if ($username === $validUsername && $password === $validPassword) {
            $_SESSION["username"] = $username;
            
            header("Location: /dashboard.php");
            exit();
        } else {
            header("Location: /index.php?error=1");
            exit();
        }
} else {
    header("Location: /index.php");
    exit();
}
?>
