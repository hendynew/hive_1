<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Wed Jan 04 2017 06:01:22 GMT+0000 (UTC)  -->
<html data-wf-page="586b1575e8c25d7a177a9b44" data-wf-site="586b1575e8c25d7a177a9b47">
<head>
  <meta charset="<?= base_url()?>resources/utf-8">
  <title><?= $post->title ?></title>
  <meta content="Blog Content 2" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="<?= base_url()?>resources/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url()?>resources/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url()?>resources/css/edwin-prasetyo-website-5efc92dbf3dbaa05.webflow.css" rel="stylesheet" type="text/css">
  <script src="<?= base_url()?>resources/js/modernizr.js" type="text/javascript"></script>
  <link href="<?= base_url()?>resources/images/edwin-fav-32.png" rel="shortcut icon" type="image/x-icon">
  <link href="<?= base_url()?>resources/images/edwin-fav-256.png" rel="apple-touch-icon">
</head>
<body>
  <div class="navbar w-nav" data-animation="over-left" data-collapse="all" data-duration="400">
    <div class="w-container">
      <a class="navbarlogo w-nav-brand" href="<?= base_url()?>"><img src="<?= base_url()?>resources/images/EdwinLogo_1.png" width="87">
      </a>
      <nav class="openmenu w-nav-menu" role="navigation">
        <a class="btnclose w-inline-block" data-ix="new-interaction" href="#"></a>
        <h1 class="edwinmenu">Edwin<br>Prasetyo</h1><img class="reddivbar" src="<?= base_url()?>resources/images/barmerah-33.png"><a class="navlink w-nav-link" href="<?= base_url()?>about">About</a><a class="navlink w-nav-link" href="<?= base_url()?>blog">Blog</a><a class="navlink w-nav-link" href="<?= base_url()?>contact">Contact</a>
      </nav>
      <div class="menubtn w-nav-button">
        <div class="iconstyle w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="sectionabout">
    <div class="container-about w-container">
      <h1 class="about header txt-tradingonline"><?= $post->title?></h1>
      <p class="parabout"><?= $post->date?></p>
      <p class="descblog parabout"><?= $post->caption?></p>
      <div class="divgarismerah"><img src="<?= base_url()?>resources/images/garismerah-33.png" width="108">
      </div>
    </div>
  </div>
  <div class="sec-video-blog">
    <div class="cont-heroplayvid w-container">
      <div class="div-btnplay">
        <a class="btnplay w-inline-block" href="#"></a>
      </div>
    </div>
  </div>
  <div class="sec-blog-text">
    <div class="par-text-about w-row">
      <div class="w-col w-col-6">
        <?php
        $part1 = $post->post;
        $part2 ="";
        $div = strlen($post->post) / 2;
        if(strlen($part1) > 500){
          $part1 = substr($post->post,0,$div);
          $part2 = substr($post->post,$div);
        }
        ?>
        <p class="partextleft"><?=$part1?></p>
      </div>
      <div class="w-col w-col-6">
        <p class="partextleft"><?=$part2?></p>
        <div class="divpage">
          <?= $link ?>
        </div>
        <a class="btnback w-inline-block" href="<?= base_url()?>blog"></a>
      </div>
    </div>
  </div>
  <div class="footer-section">
    <div class="footer-container w-container">
      <div class="w-row">
        <div class="w-clearfix w-col w-col-8"><img class="logo moblogo" src="<?= base_url()?>resources/images/EdwinLogo_2.png" width="91"><img class="tandatangan" sizes="(max-width: 479px) 100vw, (max-width: 767px) 142px, 235px" src="<?= base_url()?>resources/images/EdwinLogo_3.png" srcset="<?= base_url()?>resources/images/EdwinLogo_3-p-500x87.png 500w, images/EdwinLogo_3.png 528w" width="258">
          <div class="divsosmed w-clearfix">
            <a class="linkinstagram w-inline-block" href="#"><img src="<?= base_url()?>resources/images/icon5.png" width="27.5">
            </a>
            <a class="linkinstagram w-inline-block" href="#"><img src="<?= base_url()?>resources/images/icon6.png" width="27.5">
            </a>
            <a class="linkinstagram w-inline-block" href="#"><img src="<?= base_url()?>resources/images/icon7.png" width="27.5">
            </a>
          </div>
        </div>
        <div class="w-col w-col-4">
          <div class="divtelp"><img class="phoneicon" src="<?= base_url()?>resources/images/icon8.png" width="22">
            <div class="phonetext">(+6281) 7778899</div>
          </div>
          <div class="divemail"><img class="emailico" src="<?= base_url()?>resources/images/icon9.png" width="26">
            <div class="email phonetext">edwinprasetyo@gmail.com</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url()?>resources/js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="<?= base_url()?>resources/https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
