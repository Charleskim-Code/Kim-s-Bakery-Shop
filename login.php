<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Dummy user for testing
    $valid_email = "ampeloquio528@gmail.com";
    $valid_password = "000008";

    if ($email === $valid_email && $password === $valid_password) {
        $_SESSION['email'] = $email;
        header("Location: home.php");
        exit();
    } else {
        $error = "Invalid email or password!";
    }
}
?>

 <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>