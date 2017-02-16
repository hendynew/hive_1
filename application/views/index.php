<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Thu Feb 09 2017 02:57:05 GMT+0000 (UTC)  -->
<html data-wf-page="589aefd8d90fbc9f3bf70b27" data-wf-site="589aefd8d90fbc9f3bf70b30">
<head>
  <meta charset="utf-8">
  <title>Edwin Prasetyo</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="<?=base_url()?>resources/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="<?=base_url()?>resources/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="<?=base_url()?>resources/css/edwin-prasetyo-website-5e-1e1f6ac694fa6.webflow.css" rel="stylesheet" type="text/css">
  <script src="<?=base_url()?>resources/js/modernizr.js" type="text/javascript"></script>
  <link href="<?=base_url()?>resources/images/edwin-fav-32.png" rel="shortcut icon" type="image/x-icon">
  <link href="<?=base_url()?>resources/images/edwin-fav-256.png" rel="apple-touch-icon">
</head>
<body>
  <div class="navbar w-nav" data-animation="over-left" data-collapse="all" data-duration="400">
    <div class="w-container">
      <a class="navbarlogo w-nav-brand" href="<?=base_url()?>"><img src="<?=base_url()?>resources/images/EdwonLogo_4.png" width="87">
      </a>
      <nav class="openmenu w-nav-menu" data-ix="new-interaction" role="navigation">
        <a class="btnclose w-inline-block" data-ix="close-menu-bar" href="#"></a>
        <h2 class="edwinmenu">Edwin<br>Prasetyo</h2><img class="reddivbar" src="<?=base_url()?>resources/images/barmerah-33.png"><a class="navlink w-nav-link" href="about">About</a><a class="navlink w-nav-link" href="videos">Videos</a><a class="navlink w-nav-link" href="blog">Blog</a><a class="forum navlink w-nav-link" href="blog">Forum</a><a class="navlink w-nav-link" href="contact">Contact</a>
      </nav>
      <div class="menubtn w-nav-button">
        <div class="iconstyle w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="herosection">
    <div class="bgvid w-background-video" data-autoplay="data-autoplay" data-loop="data-loop" data-poster-url="https://daks2k3a4ib2z.cloudfront.net/589aefd8d90fbc9f3bf70b30/589bda3b26e3bc615f488dc2_BGedwin-poster-00001.jpg" data-video-urls="<?=base_url()?>uploads/<?= $home->url_video_hero ?>" data-wf-ignore="data-wf-ignore"></div>
  </div>
  <div class="sec-pentingnya">
    <div class="div-red-divider"><img sizes="100vw" src="<?=base_url()?>resources/images/bar1-25.png" srcset="<?=base_url()?>resources/images/bar1-25-p-500x23.png 500w, <?=base_url()?>resources/images/bar1-25-p-800x36.png 800w, <?=base_url()?>resources/images/bar1-25-p-1080x49.png 1080w, <?=base_url()?>resources/images/bar1-25-p-1600x72.png 1600w, <?=base_url()?>resources/images/bar1-25-p-2000x90.png 2000w, <?=base_url()?>resources/images/bar1-25-p-2600x116.png 2600w, <?=base_url()?>resources/images/bar1-25-p-3200x143.png 3200w, <?=base_url()?>resources/images/bar1-25.png 3992w" width="1996">
    </div>
    <div class="rowpentingnya w-row">
      <div class="pentingnyacolleft w-col w-col-6"></div>
      <div class="coltext-pentingnya w-col w-col-6">
        <h3 class="txt-pentingnya"><?= $home->title ?></h3>
        <h1 class="txt-tradingonline"><?= $home->title2 ?></h1><img class="garismerahtrading" sizes="(max-width: 479px) 100vw, (max-width: 767px) 65vw, (max-width: 991px) 33vw, 32vw" src="<?=base_url()?>resources/images/garismerah-29.png" srcset="<?=base_url()?>resources/images/garismerah-29-p-500x32.png 500w, <?=base_url()?>resources/images/garismerah-29.png 626w" width="391">
        <p class="paragraph-trading-online"><?= $home->content ?></p>
      </div>
    </div>
  </div>
  <div class="sectionkeunggulan">
    <div class="w-container">
      <h2 class="textkeunggulan"><?= $home->title3 ?></h2>
      <div class="rowkeunggulan w-row">
        <?php foreach($home_content_2 as $c2){?>
          <div class="colkeunggulan w-clearfix w-col w-col-3 w-col-medium-6 w-col-small-6"><img src="<?php echo base_url("uploads/") ?><?=$c2->url_image?>" width="52">
            <h5 class="headerkeunggulan"><?= $c2->title ?></h5>
            <p class="penjelasan-keunggulan"><?= $c2->content ?></p><img class="gariskeunggulan kebebasan w-hidden-tiny" src="<?php echo base_url("resources/") ?>images/gariskeunggulan-30.jpg" width="1.5">
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="sec-inginbertrading">
    <div class="cont-trade w-container">
      <h2 class="ingiinmob ingin">Ingin Bertrading Bersama Edwin?</h2>
      <a class="button_askedwin mob w-inline-block" href="contact"></a>
    </div>
  </div>
  <div class="sectionkeunggulan">
    <div class="w-container">
      <h2 class="txt-tradingonline vid">VIDEOS</h2>
      <h2 class="textkeunggulan vid">ONLINE TRADING : GAMBLING VS TRADING</h2>
      <div class="div-vidhome">
        <div class="video w-embed w-video" style="padding-top: 56.17021276595745%;">
          <iframe class="embedly-embed" src="https://www.youtube.com/embed/<?= $home->url_video?>" scrolling="no" frameborder="0" allowfullscreen=""></iframe>
        </div>
        <a class="btnseemore w-inline-block" href="videos"></a>
      </div>
    </div>
  </div>
  <div class="sec-stayupdated">
    <div class="contcontact w-container">
      <h1 class="stay textkeunggulan">STAY UPDATED</h1>
      <p class="staytext w-hidden-tiny">Sign up for our newsletter to get the latest news,
        <br>announcements, special offers and event information</p>
      <p class="staytext w-hidden-main w-hidden-medium w-hidden-small">Sign up for our newsletter to
        <br>get the latest news,
        <br>announcements, special offers
        <br>and event information</p>
      <div class="w-form">
        <form class="form" data-name="Email Form" id="email-form" name="email-form">
          <input class="textfield w-input" data-name="Email" id="Email-2" maxlength="256" name="Email" placeholder="Type Your Email" required="required" type="email">
        </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form</div>
        </div>
      </div>
      <div class="divsumbit">
        <a id="subscribe" class="submit-button w-inline-block"></a>
      </div>
    </div>
  </div>
  <?php include("include/footer-edwin.php"); ?>
</body>
</html>