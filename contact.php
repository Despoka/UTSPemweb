<?php 
include_once("php/koneksi.php");
include_once("php/fungsi.php");
?>

<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Portofolio Badudu - Contact</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Portfolio HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Html5 Portfolio Template v1.0">

  <!-- Essential Stylesheets -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i|Open+Sans:400,600,700,800">
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/animate.css">
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <link rel="stylesheet" href="plugins/themefisher-fonts/css/themefisher-fonts.min.css">  

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
  
  <!-- Theme Stylesheet -->
  <link rel="stylesheet" href="#" id="color-changer">
  
  <!--Favicon-->
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>
<body><!-- set class="dark" on body tag for DARK-THEME -->

  <div class="preloader">
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
  </div>

  <div class="preview-wrapper">
    <div class="switcher-head">
      <span>Style Switcher</span>
      <div class="switcher-trigger tf-tools"></div>
    </div>

    <div class="switcher-body">
      <h4>Choose Color:</h4>
      <ul class="color-options list-none">
        <li class="c0" data-color="red" title="Default">Default</li>
        <li class="c1" data-color="blue" title="Red">Red</li>
        <li class="c2" data-color="green" title="Green">Green</li>
        <li class="c3" data-color="yellow" title="Blue">Blue</li>
      </ul>
    </div>
  </div>

  <main class="site-wrapper">
    <div class="pt-table">
      <div class="pt-tablecell page-contact relative">
        <!-- .close -->
        <a href="./" class="page-close"><i class="tf-ion-close"></i></a>
        <!-- /.close -->

        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
              <div class="page-title text-center">
                <h2>Get in <span class="primary">touch</span> <span class="title-bg">Contact</span></h2>
                <p>These are my contact</p>
              </div>
            </div>
          </div> <!-- /.row -->

          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
              <div class="contact-block">
                <div class="media">
                  <div class="media-left">
                    <i class="tf-envelope2"></i>
                  </div>
                  <div class="media-body">
                    <h4>Email</h4>
                    <p><a href="mailto:nbilfrz0412@gmail.com"><?php echo ambil_namaEmail(1)?></a></p>
                  </div>
                </div>
              </div>
              <!-- /.contact-block -->
              <div class="contact-block">
                <div class="media">
                  <div class="media-left">
                    <i class="tf-phone2"></i>
                  </div>
                  <div class="media-body">
                    <h4>Phone</h4>
                    <p><a href="tel:+62851-5544-8172"><?php echo ambil_nomorHP(1)?></a></p>
                  </div>
                </div>
              </div>
              <!-- /.contact-block -->
              <div class="contact-block">
                <div class="media">
                  <div class="media-left">
                    <i class="tf-mobile"></i>
                  </div>
                  <div class="media-body">
                    <h4>Instagram</h4>
                    <p><a href="https://www.instagram.com/nbilfrz"><?php echo ambil_usernameIG(1)?></a></p>
                  </div>
                </div>
              </div>
              <!-- /.contact-block -->

              <ul class="contact-social">
                <li>
                  <span class="contact-social-hex"></span>
                  <a href="https://www.facebook.com/Despoka/"><i class="tf-ion-social-facebook"></i></a>
                </li>
                <li>
                  <span class="contact-social-hex"></span>
                  <a href="https://twitter.com/nbilfrz"><i class="tf-ion-social-twitter"></i></a>
                </li>
                <li>
                  <span class="contact-social-hex"></span>
                  <a href="mailto:nbilfrz0412@gmail.com"><i class="tf-ion-social-google"></i></a>
                </li>
                <li>
                  <span class="contact-social-hex"></span>
                  <a href="https://www.linkedin.com/in/nabielfauzan/"><i class="tf-ion-social-dribbble"></i></a>
                </li>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-md-offset-1 col-lg-offset-2">
              <div class="section-title clear">
                <h3>Send me a meesage</h3>
                <span class="bar-dark"></span>
                <span class="bar-primary"></span>
              </div>

              <form id="contact-form" class="row contact-form no-gutter" action="php/proses_kontak.php" method="post">
                <div class="col-xs-12 col-sm-6">
                  <div class="input-field name">
                    <span class="input-icon" id="name"><i class="tf-profile-male"></i></span>
                    <input type="text" class="form-control" placeholder="Enter your name" required>
                  </div>
                </div> <!-- ./col- -->
                <div class="col-xs-12 col-sm-6">
                  <div class="input-field email">
                    <span class="input-icon" id="email"><i class="tf-envelope2"></i></span>
                    <input type="email" class="form-control" name="email" placeholder="Your email address" required>
                  </div>
                </div> <!-- ./col- -->
                <div class="col-xs-12 col-sm-12">
                  <div class="input-field">
                    <span class="input-icon" id="subject"><i class="tf-pricetags"></i></span>
                    <input type="text" class="form-control" name="subject" placeholder="Enter the discussion title" required>
                  </div>
                </div> <!-- ./col- -->
                <div class="col-xs-12 col-sm-12">
                  <div class="input-field message">
                    <span class="input-icon"><i class="tf-pencil2"></i></span>
                    <textarea name="message" id="message" class="form-control"
                      placeholder="Write your message" required></textarea>
                  </div>
                </div> <!-- ./col- -->
                <div class="col-xs-12 col-sm-12">
                  <div class="input-field">
                    <span class="btn-border">
                      <button type="submit" class="btn btn-primary btn-custom-border text-uppercase">Send Message
                        now</button>
                    </span>
                  </div>
                  <div class="msg-success">Your Message was sent successfully</div>
                  <div class="msg-failed">Something went wrong, please try again later</div>
                </div> <!-- ./col- -->
              </form> <!-- /.row -->
            </div> <!-- /.col- -->
          </div> <!-- /.row -->
        </div> <!-- /.container -->

        <nav class="page-nav clear">
          <div class="container">
            <div class="flex flex-middle space-between">
              <span class="prev-page"><a href="testimonials.php" class="link">&larr; Prev Page</a></span>
            </div>
          </div>
          <!-- /.page-nav -->
        </nav>
        
        <!-- /.container -->

      </div> <!-- /.pt-tablecell -->
    </div> <!-- /.pt-table -->
  </main> <!-- /.site-wrapper -->
  

<!-- 
Essential Scripts
=====================================-->
<script src="plugins/jquery-2.2.4.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/jquery.nicescroll.min.js"></script>
<script src="plugins/isotope/isotope.pkgd.min.js"></script>
<script src="plugins/slick/slick.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>