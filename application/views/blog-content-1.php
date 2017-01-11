<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Wed Jan 04 2017 06:01:22 GMT+0000 (UTC)  -->
<html data-wf-page="586b1575e8c25d7a177a9b43" data-wf-site="586b1575e8c25d7a177a9b47">
<head>
  <meta charset="<?php echo base_url()?>resources/utf-8">
  <title><?= $post->title ?></title>
  <meta content="Blog Content 1" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="<?php echo base_url()?>resources/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url()?>resources/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url()?>resources/css/edwin-prasetyo-website-5efc92dbf3dbaa05.webflow.css" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url()?>resources/js/modernizr.js" type="text/javascript"></script>
  <link href="<?php echo base_url()?>resources/images/edwin-fav-32.png" rel="shortcut icon" type="image/x-icon">
  <link href="<?php echo base_url()?>resources/images/edwin-fav-256.png" rel="apple-touch-icon">
</head>
<body>
  <div class="navbar w-nav" data-animation="over-left" data-collapse="all" data-duration="400">
    <div class="w-container">
      <a class="navbarlogo w-nav-brand" href="<?php echo base_url()?>resources/index.html"><img src="<?php echo base_url()?>resources/images/EdwinLogo_1.png" width="87">
      </a>
      <nav class="openmenu w-nav-menu" role="navigation">
        <a class="btnclose w-inline-block" data-ix="new-interaction" href="#"></a>
        <h1 class="edwinmenu">Edwin<br>Prasetyo</h1><img class="reddivbar" src="<?php echo base_url()?>resources/images/barmerah-33.png"><a class="navlink w-nav-link" href="<?php echo base_url()?>about">About</a><a class="navlink w-nav-link" href="<?php echo base_url()?>blog">Blog</a><a class="navlink w-nav-link" href="<?php echo base_url()?>contact">Contact</a>
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
      <h1 class="about header txt-tradingonline"><?php echo $post->title ?></h1>
      <p class="parabout"><?php echo $post->date?></p>
      <p class="descblog parabout"><?php echo $post->caption ?></p>
      <div class="divgarismerah"><img src="<?php echo base_url()?>resources/images/garismerah-33.png" width="108">
      </div>
      <div class="par-text-about w-row">
        <div class="w-col w-col-6">
          <?php if($post->url_image != ""){ ?>
          <img src="<?php echo base_url()?>resources/images/<?php echo $post->url_image?>">
          <?php } ?>
        </div>
        <div class="w-col w-col-6">
          <p class="partextleft"><?php echo $post->post ?></p>
          <div class="divpage">
            <a class="btnprev w-inline-block" href="#"></a><a class="btnpage w-inline-block" href="#"><h3 class="page-number">1</h3></a><a class="btnpage w-inline-block" href="#"><h3 class="page-number">2</h3></a><a class="btnpage w-inline-block" href="#"><h3 class="page-number">3</h3></a><a class="btnpage w-inline-block" href="#"><h3 class="h4 page-number">4</h3></a><a class="btnpage w-inline-block" href="#"><h3 class="page-number">...</h3></a><a class="btnpage w-inline-block" href="#"><h3 class="page-number">10</h3></a>
            <a class="btnnext btnprev w-inline-block" href="#"></a>
          </div>
          <a class="btnback w-inline-block" href="<?php echo base_url()?>blog"></a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-section">
    <div class="footer-container w-container">
      <div class="w-row">
        <div class="w-clearfix w-col w-col-8"><img class="logo moblogo" src="<?php echo base_url()?>resources/images/EdwinLogo_2.png" width="91"><img class="tandatangan" sizes="(max-width: 479px) 100vw, (max-width: 767px) 142px, 235px" src="<?php echo base_url()?>resources/images/EdwinLogo_3.png" srcset="<?php echo base_url()?>resources/images/EdwinLogo_3-p-500x87.png 500w, images/EdwinLogo_3.png 528w" width="258">
          <div class="divsosmed w-clearfix">
            <a class="linkinstagram w-inline-block" href="#"><img src="<?php echo base_url()?>resources/images/icon5.png" width="27.5">
            </a>
            <a class="linkinstagram w-inline-block" href="#"><img src="<?php echo base_url()?>resources/images/icon6.png" width="27.5">
            </a>
            <a class="linkinstagram w-inline-block" href="#"><img src="<?php echo base_url()?>resources/images/icon7.png" width="27.5">
            </a>
          </div>
        </div>
        <div class="w-col w-col-4">
          <div class="divtelp"><img class="phoneicon" src="<?php echo base_url()?>resources/images/icon8.png" width="22">
            <div class="phonetext">(+6281) 7778899</div>
          </div>
          <div class="divemail"><img class="emailico" src="<?php echo base_url()?>resources/images/icon9.png" width="26">
            <div class="email phonetext">edwinprasetyo@gmail.com</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url()?>resources/js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="<?php echo base_url()?>resources/https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
