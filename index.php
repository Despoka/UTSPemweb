<?php 
include_once("php/koneksi.php");
include_once("php/fungsi.php");
?>

<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Portofolio Badudu</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Portfolio HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Html5 Portfolio Template v1.0">
  
  <!-- theme meta -->
  <meta name="theme-name" content="phantom" />

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
    <div class="pt-tablecell page-home relative" style="background-image: url('images/banner.jpg');">
      <div class="overlay"></div>

      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
            <div class="page-title home text-center">
              <img src="images/nabielmask.png" alt="">
              <p><?php echo ambil_bioHome(1) ?> </p>
            </div>

            <div class="hexagon-menu clear">
              <div class="hexagon-item">
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <a href="welcome.php" class="hex-content">
                  <span class="hex-content-inner">
                    <span class="icon">
                      <i class="tf-dial"></i>
                    </span>
                    <span class="title">Welcome</span>
                  </span>
                  <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z"
                      fill="#1e2530"></path>
                  </svg>
                </a>
              </div>
              <div class="hexagon-item">
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <a href="about.php" class="hex-content">
                  <span class="hex-content-inner">
                    <span class="icon">
                      <i class="tf-profile-male"></i>
                    </span>
                    <span class="title">About</span>
                  </span>
                  <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
                  </svg>
                </a>
              </div>
              <div class="hexagon-item">
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <a href="services.php" class="hex-content">
                  <span class="hex-content-inner">
                    <span class="icon">
                      <i class="tf-tools-2"></i>
                    </span>
                    <span class="title">Services</span>
                  </span>
                  <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
                  </svg>
                </a>
              </div>
              <div class="hexagon-item">
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <a href="resume.php" class="hex-content">
                  <span class="hex-content-inner">
                    <span class="icon">
                      <i class="tf-tools"></i>
                    </span>
                    <span class="title">Resume</span>
                  </span>
                  <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
                  </svg>
                </a>
              </div>
              <div class="hexagon-item">
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <a href="works.php" class="hex-content">
                  <span class="hex-content-inner">
                    <span class="icon">
                      <i class="tf-briefcase2"></i>
                    </span>
                    <span class="title">Works</span>
                  </span>
                  <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
                  </svg>
                </a>
              </div>
              <div class="hexagon-item">
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <a href="testimonials.php" class="hex-content">
                  <span class="hex-content-inner">
                    <span class="icon">
                      <i class="tf-chat"></i>
                    </span>
                    <span class="title">Testimonials</span>
                  </span>
                  <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
                  </svg>
                </a>
              </div>
              <div class="hexagon-item">
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <a href="contact.php" class="hex-content">
                  <span class="hex-content-inner">
                    <span class="icon">
                      <i class="tf-envelope2"></i>
                    </span>
                    <span class="title">Contact</span>
                  </span>
                  <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
                  </svg>
                </a>
              </div>
            </div> <!-- /.hexagon-menu -->

          </div> <!-- /.col-xs-12 -->

        </div> <!-- /.row -->
      </div> <!-- /.container -->

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
<script src="/js/script.js"></script>

</body>
</html>
