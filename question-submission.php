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
  <title>Question Submission | Iconically</title>
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
            <li><a class="active" href="question-submission.php">Submit</a></li>
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
  <!-- main -->
  <main>
    <div class="container">
      <h1 class="center-text main-heading">Question Submission</h1>
      <div class="main-content">
        <form class="form-question-submission" id="form-question-submission" method="POST" action="post-question.php" enctype="multipart/form-data">
          <div class="form-row flex">
            <div class="form-label-input flex flex-flow-column unit one-half">
              <label class="form-label" for="fname">First Name</label>
              <input class="form-input" type="text" id="fname" name="fname" value="Member First Name">
            </div>
            <div class="form-label-input flex flex-flow-column unit one-half">
              <label class="form-label" for="lname">Last Name</label>
              <input class="form-input" type="text" id="lname" name="lname" value="Member Last Name">
            </div>
          </div>
          <!--div class="form-row flex">
            <div class="form-label-input form-select-field flex flex-flow-column unit one-half">
              <label class="form-label" for="space-select">Select a Space</label>
              <select class="form-select" id="space-select" name="space-select">
                <option value="" disabled selected hidden>- Select a Space -</option>
                <option value="space-1">Space 1</option>
                <option value="space-2">Space 2</option>
              </select>
            </div>
            <div class="form-label-input flex flex-flow-column unit one-half">
              <label class="form-label" for="space-new">Create a New Space</label>
              <input class="form-input" type="text" id="space-new" name="space-new">
            </div>
          </div-->
          <div class="form-row flex">
            <div class="form-label-input flex flex-flow-column unit whole">
              <label class="form-label" for="question-upload">Upload <i class="fa-solid fa-asterisk form-field-required"></i></label>
              <input class="form-input" type="file" id="question-upload" name="question-upload" accept="audio/*, video/*" required>
            </div>
          </div>
          <p class="form-text">All submissions must have clear audio and/or video and be under 2 minutes in length. By clicking submit below, you ackowledge and agree to our Privacy Policy and Terms of Use.</p>
          <button class="form-btn" type="submit" form="form-question-submission" value="Submit">Submit</button>
        </form>
      </div>
      <h2 class="hero-image__tagline">
        <span class="hero-image__tagline-white">Advice</span>
        <span class="hero-image__tagline-darker">+</span>
        <span class="hero-image__tagline-white">Promotion</span>
        <span class="hero-image__tagline-darker">=</span>
        <span class="hero-image__tagline-white">Acceleration</span>
      </h2>
    </div>
  </main>
  <!-- question examples -->
  <div class="question-examples">
    <div class="container">
      <h3 class="question-examples-heading">Question Examples</h3>
      <div class="question-examples-content flex">
        <div class="unit question-examples-item one-third">
          <img class="question-examples__video" src="images/question-1.png" alt="Q&A Video">
        </div>
        <div class="unit question-examples-item one-third">
          <img class="question-examples__video" src="images/question-2.png" alt="Q&A Video">
        </div>
        <div class="unit question-examples-item one-third">
          <img class="question-examples__video" src="images/question-1.png" alt="Q&A Video">
        </div>
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
