<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shop | eCycle</title>
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />

    <!-- styles css -->
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="my-navbar page">
      <div class="nav-center">
        <!-- links -->
        <div>
          <button class="toggle-nav">
            <i class="fas fa-bars"></i>
          </button>
          <ul class="my-nav-links">
            <li>
              <a href="index.php" class="nav-link-items"> home </a>
            </li>
            <li>
              <a href="shop.php" class="nav-link-items"> shop </a>
            </li>
            <li>
              <a href="about.php" class="nav-link-items"> about </a>
            </li>
            <li>
              <a href="contact.php" class="nav-link-items"> contact </a>
            </li>
          </ul>
        </div>
        <!-- logo -->
        <p class="nav-logo2 black">eCycle</p>
        <!-- <img src="./images/logo-black.svg" class="nav-logo2" alt="logo" /> -->
        <!-- cart icon -->
        <div class="toggle-container">
          <button class="toggle-cart">
            <i class="fas fa-shopping-cart"></i>
          </button>
          <span class="cart-item-count">1</span>
        </div>
      </div>
    </nav>
    <!-- hero -->
    <section class="page-hero">
      <div class="section-center">
        <h3 class="page-hero-title">eCycle / Shop</h3>
      </div>
    </section>
    <!-- sidebar -->
    <div class="sidebar-overlay">
      <aside class="sidebar">
        <!-- close -->
        <button class="sidebar-close">
          <i class="fas fa-times"></i>
        </button>
        <!-- links -->
        <ul class="sidebar-links">
          <li>
            <a href="index.php" class="sidebar-link">
              <i class="fas fa-home fa-fw"></i>
              home
            </a>
          </li>
          <li>
            <a href="shop.php" class="sidebar-link">
              <i class="fas fa-couch fa-fw"></i>
              shop
            </a>
          </li>
          <li>
            <a href="about.php" class="sidebar-link">
              <i class="fas fa-book fa-fw"></i>
              about
            </a>
          </li>
          <li>
            <a href="contact.php" class="sidebar-link">
              <i class="fas fa-phone fa-fw"></i>
              contact
            </a>
          </li>
        </ul>
      </aside>
    </div>
    <!-- cart -->
    <?php require "cart.php"?>
    <!-- <div class="cart-overlay">
      <aside class="cart">
        <button class="cart-close">
          <i class="fas fa-times"></i>
        </button>
        <header>
          <h3 class="text-slanted">your bag</h3>
        </header>
         cart items 
        <div class="cart-items"></div>
        footer 
        <footer>
          <h3 class="cart-total text-slanted">total : $12.99</h3>
          <button class="cart-checkout btn">checkout</button>
        </footer>
      </aside>
    </div> -->
    <!-- products -->
    <section class="products">
      <!-- filters -->
      <div class="filters">
        <div class="filters-container">
          <!-- search -->
          <form class="input-form">
            <input type="text" class="search-input" placeholder="search..." />
          </form>
          <!-- categories -->
          <h4>Company</h4>
          <article class="companies">
            <button class="company-btn">all</button>
            <button class="company-btn">company</button>
          </article>
          <!-- price -->
          <h4>Price</h4>
          <form class="price-form">
            <input
              type="range"
              class="price-filter"
              min="0"
              value="5000"
              max="100000"
            />
          </form>
          <p class="price-value"></p>
        </div>
      </div>
      <!-- products -->
      <div class="products-container">
        <!-- product are displayed here -->
      </div>
    </section>
    <!-- page loading -->
    <div class="page-loading">
      <h2>loading...</h2>
    </div>
    <script type="module" src="src/pages/shop.js"></script>
    <script type="module" src="src/makeOrder.js"></script>

  </body>
</html>
