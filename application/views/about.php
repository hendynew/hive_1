<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Wed Jan 04 2017 06:01:22 GMT+0000 (UTC)  -->
<html data-wf-page="586b1575e8c25d7a177a9b41" data-wf-site="586b1575e8c25d7a177a9b47">
<head>
  <meta charset="<?php echo base_url()?>/resources/utf-8">
  <title>About</title>
  <meta content="About" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="<?php echo base_url()?>/resources/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url()?>/resources/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url()?>/resources/css/edwin-prasetyo-website-5efc92dbf3dbaa05.webflow.css" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url()?>/resources/js/modernizr.js" type="text/javascript"></script>
  <link href="<?php echo base_url()?>/resources/images/edwin-fav-32.png" rel="shortcut icon" type="image/x-icon">
  <link href="<?php echo base_url()?>/resources/images/edwin-fav-256.png" rel="apple-touch-icon">
</head>
<body>
  <div class="navbar w-nav" data-animation="over-left" data-collapse="all" data-duration="400">
    <div class="w-container">
      <a class="navbarlogo w-nav-brand" href="<?php echo base_url()?>"><img src="<?php echo base_url()?>/resources/images/EdwinLogo_1.png" width="87">
      </a>
      <nav class="openmenu w-nav-menu" role="navigation">
        <a class="btnclose w-inline-block" data-ix="new-interaction" href="#"></a>
        <h1 class="edwinmenu">Edwin<br>Prasetyo</h1><img class="reddivbar" src="<?php echo base_url()?>/resources/images/barmerah-33.png"><a class="navlink w-nav-link">About</a><a class="navlink w-nav-link" href="<?php echo base_url()?>blog">Blog</a><a class="navlink w-nav-link" href="<?php echo base_url()?>contact">Contact</a>
      </nav>
      <div class="menubtn w-nav-button">
        <div class="iconstyle iconwhite w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="heroabout herosection">
    <div class="cont-heroplayvid w-container">
      <div class="div-btnplay">
        <a class="btnplay w-inline-block" href="#"></a>
      </div>
    </div>
  </div>
  <div class="sectionabout">
    <div class="container-about w-container">
      <h1 class="about header txt-tradingonline"><?=$about->title1?></h1>
      <p class="parabout"><?=$about->caption1?></p>
      <div class="divgarismerah"><img src="<?php echo base_url()?>/resources/images/garismerah-33.png" width="108">
      </div>
      <div class="par-text-about w-row">
        <div class="w-col w-col-6">
          <p class="partextleft"><?= $about->content1?></p>
        </div>
        <div class="w-col w-col-6">
          <p class="partextleft"><?= $about->content1?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="section-about-edwin">
    <div class="row-about-edwin w-row">
      <div class="w-col w-col-6">
        <div class="div-text-aboutedwin">
          <h4 class="styletext-about"><?=$about->title2?></h4>
          <h1 class="heading-edwin"><?=$about->title3?></h1><img src="<?php echo base_url()?>/resources/images/garismerah-34.png" width="114">
          <p class="par-aboutedwin"><?=$about->content2?></p>
        </div>
      </div>
      <div class="col-gambar-aboutedwin w-col w-col-6"></div>
    </div>
  </div>
  <?php include("include/footer-edwin.php") ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url()?>/resources/js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="<?php echo base_url()?>/resources/https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
