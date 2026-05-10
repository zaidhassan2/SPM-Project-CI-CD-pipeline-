<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"] ?? '');
    $email = trim($_POST["email"] ?? '');
    $message = trim($_POST["message"] ?? '');

    // Validation 1: Required Fields
    if (empty($name) || empty($email) || empty($message)) {
        $_SESSION['error'] = "All fields are required.";
        header("Location: index.php#contact");
        exit;
    }

    // Validation 2: Email Format Check
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format.";
        header("Location: index.php#contact");
        exit;
    }

    // Success: Redirect to Thank You page
    header("Location: thank-you.php");
    exit;
} else {
    header("Location: index.php");
    exit;
}
?>
