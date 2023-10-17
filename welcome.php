<?php 
include_once("php/koneksi.php");
include_once("php/fungsi.php");
?>

<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Portofolio Badudu - Welcome</title>

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
    <div class="pt-tablecell page-welcome relative">
      <!-- .close -->
      <a href="./" class="page-close"><i class="tf-ion-close"></i></a>
      <!-- /.close -->

      <div class="author-image-large">
        <img src="images/nabielwelcome1.png " alt="">
      </div>

      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-6 col-lg-7">
            <div class="page-title">
              <h2><?php echo ambil_namaDepan(1) ?> <span class="primary"><?php echo ambil_namaBelakang(1)?> </span> <span class="title-bg">About</span></h2>
              <p><?php echo ambil_deskripsiSingkat(1)?></p>
            </div>
          </div>
        </div> <!-- /.row -->
      </div> <!-- /.container -->

      <nav class="page-nav clear">
  <div class="container">
    <div class="flex flex-middle space-between">
      <span class="prev-page"><a href="index.php" class="link">&larr; Prev Page</a></span>
      <span class="next-page"><a href="about.php" class="link">Next Page &rarr;</a></span>
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