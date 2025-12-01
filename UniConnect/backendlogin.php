<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Only process form if submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Use 'username' here to match the HTML input name="username"
    $login_input = trim($_POST['username']); 
    $password_input = trim($_POST['password']);

    $found = false;

    // Check if users array exists and if this specific user exists
    // We check directly by key (since we saved it that way in Signup.php)
    if (isset($_SESSION['users']) && isset($_SESSION['users'][$login_input])) {
        
        $stored_user = $_SESSION['users'][$login_input];

        // Verify the password
        if (password_verify($password_input, $stored_user['password'])) {
            // Password is correct!
            $_SESSION['user'] = $login_input; // Save session
            $_SESSION['fullname'] = $stored_user['fullname']; // Optional: save name too
            
            // Redirect to dashboard
            header("Location: index.php"); 
            exit;
        }
    }

    // If we reach here, login failed
    $error = "Invalid username/email or password.";
}
