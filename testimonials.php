<?php 
include_once("php/koneksi.php");
include_once("php/fungsi.php");
?>

<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Portofolio Badudu - Testimonials</title>

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
    <div class="pt-tablecell page-quotes relative">
      <!-- .close -->
      <a href="./" class="page-close"><i class="tf-ion-close"></i></a>
      <!-- /.close -->

      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
            <div class="page-title text-center">
              <h2>My <span class="primary">clients</span><span class="title-bg">Speech</span></h2>
              <p>These are the reviews of what my clients have of me.</p>
            </div>
          </div>
        </div> <!-- /.row -->

        <div class="row">
          <div class="col-xs-12">
            <div class="testimonials">
              <div class="item">
                <figure class="thumb">
                  <div class="tm-hex" style="background-image: url('images/tm1.jpg');">
                    <div class="hexTop"></div>
                    <div class="hexBottom"></div>
                  </div>
                  <figcaption>
                    <h4>Fadel</h4>
                    <span>Data Scientist</span>
                  </figcaption>
                </figure>
                <div class="text">
                  <p>Gatau bang mau nulis apa, lu keren pokoknya. </p>
                </div>
              </div>
              <div class="item">
                <figure class="thumb">
                  <div class="tm-hex" style="background-image: url('images/tm2.jpg');">
                    <div class="hexTop"></div>
                    <div class="hexBottom"></div>
                  </div>
                  <figcaption>
                    <h4>Ilfanza</h4>
                    <span>CEO of Sadboy</span>
                  </figcaption>
                </figure>
                <div class="text">
                  <p>Glimpse Of Us </p>
                </div>
              </div>
              <div class="item">
                <figure class="thumb">
                  <div class="tm-hex" style="background-image: url('images/tm3.jpg');">
                    <div class="hexTop"></div>
                    <div class="hexBottom"></div>
                  </div>
                  <figcaption>
                    <h4>Bonfillo</h4>
                    <span>CEO of Everything</span>
                  </figcaption>
                </figure>
                <div class="text">
                  <p>Aku punya semuanya. </p>
                </div>
              </div>
              <div class="item">
                <figure class="thumb">
                  <div class="tm-hex" style="background-image: url('images/tm4.jpg');">
                    <div class="hexTop"></div>
                    <div class="hexBottom"></div>
                  </div>
                  <figcaption>
                    <h4>Dzakwan</h4>
                    <span>Designer</span>
                  </figcaption>
                </figure>
                <div class="text">
                  <p>Desain yang bagus serta responsive membuat value service bertambah. </p>
                </div>
              </div>
              <div class="item">
                <figure class="thumb">
                  <div class="tm-hex" style="background-image: url('images/tm5.jpg');">
                    <div class="hexTop"></div>
                    <div class="hexBottom"></div>
                  </div>
                  <figcaption>
                    <h4>Abdul</h4>
                    <span>CEO of Samsung</span>
                  </figcaption>
                </figure>
                <div class="text">
                  <p>Wah websitenya bagus diliat di hp samsung. </p>
                </div>
              </div>
              <div class="item">
                <figure class="thumb">
                  <div class="tm-hex" style="background-image: url('images/tm6.jpg');">
                    <div class="hexTop"></div>
                    <div class="hexBottom"></div>
                  </div>
                  <figcaption>
                    <h4>Hilmit</h4>
                    <span>CEO of Djie Sam Soe</span>
                  </figcaption>
                </figure>
                <div class="text">
                  <p>Service yang bagus, pelangganku pada suka. </p>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- /.row -->
      </div> <!-- /.container -->

      <nav class="page-nav clear">
  <div class="container">
    <div class="flex flex-middle space-between">
      <span class="prev-page"><a href="works.php" class="link">&larr; Prev Page</a></span>
      <span class="next-page"><a href="contact.php" class="link">Next Page &rarr;</a></span>
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