<?php
// 1. Start the session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 2. Create simple variables to use in your HTML
// This checks: Is the user logged in? (True/False)
$isLoggedIn = isset($_SESSION['user']);

// 3. Prepare the Profile Picture URL
// We decide here which image to show so the HTML doesn't have to guess.
$userImage = "https://via.placeholder.com/150"; // Default placeholder

if ($isLoggedIn && !empty($_SESSION['user_image'])) {
    $userImage = htmlspecialchars($_SESSION['user_image']);
} elseif ($isLoggedIn && isset($_SESSION['user'])) {
    // If logged in but no image, maybe show first letter (optional logic)
    // For now, we keep the variable simple.
}