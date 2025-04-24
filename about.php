<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Modern Dental Clinic</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link data-vue-tag="ssr" rel="icon" type="image/png" sizes="96x96" >

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
<link data-vue-tag="ssr" rel="icon" type="image/png" sizes="96x96" >
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/freefront.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link rel="stylesheet" href="css/aos.css">
    <script src="js/frontend.js"></script>
    <link rel="stylesheet" href="css/style.css">
    
    
    <style>
      @import url('https://fonts.googleapis.com/css?family=Archivo+Black');
      :root {
  /* Primary Firebase colors */
  --firebase-yellow: #FFCA28;
  --firebase-amber: #FFA000;
  --firebase-dark-blue: #2C384A;
  --firebase-darker-blue: #1E2737;
  
  /* Text colors */
  --text-light: #FFFFFF;
  --text-secondary: #B0BEC5;
  
  /* Accent colors */
  --accent-red: #FF5252;
  --accent-green: #00C853;
  --accent-blue: #2196F3;
}

body {
  background-color: var(--firebase-darker-blue);
  color: var(--text-light);
  font-family: 'Roboto', sans-serif;
}

.header {
  background-color: var(--firebase-dark-blue);
}

.primary-button {
  background-color: var(--firebase-yellow);
  color: #333333;
  border: none;
  padding: 10px 16px;
  border-radius: 4px;
  font-weight: 500;
  transition: background-color 0.3s ease;
}
.dental-team-section {
    position: relative;
    overflow: hidden;
  }
  
  .video-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
    overflow: hidden;
  }
  
  .video-background video {
    position: absolute;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    object-fit: cover;
  }
  
  /* Make sure content appears on top of the video */
  .container {
    position: relative;
    z-index: 1;
  }
.primary-button:hover {
  background-color: var(--firebase-amber);
}
.gradient-header {
  background: linear-gradient(135deg, var(--firebase-dark-blue) 0%, var(--firebase-darker-blue) 100%);
}

.card {
  background-color: rgba(255, 255, 255, 0.05);
  border-radius: 8px;
  backdrop-filter: blur(10px);
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
}
      .dental-team-section {
        background: linear-gradient(to top, #a5fbee, #5dbfdf);
        padding: 60px 0;
      }
      
      .cards-wrapper {
        position: relative;
        list-style: none;
        margin: 0;
        padding: 40px 5%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        width: 100%;
      }
      
      .card-wrapper {
        display: block;
        position: relative;
        margin: 0 1.5% 30px;
        width: 28%;
        height: 400px;
        perspective: 1000px;
      }
      
      .card-object {
        position: absolute;
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
        transition: transform 0.8s cubic-bezier(0.680, -0.550, 0.265, 1.550);
      }
      
      .card-object.flipped {
        transform: rotateY(180deg);
      }
      
      .face {
        color: #fff;
        text-decoration: none;
        display: flex;
        justify-content: center;
        align-items: flex-end;
        flex-wrap: wrap;
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        cursor: pointer;
      }
      
      .face.front {
        z-index: 20;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
      }
      
      .face.front::before {
        position: absolute;
        top: -1px;
        right: -1px;
        bottom: -1px;
        left: -1px;
        content: "";
        background: linear-gradient(45deg, rgba(0, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0.5) 40%, rgba(0, 0, 0, 0.1) 100%) no-repeat;
        opacity: .7;
        z-index: 20;
        transition: opacity .2s ease;
      }
      
      .face.front::after {
        position: absolute;
        top: 7%;
        right: 7%;
        bottom: 7%;
        left: 7%;
        border: 1px solid rgba(255, 255, 255, 0.35);
        z-index: 100;
        content: "";
      }
      
      .face.front .title-wrapper {
        position: absolute;
        bottom: 10%;
        left: 10%;
        right: 10%;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        flex-wrap: wrap;
        z-index: 100;
        transition: transform .28s ease;
      }
      
      .face.front .title-wrapper .title {
        position: relative;
        font-family: 'Archivo Black', sans-serif;
        width: 100%;
        text-transform: uppercase;
        font-size: 22px;
        line-height: 1.2;
        opacity: .9;
        margin-bottom: 10px;
      }
      
      .face.front .title-wrapper .subtitle {
        font-size: 14px;
        line-height: 1.2;
        letter-spacing: 1px;
        text-transform: uppercase;
        opacity: 0.8;
      }
      
      .face.front:hover::before {
        opacity: .8;
      }
      
      .face.back {
        color: #222;
        background: #fff;
        z-index: 10;
        transform: rotateY(180deg);
      }
      
      .img-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 40%;
        z-index: 10;
      }
      
      .img-wrapper::after {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(14, 6, 70, 0.6);
        opacity: .7;
      }
      
      .avatar {
        position: absolute;
        left: 50%;
        height: 80px;
        width: 80px;
        display: block;
        border-radius: 50%;
        margin-top: 25%;
        margin-left: -40px;
        background-color: #fff;
        border: 3px solid #FFF;
        z-index: 20;
        background-size: cover;
        background-position: center;
      }
      
      .info-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        position: absolute;
        top: 48%;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 15px;
      }
      
      .info-title {
        font-size: 20px;
        font-family: 'Archivo Black', sans-serif;
        text-align: center;
        padding: 0;
        margin: 20px 0 0;
        display: block;
        width: 100%;
      }
      
      .info-content {
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
        width: 100%;
        padding: 20px 0 0;
        margin: 15px 0 0;
        border-top: 1px solid #e0e0e0;
        list-style-type: none;
      }
      
      .info-content-item {
        color: #222;
        font-size: 12px;
        line-height: 1.2;
        text-align: center;
        display: block;
        padding: 0;
        margin: 5px;
        text-transform: uppercase;
        color: #aaa;
      }
      
      .info-content-item span {
        display: block;
        font-weight: bold;
        font-size: 14px;
        margin-top: 5px;
        text-transform: none;
        color: #222;
      }
      
      @media (max-width: 991px) {
        .card-wrapper {
          width: 80%;
          height: 400px;
          margin: 0 auto 30px;
        }
      }
      
      @media (max-width: 576px) {
        .card-wrapper {
          width: 90%;
          height: 350px;
        }
      }
    </style>
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle">79862-16497</span>
        </div>
      </div>
      <div class="site-mobile-menu-body">bhikhiwinddentalclinic@gmail.com</div>
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
              <h4 class="mb-0 site-logo"><a href="index.html">Dental Clinic Bhikhiwind</a></h4>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                    
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="about.php">About Us</a></li>
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

