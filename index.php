<?php
// Initialize variables
$current_year = date("Y");
$success_message = "";
$error_message = "";
 date_default_timezone_set('Asia/Kolkata'); 

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check which form was submitted
    if (isset($_POST['appointment_submit'])) {
        // Appointment form processing
        $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
        $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
        $appointment_date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
        $appointment_time = filter_input(INPUT_POST, 'appointment_time', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $treatment = filter_input(INPUT_POST, 'treatment', FILTER_SANITIZE_STRING);
        $notes = filter_input(INPUT_POST, 'note', FILTER_SANITIZE_STRING);
        
        // Validate inputs
        if (!$fname || !$lname || !$appointment_date || !$appointment_time || !$email || !$treatment) {
            $error_message = "Please fill in all required fields.";
        } else {
            // Here you would typically save to database or send an email
            // For now, we'll just set a success message
            $success_message = "Thank you, $fname! Your appointment has been scheduled for $appointment_date at $appointment_time.";
            
            // Optional: Send email notification
            // mail("mdclinicphagwarapb@gmail.com", "New Appointment Request", "Name: $fname $lname\nDate: $appointment_date\nTime: $appointment_time\nEmail: $email\nTreatment: $treatment\nNotes: $notes");
        }
    } elseif (isset($_POST['feedback_submit'])) {
        // Feedback form processing
        $feedback = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
        
        if (!$feedback) {
            $error_message = "Please enter your feedback.";
        } else {
            $success_message = "Thank you for your feedback!";
            
            // Optional: Save feedback to database or send email
            // mail("mdclinicphagwarapb@gmail.com", "New Feedback", "Feedback: $feedback");
        }
    }
}

// Get promo end date
$promo_end_date = "2025/05/28 ";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dental Clinic Bhikhiwind</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/freefront.css">
    
    <!-- Add custom styles for notifications -->
    <style>
      .notification {
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 4px;
      }
      .success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
      }
      .error {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
      }
    </style>
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap">
      <div class="site-navbar-top">
        <div class="container py-2">
          <div class="row align-items-center">
            <div class="col-6">
             
              <a href="https://www.instagram.com/moderndentalclinicphagwara?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="p-2 pl-0"><span class="icon-instagram"></span></a>
            </div>
            <div class="col-6">
              <div class="d-flex ml-auto">
                <a href="#" class="d-flex align-items-center ml-auto mr-4">
                  <span class="icon-phone mr-2"></span>
                  <span class="d-none d-md-inline-block">79862-16497</span>
                </a>
                <a href="#" class="d-flex align-items-center">
                  <span class="icon-envelope mr-2"></span>
                  <span class="d-none d-md-inline-block">bhikhiwinddentalclinic@gmail.com</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="site-navbar">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-2">
              <h2 class="mb-0 site-logo"><a href="index.php">Dental Clinic Bhikhiwind</a></h2>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                   
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Display success/error messages if they exist -->
    <?php if ($success_message): ?>
    <div class="container mt-4">
      <div class="notification success"><?php echo $success_message; ?></div>
    </div>
    <?php endif; ?>
    
    <?php if ($error_message): ?>
    <div class="container mt-4">
      <div class="notification error"><?php echo $error_message; ?></div>
    </div>
    <?php endif; ?>

    <div class="site-blocks-cover" style="background-image: url(images/i_bg.jpg);" data-aos="fade" data-stellar-background-ratio="0.5" class="img-fluid"> 
    <div class="container">
 <div class="container">
  <div class="row align-items-center justify-content-start">
    <div class="col-md-10" style="text-align: left;">
<span class="sub-text" style="-webkit-text-size-adjust: 100%; -webkit-tap-highlight-color: transparent; text-align: left; text-transform: uppercase; letter-spacing: .2em; box-sizing: border-box; margin-top: 0; margin-bottom: 0.5rem; font-family: inherit; font-weight: 500; line-height: 1.2; color: #ffffff; font-size: 1.5rem;"><i class="ri-font-size-40"><h2>WE PRIORTIZE</h2></i></span>
 <h1 >Your <strong>Smile</strong></h1>
    </div>
  </div>
