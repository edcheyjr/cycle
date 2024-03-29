<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About | Comfy</title>
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
              <a href="shop.php" class="nav-link-items"> shop</a>
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
        <h3 class="page-hero-title">About / eCycle</h3>
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
    <?php require 'cart.php'?>
    <!-- cart -->
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
          <h3 class="cart-total text-slanted">total : $1299</h3>
          <button class="cart-checkout btn">checkout</button>
        </footer>
      </aside>
    </div> -->
    <!-- about -->
    <section class="section section-center about-page">
      <div class="title">
        <h2><span>/</span> our history</h2>
      </div>
      <p class="about-text">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat
        accusantium sapiente tempora sed dolore esse deserunt eaque excepturi,
        delectus error accusamus vel eligendi, omnis beatae. Quisquam, dicta.
        Eos quod quisquam esse recusandae vitae neque dolore, obcaecati incidunt
        sequi blanditiis est exercitationem molestiae delectus saepe odio
        eligendi modi porro eaque in libero minus unde sapiente consectetur
        architecto. Ullam rerum, nemo iste ex, eaque perspiciatis nisi, eum
        totam velit saepe sed quos similique amet. Ex, voluptate accusamus
        nesciunt totam vitae esse iste.
      </p>
    </section>
    <script type="module" src="./src/pages/about.js"></script>
    <script type="module" src="src/makeOrder.js"></script>
  </body>
</html>
