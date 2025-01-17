<?php 
    // Call to Get User info API
    require "authHeader.php";

    $response = getUserInfo($_COOKIE["userId"], $_COOKIE["accessToken"], $_COOKIE["accessTokenSecret"]);

    $pieces = explode('"', $response);

    $memberName = $pieces[7];

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
  <title>Member Profile | Iconically</title>
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
            <!--li><a href="question-submission.php">Submit</a></li-->
            <!--li><a href="#">Search</a></li-->
            <li><a href="who-we-are.html">Who We Are</a></li>
            <li class="dropdown">
              <button class="nav-logo-icon-btn nav-dropdown-btn">
                <img src="images/Iconically_logo_icon.png" alt="Iconically - logo icon" width="53">
              </button>
              <ul class="nav-dropdown-content">
                <!--li><a class="nav-link_primary" href="#">Profile</a></li-->
                <!--li><a class="nav-link_primary" href="#">Votes</a></li-->
                <!--li><a class="nav-link_primary" href="#">Submit a Question</a></li-->
                <!--li><a class="nav-link_primary" href="#">Submit an Answer</a></li-->
                <!--li><a class="nav-link_primary" href="#">Create a Space</a></li-->
                <!--li><a class="nav-link_primary" href="#">Favorite Channels</a></li-->
                <!--li class="nav-hr"></li-->
                <li><a class="nav-link_secondary" href="signp.html">Signup</a></li>
                <li><a class="nav-link_secondary" href="login.html">Login</a></li>
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
                <!--li><a class="nav-link_primary" href="#">Profile</a></li-->
                <!--li><a class="nav-link_primary" href="#">Votes</a></li-->
                <!--li><a class="nav-link_primary" href="#">Submit a Question</a></li-->
                <!--li><a class="nav-link_primary" href="#">Submit an Answer</a></li-->
                <!--li><a class="nav-link_primary" href="#">Create a Space</a></li-->
                <!--li><a class="nav-link_primary" href="#">Favorite Channels</a></li-->
                <li class="nav-hr"></li>
                <li><a class="nav-link_secondary" href="signup.html">Signup</a></li>
                <li><a class="nav-link_secondary" href="login.html">Login</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <!-- member profile -->
  <div class="member-profile">
    <div class="container">
      <h1 class="member-profile__heading"><?php echo $memberName; ?></h1>
      <p class="member-profile__company-name">Company Name Goes Here</p>
      <p class="member-profile__business-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed felis eget velit aliquet sagittis id. Amet justo donec enim diam vulputate ut pharetra. A scelerisque purus semper eget duis. Egestas tellus rutrum tellus pellentesque eu tincidunt tortor. Feugiat vivamus at augue eget arcu dictum varius duis. Nibh tellus molestie nunc non blandit massa enim nec dui. Iaculis urna id volutpat lacus laoreet non curabitur gravida. Sit amet risus nullam eget felis eget nunc. Ac tortor vitae purus faucibus. Volutpat diam ut venenatis tellus in metus vulputate. Tempus quam pellentesque nec nam aliquam.</p>
      <a class="member-profile__website-button btn-green" href="#">Visit Website <i class="fa-solid fa-up-right-from-square"></i></a>
    </div>
  </div>
  <!-- spaces
  <div class="spaces">
    <div class="container">
      <h3>Explore Spaces</h3>
    </div>
  </div>
  -->
  <!-- member questions -->
  <div class="member-questions">
    <div class="container">
      <h3 class="member-questions-heading"><?php echo $memberName; ?>'s Questions</h3>
      <div class="member-questions-content flex">
        <div class="unit member-questions-item one-third">
          <img class="member-questions__video" src="images/question-1.png" alt="Q&A Video">
        </div>
        <div class="unit member-questions-item one-third">
          <img class="member-questions__video" src="images/question-2.png" alt="Q&A Video">
        </div>
        <div class="unit member-questions-item one-third">
          <img class="member-questions__video" src="images/question-1.png" alt="Q&A Video">
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