</div>
</div>
    </div>  
  
    <div class="site-block-1">
  <div class="container">
    <div class="row">
      <?php
      // Define services dynamically
      $services = [
        [
          'icon' => 'flaticon-tooth',
          'title' => 'Cosmetic dental',
          'description' => 'Cosmetic dental procedures improve the appearance of your teeth.'
        ],
        [
          'icon' => 'flaticon-tooth-whitening',
          'title' => 'Tooth Whitening',
          'description' => 'Tooth whitening enhances your smile by removing stains and discoloration.'
        ],
        [
          'icon' => 'flaticon-tooth-pliers',
          'title' => 'Tooth Extraction',
          'description' => 'Tooth extraction is a simple and safe procedure to remove damaged teeth.'
        ]
      ];
      
      // Loop through services to display them with staggered animation delay
      foreach ($services as $index => $service):
        $delay = ($index * 0.2); // Stagger the animations
      ?>
      <div class="col-lg-4">
        <div class="site-block-feature d-flex p-4 rounded mb-4 animate-box" data-aos="fade-up" data-aos-delay="<?php echo $delay * 1000; ?>">
          <div class="mr-3">
            <span class="icon <?php echo $service['icon']; ?> font-weight-light text-white h2"></span>
          </div>
          <div class="text">
            <h3><?php echo $service['title']; ?></h3>
            <p><?php echo $service['description']; ?></p>
          </div>
        </div>   
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

    <div class="site-section" style="background: linear-gradient(to bottom, #5ca9cf, #ffffff);">

    <div class="site-section site-block-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
<video src="images/videoplayback.mp4" alt="Video" class="img-fluid rounded shadow" style="width: 100%; height: 600px; border-radius: 20px;" autoplay loop muted></video>          </div>
          <div class="col-lg-6">
            <div class="row row-items">
            <div class="container">
    <div class="row">
      <div class="col-md-6">
        <a href="#" class="feature-btn active" id="feature-1">
          <div class="icon">🦷</div>
        </a>
        <h3 class="feature-title">Tooth Whitening</h3>
        <p class="feature-desc">Professional teeth whitening for a brighter, confident smile.</p>
      </div>
      <div class="col-md-6">
        <a href="#" class="feature-btn" id="feature-2">
          <div class="icon">⚕️</div>
        </a>
        <h3 class="feature-title">Proper Care</h3>
        <p class="feature-desc">Comprehensive dental care for optimal oral health.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <a href="#" class="feature-btn" id="feature-3">
          <div class="icon">🩹</div>
        </a>
        <h3 class="feature-title">First Aid Kit</h3>
        <p class="feature-desc">Emergency dental services when you need them most.</p>
      </div>
      <div class="col-md-6">
        <a href="#" class="feature-btn active" id="feature-4">
          <div class="icon">🔧</div>
        </a>
        <h3 class="feature-title">Extraction</h3>
        <p class="feature-desc">Safe and painless tooth extraction procedures.</p>
      </div>
    </div>
  </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    </div>




<div class="promo py-5" style="background: linear-gradient(to bottom, #ffffff, #ffffff);">
  <div class="container text-center">
    <span class="d-block h3 mb-3 font-weight-bold text-black">Promo For Tooth Cleaning from <del> ₹2000</del> now <strong class="font-weight-bold text-balck">₹1000</strong></span>
    <div id="date-countdown" class="mt-0 text-black" data-countdown="<?php echo $promo_end_date; ?>"></div>
    
    <?php
    // Calculate days remaining for promo
    $today = new DateTime();
    $end_date = new DateTime($promo_end_date);
    $days_remaining = $today->diff($end_date)->days;
    
    if ($days_remaining > 0) {
        echo "<p class='text-black mt-2'>Hurry! Only $days_remaining days remaining!</p>";
    }
    ?>
  </div>
</div>

    
<footer class="site-footer" style="background: linear-gradient(to bottom, #a40c0c, #000000);">

<div class="container">
  <div class="row">
    
    <div class="col-lg-4 mx-auto">
      <h2 class="footer-heading mb-4">Quick Links</h2>
      <ul class="list-unstyled">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="feedback.php">Feedback</a></li>
      </ul>
    </div>
    <div class="col-lg-4">
      <h2 class="footer-heading mb-4">Connect With Us</h2>
      <div class="social-links">
        <a href="https://www.instagram.com/moderndentalclinicphagwara?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="instagram"><span class="icon-instagram"></span></a>
      </div>
      <div class="mt-4">
        <p class="mb-2"><span class="icon-room mr-2"></span>Bhikhiwind</p>
        <p class="mb-2"><span class="icon-phone mr-2"></span>79862-16497</p>
        <p class="mb-2"><span class="icon-envelope mr-2"></span>bhikhiwinddentalclinic@gmail.com</p>
      </div>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-md-12">
      <div class="border-top pt-5">
      Copyright &copy; <?php echo $current_year; ?> All rights reserved to <a>Tooth&Tech</a>

      </div>
    </div>
  </div>
</div>
</footer>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>
  
  <?php if ($success_message || $error_message): ?>
  <script>
    // Automatically hide notifications after 5 seconds
    setTimeout(function() {
      var notifications = document.getElementsByClassName('notification');
      for (var i = 0; i < notifications.length; i++) {
        notifications[i].style.display = 'none';
      }
    }, 5000);
  </script>
  <?php endif; ?>
    
  </body>
</html>