<?php require "backendHomepage.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UniConnect - UNIBEN Marketplace</title>
    
    <link rel="stylesheet" href="Homepage.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body>
  
    <nav class="navbar flex items-center justify-between p-6 lg:px-8">
      
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">UniConnect</span>
          <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="" class="h-8 w-auto" />
        </a>
      </div>

      <div class="flex lg:hidden">
        <button type="button" id="mobile-menu-btn" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-200">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>

      <div class="hidden lg:flex lg:gap-x-12">
        <a href="index.php?page=Browse" class="buy-button text-sm font-semibold text-white">BUY</a>
        <a href="index.php?page=dashboard" class="sell-button text-sm font-semibold text-white">SELL</a>
        <a href="#" class="buy-button text-sm font-semibold text-white">Marketplace</a>
        <a href="#" class="buy-button text-sm font-semibold text-white">Company</a>
      </div>

      <div class="hidden lg:flex lg:flex-1 lg:justify-end items-center gap-x-4">
        <?php if ($isLoggedIn): ?>
            
            <a href="index.php?page=dashboard" title="Go to Dashboard">
                <img src="<?= $userImage ?>" alt="Profile" class="user-img h-8 w-8 rounded-full object-cover border-2 border-white hover:opacity-80">
            </a>

            <a href="index.php?page=logout" id= "Logout" class="text-sm font-semibold text-white hover:text-gray-300">
                Log out
            </a>

        <?php else: ?>
            
            <a href="index.php?page=login" class="login-button text-sm font-semibold text-white">
                Log in <span aria-hidden="true">&rarr;</span>
            </a>

        <?php endif; ?>
      </div>
    </nav>

    <div class="lg:hidden hidden" id="mobile-menu" role="dialog" aria-modal="true" style="z-index: 10000;">
        <div class="fixed inset-0 z-10 bg-black bg-opacity-90"></div>
        
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="">
                </a>
                <button type="button" id="close-menu-btn" class="-m-2.5 rounded-md p-2.5 text-gray-400">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="index.php?page=Browse" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-white hover:bg-gray-800">BUY</a>
                        <a href="index.php?page=dashboard" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-white hover:bg-gray-800">SELL</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-white hover:bg-gray-800">Marketplace</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-white hover:bg-gray-800">Company</a>
                    </div>
                    <div class="py-6 border-t border-gray-700">
                        <?php if ($isLoggedIn): ?>
                             <a href="index.php?page=dashboard" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold text-white hover:bg-gray-800">My Dashboard</a>
                             <a href="index.php?page=logout" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold text-white hover:bg-gray-800">Log out</a>
                        <?php else: ?>
                             <a href="index.php?page=login" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold text-white hover:bg-gray-800">Log in</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="hero">
      <h1>UNIBEN's Trusted Marketplace</h1>
      <p>Buy, sell, and trade textbooks, gadgets, and services safely.</p>
      <div class="search-bar">
        <input type="text" placeholder="Search for textbooks, electronics..." />
        <button>Search</button>
      </div>
    </section>

    <section class="categories">
      <h2>Popular Categories</h2>
      <div class="category-grid">
        <div class="category-card">
          <span>📚</span>
          <h3>Textbooks</h3>
        </div>
        <div class="category-card">
          <span>📱</span>
          <h3>Electronics</h3>
        </div>
        <div class="category-card">
          <span>💼</span>
          <h3>Services</h3>
        </div>
      </div>
    </section>

    <section class="listings">
      <h2>Trending Listings</h2>
      <div class="listing-grid">
        <div class="listing-card">
          <img src="assets/placeholder-image.jpg" alt="ECO 101 Textbook" />
          <h3>ECO 101 Textbook</h3>
          <p>₦2,500 · Faculty of Social Sciences</p>
        </div>
        <div class="listing-card">
          <img src="iPhone X.jpg" alt="Used iPhone X" />
          <h3>Used iPhone X</h3>
          <p>₦85,000 · Faculty of Engineering</p>
        </div>
      </div>
    </section>

    <footer class="footer">
      <a href="#">Safety Tips</a>
      <a href="#">Contact</a>
      <a href="#">FAQ</a>
    </footer>

    
    <script src="Homepage.js"></script>
  </body>
</html>