<div class="site-blocks-cover inner-page" style="background-image: url(images/omm.jpg); background-size: cover; background-position: center; height: 100vh;" data-aos="fade" data-stellar-background-ratio="0.5" class="img-fluid">     
    
  <div class="container">
        <div class="row align-items-center ">
          <div class="col-md-22 text-right  ">
           
           <h1 class="text-left d-none d-md-block"><strong>About</strong> Us</h1>
<h2 class="text-left d-block d-md-none " style ="text-shadow: 2px 2px 4px #000000"><strong>About</strong> Us</h2>
<p class="text-white text-shadow: 4px 4px px #000000 font-family: times new roman " style="text-align: left; width: 100%; max-width: 50%; margin-left: 0;text-shadow: 4px 4px 4px #000000;">Established in 1992, our Dental Clinic Bhikhiwind has been committed to providing high-quality dental care to our patients for over three decades. We offer a wide range of services </p>    
</div>


        </div>
      </div>
    </div>  
   
    </div>
    <div class="site-section dental-team-section">
      <div class="video-background">
        <video autoplay muted loop playsinline>
          <source src="images/bgm.mp4" type="video/mp4">
        </video>
        </div>
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h2 class="site-heading text-black mb-5">A Team of <strong>Dedicated Dentists</strong></h2>
          </div>
        </div>
        
        <div class="cards-wrapper">
          <!-- Card 1 -->
          <div class="card-wrapper">
            <div class="card-object" id="card-1">
              <div class="face front" style="background-image: url('images/user.jpg');">
                <div class="title-wrapper">
                  <div class="title">Dr. Amarjeet Singh Riar</div>
                  <div class="subtitle">Oral and Maxillofacial Surgeon (MDS)</div>
                </div>
              </div>
              <div class="face back">
                <div class="img-wrapper" style="background-image: url('images/user.jpg'); background-size: cover; background-position: center;"></div>
                <div class="avatar" style="background-image: url('images/user.jpg');"></div>
                <div class="info-wrapper">
                  <div class="info-title">Dr. Amarjeet Singh Riar</div>
                  <ul class="info-content">
                    <li class="info-content-item">Specialty <span>Maxillofacial</span></li>
                    <li class="info-content-item">Degree <span>MDS</span></li>
                    <li class="info-content-item">Experience <span>15+ Years</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Card 2 -->
          <div class="card-wrapper">
            <div class="card-object" id="card-2">
              <div class="face front" style="background-image: url('images/user.jpg');">
                <div class="title-wrapper">
                  <div class="title">Dr. Simranjeet Singh Riar</div>
                  <div class="subtitle">Dental Surgeon</div>
                </div>
              </div>
              <div class="face back">
                <div class="img-wrapper" style="background-image: url('images/user.jpg'); background-size: cover; background-position: center;"></div>
                <div class="avatar" style="background-image: url('images/user.jpg');"></div>
                <div class="info-wrapper">
                  <div class="info-title">Dr. Simranjeet Singh Riar</div>
                  <ul class="info-content">
                    <li class="info-content-item">Specialty <span>Dental Surgery</span></li>
                    <li class="info-content-item">Degree <span>BDS</span></li>
                    <li class="info-content-item">Experience <span>8+ Years</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Card 3 -->
          <div class="card-wrapper">
            <div class="card-object" id="card-3">
              <div class="face front" style="background-image: url('images/user.jpg');">
                <div class="title-wrapper">
                  <div class="title">Dr. Parminder Kaur Riar</div>
                  <div class="subtitle">Dental Surgeon</div>
                </div>
              </div>
              <div class="face back">
                <div class="img-wrapper" style="background-image: url('images/user.jpg'); background-size: cover; background-position: center;"></div>
                <div class="avatar" style="background-image: url('images/user.jpg');"></div>
                <div class="info-wrapper">
                  <div class="info-title">Dr. Parminder Kaur Riar</div>
                  <ul class="info-content">
                    <li class="info-content-item">Specialty <span>Dental Surgery</span></li>
                    <li class="info-content-item">Degree <span>BDS</span></li>
                    <li class="info-content-item">Experience <span>7+ Years</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
 
    
 <div class="promo py-5" style="background: linear-gradient(to bottom,rgb(157, 209, 234),#ffffff);">
  <div class="container text-center">
    <span class="d-block h3 mb-3 font-weight-bold text-black">Promo For Extraction from <del> ₹2000</del> now <strong class="font-weight-bold text-black">₹1500</strong></span>
    <div id="date-countdown" class="mt-0 text-black" data-countdown="2025/04/23"></div>
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
        <p>Copyright  © 2025 All rights reserved to <a>Tooth&Tech</a></p>

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
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Get all card objects
      const cards = document.querySelectorAll('.card-object');
      
      // Add click event listeners to each card
      cards.forEach(card => {
        card.addEventListener('click', function() {
          this.classList.toggle('flipped');
        });
      });
    });
  </script>
  </body>
</html>