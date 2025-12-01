<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    $_SESSION['flash_msg'] = "You must login to access that page.";
    header("Location: index.php?page=login");
    exit;
}

// Handle profile picture upload
if (isset($_POST['upload']) && isset($_FILES['profile_pic'])) {
    $file = $_FILES['profile_pic'];
    if ($file['error'] === 0) {
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $allowed = ['jpg','jpeg','png','gif'];
        if (in_array($ext, $allowed)) {
            if (!is_dir('uploads')) mkdir('uploads', 0755, true);
            $filename = uniqid() . '.' . $ext;
            $target = 'uploads/' . $filename;
            if (move_uploaded_file($file['tmp_name'], $target)) {
                $_SESSION['user_image'] = $target;
                $success = "Profile picture uploaded!";
            } else $error = "Failed to upload.";
        } else $error = "Only JPG, PNG, GIF allowed.";
    } else $error = "Upload error.";
}

// Sanitize username
$username = htmlspecialchars($_SESSION['user']);

// Define Image Source (Default vs Custom)
$profileSrc = "images/default-avatar.png"; 

if (!empty($_SESSION['user_image'])) {
    $profileSrc = htmlspecialchars($_SESSION['user_image']);
}
// END OF FILE - DO NOT PUT HTML HERE
?>