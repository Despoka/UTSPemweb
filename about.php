<?php 
include_once("php/koneksi.php");
include_once("php/fungsi.php");
?>

<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Portofolio Badudu - About</title>

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
    <div class="pt-tablecell page-about relative">
      <!-- .close -->
      <a href="./" class="page-close"><i class="tf-ion-close"></i></a>
      <!-- /.close -->

      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
            <div class="page-title text-center">
              <h2>About <span class="primary">me</span> <span class="title-bg">NABIEL</span></h2>
              <p><?php echo ambil_deskripsiPanjang(1)?></p>
            </div>
          </div>

          <div class="col-xs-12 col-md-6">
            <div class="about-author">
              <figure class="author-thumb">
                <img src="images/nabiel.jpg" alt="">
              </figure> <!-- /.author-bio -->
              <div class="author-desc">
                <p><b>Date of birth:</b> <?php echo ambil_tanggalLahir(1) ?></p>
                <p><b>Language:</b><?php echo ambil_pemahamanBahasa(1)?></p>
                <p><b>Expert in:</b><?php echo ambil_bidangKeahlian(1)?></p>
                <p><b>Freelance:</b> <?php echo ambil_ketersediaanFreelance(1)?></p>
              </div>
              <!-- /.author-desc -->
            </div> <!-- /.about-author -->
            <p><?php echo ambil_deskripsiSingkat(1)?></p>
          </div> <!-- /.col -->

          <div class="col-xs-12 col-md-6">
            <div class="section-title clear">
              <h3>Skills</h3>
            </div>
            <div class="skill-wrapper">
              <div class="progress clear">
                <div class="skill-name">Figma</div>
                <div class="skill-lavel col-xs-12" data-skill-value="Intermediate"></div>
              </div> <!-- /.progress -->
              <div class="progress clear">
                <div class="skill-name">Illustrator</div>
                <div class="skill-lavel col-xs-12" data-skill-value="Beginner"></div>
              </div> <!-- /.progress -->
              <div class="progress clear">
                <div class="skill-name">Sony Vegas</div>
                <div class="skill-lavel col-xs-12" data-skill-value="Intermediate"></div>
              </div> <!-- /.progress -->
              <div class="progress clear">
                <div class="skill-name">JS</div>
                <div class="skill-lavel col-xs-12" data-skill-value="Beginner"></div>
              </div> <!-- /.progress -->
              <div class="progress clear">
                <div class="skill-name">HTML5</div>
                <div class="skill-lavel col-xs-12" data-skill-value="Beginner"></div>
              </div> <!-- /.progress -->
            </div> <!-- /.skill-wrapper -->
          </div> <!-- /.col -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->

      <nav class="page-nav clear">
  <div class="container">
    <div class="flex flex-middle space-between">
      <span class="prev-page"><a href="welcome.php" class="link">&larr; Prev Page</a></span>
      <span class="next-page"><a href="services.php" class="link">Next Page &rarr;</a></span>
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