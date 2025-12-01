<?php
require "backendsignup.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up | UniConnect</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="Signup.css" />
  </head>
  <body>
    <div class="signup-container">
      <div class="signup-card">
        <h1 class="signup-title">S<span>i</span>GNUP</h1>
        
        <?php 
        if (!empty($error)) echo "<p class='error' style='color:red'>$error</p>";
        if (!empty($success)) echo "<p class='success' style='color:green'>$success</p>";
        ?>

        <form method="POST" action="" class="signup-form">
          <input 
            type="text" 
            name="fullname" 
            placeholder="Full Name" 
            value="<?= $outputFullname ?>" 
            required 
          />
          <input 
            type="email" 
            name="username" 
            placeholder="Username or Email" 
            value="<?=$outputUsername ?>" 
            required 
          />
          <input type="password" name="password" placeholder="Password" required />
          <input type="password" name="confirm_password" placeholder="Confirm Password" required />
          <button type="submit" class="signup-button">Create Account</button>
        </form>
        <p class="signup-login-link">
          Already registered? <a href="Login.php">Log in</a>
        </p>
      </div>
    </div>
  </body>
</html>