<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Initialize variables for sticky forms
$fullname = '';
$username = '';
$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = trim($_POST['fullname'] ?? '');
    $username = trim($_POST['username'] ?? ''); // This is the email
    $password = trim($_POST['password'] ?? '');
    $confirm_password = trim($_POST['confirm_password'] ?? '');

    // Check if all fields are filled
    if (empty($fullname) || empty($username) || empty($password) || empty($confirm_password)) {
        $error = "All fields are required.";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } else {
        // Initialize users array if not already
        if (!isset($_SESSION['users'])) {
            $_SESSION['users'] = [];
        }

        // Check if username/email already exists
        if (isset($_SESSION['users'][$username])) {
            $error = "Username or email already taken.";
        } else {
            // Save user in session using the username as the unique KEY
            $_SESSION['users'][$username] = [
                'fullname' => $fullname,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ];
            $success = "Account created! You can now <a href='Login.php'>login</a>.";
            
            // Clear variables after success
            $fullname = '';
            $username = '';
        }
    }
}

$outputFullname= htmlspecialchars($fullname);
$outputUsername= htmlspecialchars($username);

