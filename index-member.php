<?php
require "verify-member.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Iconically - Where every icon is an ally">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="generator" content="pandoc">
  <meta http-equiv="X-UA-Compatible" content="IE=EDGE">
  <!-- stylesheets -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="css/reset.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" rel="stylesheet"/>
  <link href="css/styles.css" rel="stylesheet"/>
  <!-- javascripts -->
  <script src="https://kit.fontawesome.com/210d9e9209.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="js/bucket.js"></script>
  <title>Home | Iconically</title>
</head>
<body>
  <!-- header -->
  <header>
    <div class="container">
      <div class="flex space-between align-center">
        <div class="unit one-third header-logo">
          <a href="index.html">
            <picture>
              <img src="images/iconically_logocolored.png" alt="Iconically - Where every icon is an ally">
            </picture>
          </a>
        </div>
        <nav class="unit two-thirds">
          <ul class="flex align-center justify-end">
            <!--li><a href="#">Search</a></li-->
            <li><a href="who-we-are.html">Who We Are</a></li>
            <li><a href="question-submission.php">Submit</a></li>
            <li class="dropdown">
              <button class="nav-logo-icon-btn nav-dropdown-btn">
                <img src="images/Iconically_logo_icon.png" alt="Iconically - logo icon" width="53">
              </button>
              <ul class="nav-dropdown-content">
                <!--li><a class="nav-link_primary" href="#">Profile</a></li-->
                <!--li><a class="nav-link_primary" href="#">Votes</a></li-->
                <li><a class="nav-link_primary" href="manage-profile-member.php">Manage Profile</a></li>
                <li><a class="nav-link_primary" href="question-submission.php">Submit a Question</a></li>
                <!--li><a class="nav-link_primary" href="#">Submit an Answer</a></li-->
                <!--li><a class="nav-link_primary" href="#">Create a Space</a></li-->
                <!--li><a class="nav-link_primary" href="#">Favorite Channels</a></li-->
                <li class="nav-hr"></li>
                <!--li><a class="nav-link_secondary" href="#">Signup</a></li-->
                <li><a class="nav-link_secondary" href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <nav class="unit two-thirds mobile">
          <ul class="flex align-center justify-end">
            <li class="dropdown">
              <button class="nav-icon-btn nav-dropdown-btn">
                <i class="fa-solid fa-bars fa-2x"></i>
              </button>
              <ul class="nav-dropdown-content">
                <li><a class="nav-link_primary" href="who-we-are.html">Who We Are</a></li>
                <li><a class="nav-link_primary" href="manage-profile-member.php">Manage Profile</a></li>
                <!--li><a class="nav-link_primary" href="#">Votes</a></li-->
                <li><a class="nav-link_primary" href="question-submission.php">Submit a Question</a></li>
                <!--li><a class="nav-link_primary" href="#">Submit an Answer</a></li-->
                <!--li><a class="nav-link_primary" href="#">Create a Space</a></li-->
                <!--li><a class="nav-link_primary" href="#">Favorite Channels</a></li-->
                <li class="nav-hr"></li>
                <li><a class="nav-link_secondary" href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <!-- hero -->
  <div class="hero">
    <div class="flex space-between align-center">
      <div class="unit one-third hero-text">
        <div class="hero-text-slider">
          <div>
            <h1 class="hero-text__heading">Thoughtful advice and needed promotion from the world's most <span class="hero-text__heading-lighter">iconic figures</span>.</h1>
            <p class="hero-text__content">Get connected with mission-driven, industry icons that can help scale and promote your business.</p>
          </div>
          <div>
            <h1 class="hero-text__heading">"If you can see it and believe it, it is a lot easier to achieve it."
              <br><span class="hero-text__heading-lighter">- Oprah Winfrey</span>
            </h1>
            <p class="hero-text__content">Support and follow the journey of BIPOC and female founders as icons accelerate their business.</p>
          </div>
        </div>
      </div>
      <div class="unit two-thirds hero-image">

        <!--img class="hero-image__img" src="images/Alicia_Keys.jpeg" alt="Alicia Keys"-->

        <div class="hero-slider-and-action-btns">
          <div class="hero-image-slider">
            <div><img class="hero-image__img" src="images/Dale-Moss.jpeg" alt="Dale Moss"></div>
            <div><img class="hero-image__img" src="images/Elizabeth-Leiba.jpg" alt="Elizabeth Leiba"></div>
            <div><img class="hero-image__img" src="images/Netta-Jenkins.jpg" alt="Netta Jenkins"></div>
            <div><img class="hero-image__img" src="images/Dubwork.jpeg" alt="Dubwork"></div>
            <div><img class="hero-image__img" src="images/Vitus-Spehar.jpeg" alt="Vitus Spehar"></div>
          </div>
          <!--div class="hero-slider-action-btns flex space-between">
            <a class="hero-slider-action-btn btn-green" href="#">Submit</a>
            <a class="hero-slider-action-btn btn-purple" href="#">Vision</a>
          </div-->
        </div>
        <h2 class="hero-image__tagline">
          <span class="hero-image__tagline-white">Advice</span>
          <span class="hero-image__tagline-darker">+</span>
          <span class="hero-image__tagline-white">Promotion</span>
          <span class="hero-image__tagline-darker">=</span>
          <span class="hero-image__tagline-white">Acceleration</span>
        </h2>
      </div>
      <div class="unit whole hero-text mobile">
        <div class="container">
          <div class="hero-text-slider">
            <div>
              <h1 class="hero-text__heading">Thoughtful advice and needed promotion from the world's most <span class="hero-text__heading-lighter">iconic figures</span>.</h1>
              <p class="hero-text__content">Get connected with mission-driven, industry icons that can help scale and promote your business.</p>
            </div>
            <div>
              <h1 class="hero-text__heading">"If you can see it and believe it, it is a lot easier to achieve it."
                <br><span class="hero-text__heading-lighter">- Oprah Winfrey</span>
              </h1>
              <p class="hero-text__content">Support and follow the journey of BIPOC and female founders as icons accelerate their business.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- spaces
  <div class="spaces">
    <div class="container">
      <h3>Explore Spaces</h3>
    </div>
  </div>
  -->
  <!-- new & trending -->
  <div class="new-trending">
    <div class="container">
      <h3 class="new-trending-heading">New & Trending</h3>
      <div class="new-trending-content flex">
        <div class="unit new-trending-item one-third">
          <img class="new-trending__video" src="images/question-1.png" alt="Q&A Video">
        </div>
        <div class="unit new-trending-item one-third">
          <img class="new-trending__video" src="images/question-2.png" alt="Q&A Video">
        </div>
        <div class="unit new-trending-item one-third">
          <img class="new-trending__video" src="images/question-1.png" alt="Q&A Video">
        </div>
      </div>
    </div>
  </div>
  <!-- icons -->
  <div class="icons">
    <div class="container">
      <h3 class="icons-heading">Icons</h3>
      <div class="icons-content">
        <ul class="icons-items flex flex-wrap space-around">
          <li class="icons-item">
            <img class="icons-item__icon-photo" src="images/Dale-Moss-square.jpeg" alt="Dale Moss">
            <span class="icons-item__icon-name">Dale Moss</span>
            <!--span class="icons-item__icon-title">Icon Title Goes Here</span-->
            <a class="icons-item__icon-profile-btn btn-green" href="icon-profile-dale-moss.html">View Profile <i class="fa-solid fa-square-up-right"></i></a>
          </li>
          <li class="icons-item">
            <img class="icons-item__icon-photo" src="images/Elizabeth-Leiba-square.jpg" alt="Elizabeth Leiba">
            <span class="icons-item__icon-name">Elizabeth Leiba</span>
            <!--span class="icons-item__icon-title">Icon Title Goes Here</span-->
            <a class="icons-item__icon-profile-btn btn-green" href="icon-profile-elizabeth-leiba.html">View Profile <i class="fa-solid fa-square-up-right"></i></a>
          </li>
          <li class="icons-item">
            <img class="icons-item__icon-photo" src="images/Netta-Jenkins-square.jpg" alt="Netta Jenkins">
            <span class="icons-item__icon-name">Netta Jenkins</span>
            <!--span class="icons-item__icon-title">Icon Title Goes Here</span-->
            <a class="icons-item__icon-profile-btn btn-green" href="icon-profile-netta-jenkins.html">View Profile <i class="fa-solid fa-square-up-right"></i></a>
          </li>
          <li class="icons-item">
            <img class="icons-item__icon-photo" src="images/Dubwork-square.jpeg" alt="Dubwork">
            <span class="icons-item__icon-name">Dubwork</span>
            <!--span class="icons-item__icon-title">Icon Title Goes Here</span-->
            <a class="icons-item__icon-profile-btn btn-green" href="icon-profile-dubwork.html">View Profile <i class="fa-solid fa-square-up-right"></i></a>
          </li>
          <li class="icons-item">
            <img class="icons-item__icon-photo" src="images/Vitus-Spehar-square.jpeg" alt="Vitus Spehar">
            <span class="icons-item__icon-name">Vitus Spehar</span>
            <!--span class="icons-item__icon-title">Icon Title Goes Here</span-->
            <a class="icons-item__icon-profile-btn btn-green" href="icon-profile-vitus-spehar.html">View Profile <i class="fa-solid fa-square-up-right"></i></a>
          </li>
          <!--li class="icons-item">
            <img class="icons-item__icon-photo" src="images/icon-placeholder.jpeg" alt="Icon Name">
            <span class="icons-item__icon-name">Icon Name</span>
            <span class="icons-item__icon-title">Icon Title Goes Here</span>
            <a class="icons-item__icon-profile-btn btn-green" href="icon-profile.html">View Profile <i class="fa-solid fa-square-up-right"></i></a>
          </li>
          <li class="icons-item">
            <img class="icons-item__icon-photo" src="images/icon-placeholder.jpeg" alt="Icon Name">
            <span class="icons-item__icon-name">Icon Name</span>
            <span class="icons-item__icon-title">Icon Title Goes Here</span>
            <a class="icons-item__icon-profile-btn btn-green" href="icon-profile.html">View Profile <i class="fa-solid fa-square-up-right"></i></a>
          </li>
          <li class="icons-item">
            <img class="icons-item__icon-photo" src="images/icon-placeholder.jpeg" alt="Icon Name">
            <span class="icons-item__icon-name">Icon Name</span>
            <span class="icons-item__icon-title">Icon Title Goes Here</span>
            <a class="icons-item__icon-profile-btn btn-green" href="icon-profile.html">View Profile <i class="fa-solid fa-square-up-right"></i></a>
          </li-->
        </ul>
      </div>
    </div>
  </div>
  <!-- logo -->
  <div class="logo">
    <picture>
      <img class="logo-image" src="images/iconically_logocolored.png" alt="Iconically - Where every icon is an ally">
    </picture>
  </div>
  <!-- footer -->
  <footer>
    <div class="container">
      <div class="flex">
        <div class="links flex unit one-half">
          <div class="help-links unit one-half">
            <h6 class="footer-heading">Help</h6>
            <ul class="help-links-list">
              <!--li><a href="#">Member Access</a></li>
              <li><a href="#">Charity</a></li>
              <li><a href="#">Category Creation</a></li>
              <li><a href="#">Question Submission</a></li>
              <li><a href="#">Answer Submission</a></li>
              <li><a href="#">Voting</a></li-->
              <li><a href="faq.html">FAQ</a></li>
            </ul>
          </div>
          <div class="company-links unit one-half">
            <h6 class="footer-heading">Company</h6>
            <ul class="company-links-list">
              <!--li><a href="#">Privacy Policy</a></li-->
              <li><a href="docs/IconicallyTermsofUse.pdf" target="_blank">Terms of Use</a></li>
            </ul>
          </div>
        </div>
        <div class="social-media unit one-half">
          <div class="social-media-icons flex justify-end">
            <div class="facebook flex align-center">
              <a href="#">
                <span class="fa-stack fa-2-5x">
                  <i class="fa-solid fa-circle fa-stack-2x"></i>
                  <i class="fa-brands fa-facebook-f fa-stack-1x"></i>
                </span>
              </a>
            </div>
            <div class="ig-twitter flex align-center flex-flow-column">
              <a class="margin-bottom-25" href="#">
                <span class="fa-stack fa-2-5x">
                  <i class="fa-solid fa-circle fa-stack-2x"></i>
                  <i class="fa-brands fa-instagram fa-stack-1x"></i>
                </span>
              </a>
              <a href="#">
                <span class="fa-stack fa-3-5x">
                  <i class="fa-solid fa-circle fa-stack-2x"></i>
                  <i class="fa-brands fa-twitter fa-stack-1x"></i>
                </span>
              </a>
            </div>
            <div class="linkedin flex align-center">
              <a href="#">
                <span class="fa-stack fa-2-5x">
                  <i class="fa-solid fa-circle fa-stack-2x"></i>
                  <i class="fa-brands fa-linkedin-in fa-stack-1x"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="social-media mobile">
          <ul>
            <li>
              <a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa-solid fa-circle fa-stack-2x"></i>
                  <i class="fa-brands fa-facebook-f fa-stack-1x"></i>
                </span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa-solid fa-circle fa-stack-2x"></i>
                  <i class="fa-brands fa-instagram fa-stack-1x"></i>
                </span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa-solid fa-circle fa-stack-2x"></i>
                  <i class="fa-brands fa-twitter fa-stack-1x"></i>
                </span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa-solid fa-circle fa-stack-2x"></i>
                  <i class="fa-brands fa-linkedin-in fa-stack-1x"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="copyright">
      <p>&copy; 2022 Iconically, Inc. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
