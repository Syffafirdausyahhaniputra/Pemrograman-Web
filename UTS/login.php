<?php
session_start();

// Mock user data
$valid_username = "admin";
$valid_password = "123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $valid_username && $password === $valid_password) {
        // Set session untuk menyimpan informasi login
        $_SESSION["username"] = $username;

        // Set cookie untuk menyimpan informasi login
        setcookie("username", $username, time() + 3600, "/"); // Cookie berlaku selama 1 jam

        // Respons berhasil
        echo "dashboard.php";
    } else {
        // Respons error
        http_response_code(401);
    }
}
?>
