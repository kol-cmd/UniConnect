<?php
require "backendlogin.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | UniConnect</title>
    <link rel="stylesheet" href="Login.css" />
  </head>
  <body>
    
<!-- please avoid -->
    <?php if (isset($_GET['msg'])): ?>
        <p style="color: red; text-align: center;">
            <?= htmlspecialchars($_GET['msg']) ?>
        </p>
    <?php endif; ?>

    <div class="auth-container">
      <div class="auth-card">
        <h1>LOG<span>i</span>N</h1>

<!-- please avoid -->
        <?php if (isset($error)): ?>
            <p style="color: red;">
                <?= htmlspecialchars($error) ?>
            </p>
        <?php endif; ?>

        <form method="POST" action="" id="login-form">
          <input type="email" name="username" placeholder="Username or Email" required />
          <input type="password" name="password" placeholder="Password" required />
          <button type="submit">Login</button>
        </form>

        <p class="auth-footer">
          Don't have an account? <a href="Signup.php">Sign up</a>
        </p>
      </div>
    </div>
  </body>
</html>