<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    $user_id = $_SESSION['user_id'];
    session_write_close();
} else {
    session_unset();
    session_write_close();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />

    <!-- styles css -->
    <link rel="stylesheet" href="styles.css" />
    <title>contact us | eCycle</title>
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
        <h3 class="page-hero-title">Contact / eCycle</h3>
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
     <?php require 'cart.php'?>
    <!-- <div class="cart-overlay">
      <aside class="cart">
        <button class="cart-close">
          <i class="fas fa-times"></i>
        </button>
        <header>
          <h3 class="text-slanted">your bag</h3>
        </header>
        <div class="cart-items"></div>
        <footer>
          <h3 class="cart-total text-slanted">total : KSH 1299</h3>
          <button class="cart-checkout btn">checkout</button>
        </footer>
      </aside>
    </div> -->
    <main>
      <section class="questions">
        <!-- title -->
        <div class="title">
          <h2><span>/</span> Fequently Asked Questions</h2>
        </div>
        <!-- questions -->
        <div class="section-center">
          <!-- single question -->
          <article class="question">
            <!-- question title -->
            <div class="question-title">
              <p>do you accept all major credit cards?</p>
              <button type="button" class="question-btn">
                <span class="plus-icon">
                  <i class="far fa-plus-square"></i>
                </span>
                <span class="minus-icon">
                  <i class="far fa-minus-square"></i>
                </span>
              </button>
            </div>
            <!-- question text -->
            <div class="question-text">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est
                dolore illo dolores quia nemo doloribus quaerat, magni numquam
                repellat reprehenderit.
              </p>
            </div>
          </article>
          <!-- end of single question -->
          <!-- single question -->
          <article class="question">
            <!-- question title -->
            <div class="question-title">
              <p>is their a refund policy?</p>
              <button type="button" class="question-btn">
                <span class="plus-icon">
                  <i class="far fa-plus-square"></i>
                </span>
                <span class="minus-icon">
                  <i class="far fa-minus-square"></i>
                </span>
              </button>
            </div>
            <!-- question text -->
            <div class="question-text">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est
                dolore illo dolores quia nemo doloribus quaerat, magni numquam
                repellat reprehenderit.
              </p>
            </div>
          </article>
          <!-- end of single question -->
          <!-- single question -->
          <article class="question">
            <!-- question title -->
            <div class="question-title">
              <p>how do i get my bicycle after order?</p>
              <!-- button -->
              <button type="button" class="question-btn">
                <span class="plus-icon">
                  <i class="far fa-plus-square"></i>
                </span>
                <span class="minus-icon">
                  <i class="far fa-minus-square"></i>
                </span>
              </button>
            </div>
            <!-- question text -->
            <div class="question-text">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est
                dolore illo dolores quia nemo doloribus quaerat, magni numquam
                repellat reprehenderit.
              </p>
            </div>
          </article>
          <!-- end of single question -->
          <!-- single question -->
          <article class="question">
            <!-- question title -->
            <div class="question-title">
              <p>What is the differnces between elctric bicycle and odinary bicycle?</p>
              <!-- button -->
              <button type="button" class="question-btn">
                <span class="plus-icon">
                  <i class="far fa-plus-square"></i>
                </span>
                <span class="minus-icon">
                  <i class="far fa-minus-square"></i>
                </span>
              </button>
            </div>
            <!-- question text -->
            <div class="question-text">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est
                dolore illo dolores quia nemo doloribus quaerat, magni numquam
                repellat reprehenderit.
              </p>
            </div>
          </article>
          <!-- end of single question -->
      </section>
      <section class='section-center'>
        <div class="title" >
        <h2  style="text-transform:none;"><span>/</span>Questions to us,if not answered in FAQs</h2>
        </div>
        <div class="card">
          <form class="form" action="contact.php" id="contact-us" enctype="multipart/form-data" >
        <div>
         <!-- error -->
         <div class="error-msg">
           <!-- error msg -->
         </div>
         <div class="success-msg">
           <!-- success msg -->
         </div>
       </div>
       <div class="form-group">
         <label for="name" class="label">name</label>
        <input type="text" aria-label="name" id = "name" class="form-control name" placeholder="name" name ="name" required>
       </div>
       <div class="form-group">
         <label for="email" class="label">email</label>
         <input type="email" aria-label="email"  class="form-control" placeholder="email" id = "email" name ="email" required >
        </div>
         <div class="form-group">
         <label for="subject" class="label">subject</label>
         <input type="text" aria-label="subject"  class="form-control" placeholder="subject" id = "subject" name ="subject" required>
        </div>
        <div class="form-group">
         <label for="message" class="label">message</label>
        <textarea type="text" aria-label="message"class="form-control" rows="4" cols="form-control" placeholder="message" id = "message" name ="message" required>
        </textarea>
       </div>
       <button type="submit" id='button' class="btn form-control" name ="button">Submit</button>
     </form>
     
     </div>
     </section>
     </div>
    </div>
    </main>
    <!-- javascript -->
    <script type="module" src="src/makeOrder.js"></script>
    <script type="module" src="src/pages/contact.js"></script>
  </body>
</html>
