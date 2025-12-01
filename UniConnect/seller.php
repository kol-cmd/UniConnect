<?php 
require "backendseller.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Seller Dashboard</title>
    <link rel="stylesheet" href="seller.css" />
  </head>
  <body>
    <header>
      <div class="menu-icon" id="menuToggle">☰</div>
      <h1>Seller Dashboard</h1>
    </header>

    <aside id="sidebar" class="hidden">
      <nav>
        <ul>
          <li id="dash">
            <img src="statistics.gif" alt="dashboard" />Home
          </li>
          <li id="add"><img src="add1.gif" alt="add" />Add Product</li>
          <li id="mess"><img src="message2.gif" alt="message" />Messages</li>
          <li id="noti"><img src="noti.gif" alt="bell" />Notifications</li>
          <li id="set"><img src="settings2.gif" alt="settings" />Settings</li>
        </ul>
      </nav>
    </aside>

    <main>
      <section class="dashboard">
        <div class="profile-summary">
          <img src="<?=$profileSrc?>" alt="Profile Picture" class="profile-pic" />
          <div class="profile-info">
            <h2><?= $username ?></h2>
            <p>Student Seller</p>
          </div>
        </div>
        
        <h2>Upload Profile Picture</h2>

        <?php if (isset($success)): ?>
            <p style="color: green; margin-bottom: 10px; font-weight: bold;">
                <?= htmlspecialchars($success) ?>
            </p>
        <?php endif; ?>

        <?php if (isset($error)): ?>
            <p style="color: red; margin-bottom: 10px; font-weight: bold;">
                <?= htmlspecialchars($error) ?>
            </p>
        <?php endif; ?>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="profile_pic" accept="image/*" required>
            <button type="submit" name="upload">Upload Profile Picture</button>
        </form>

        <div class="count-section">
          <div class="card product-card">
            <h3>Products</h3>
            <p>12</p>
          </div>
          <div class="card order-card" id="order">
            <h3>Orders</h3>
            <p>4</p>
          </div>
        </div>

        <div class="analytics">
          <h3>Analytics</h3>
          <p>
            Coming soon: charts and sales data
            appear here.
          </p>
        </div>
      </section>
    </main>
    <script src="seller.js"></script>
  </body>
</html>