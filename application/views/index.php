<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Wed Jan 04 2017 06:01:22 GMT+0000 (UTC)  -->
<html data-wf-page="586b1575e8c25d7a177a9b42" data-wf-site="586b1575e8c25d7a177a9b47">
<head>
  <meta charset="utf-8">
  <title>Edwin Prasetyo</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="<?php echo base_url("resources/") ?>css/normalize.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url("resources/") ?>css/webflow.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url("resources/") ?>css/edwin-prasetyo-website-5efc92dbf3dbaa05.webflow.css" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url("resources/") ?>js/modernizr.js" type="text/javascript"></script>
  <link href="<?php echo base_url("resources/") ?>images/edwin-fav-32.png" rel="shortcut icon" type="image/x-icon">
  <link href="<?php echo base_url("resources/") ?>images/edwin-fav-256.png" rel="apple-touch-icon">
</head>
<body>
  <div class="navbar w-nav" data-animation="over-left" data-collapse="all" data-duration="400">
    <div class="w-container">
      <a class="navbarlogo w-nav-brand" href="#"><img src="<?php echo base_url("resources/") ?>images/EdwinLogo_1.png" width="87">
      </a>
      <nav class="openmenu w-nav-menu" role="navigation">
        <a class="btnclose w-inline-block" data-ix="new-interaction" href="#"></a>
        <h1 class="edwinmenu">Edwin<br>Prasetyo</h1><img class="reddivbar" src="<?php echo base_url("resources/") ?>images/barmerah-33.png"><a class="navlink w-nav-link" href="<?php echo base_url("about") ?>">About</a><a class="navlink w-nav-link" href="<?php echo base_url("blog")?>">Blog</a><a class="navlink w-nav-link" href="<?php echo base_url("contact") ?>">Contact</a>
      </nav>
      <div class="menubtn w-nav-button">
        <div class="iconstyle w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="herosection w-clearfix">
    <div class="herotext w-clearfix">
      <h1 class="heroh1"><?= $home->hero ?></h1><img class="whitedivider" sizes="(max-width: 767px) 50vw, 243px" src="<?php echo base_url("resources/") ?>images/garis-26.jpg" srcset="<?php echo base_url("resources/")?>images/garis-26-p-500x14.jpeg 500w, images/garis-26.jpg 565w" width="243">
      <h1 class="from heroh1"><?= $home->hero2 ?></h1>
      <h1 class="follow heroh1"><?= $home->hero3 ?></h1><img class="whitedivider" sizes="(max-width: 479px) 50vw, 238px" src="<?php echo base_url("resources/") ?>images/garis-26.jpg" srcset="<?php echo base_url("resources/")?>images/garis-26-p-500x14.jpeg 500w, images/garis-26.jpg 565w" width="238">
      <h1 class="heroh1 none"><?= $home->hero4 ?></h1><img class="garisnama" src="<?php echo base_url("resources/") ?>images/garis-27.jpg" width="46">
      <h3 class="edwinprasetyo"><?= $home->name ?></h3>
    </div>
  </div>
  <div class="sec-pentingnya">
    <div class="div-red-divider"><img sizes="100vw" src="<?php echo base_url("resources/") ?>images/bar1-25.png" srcset="<?php echo base_url("resources/")?>images/bar1-25-p-500x23.png 500w, <?php echo base_url("resources/")?>images/bar1-25-p-800x36.png 800w, <?php echo base_url("resources/")?>images/bar1-25-p-1080x49.png 1080w, <?php echo base_url("resources/")?>images/bar1-25-p-1600x72.png 1600w, <?php echo base_url("resources/")?>images/bar1-25-p-2000x90.png 2000w, <?php echo base_url("resources/")?>images/bar1-25-p-2600x116.png 2600w, <?php echo base_url("resources/")?>images/bar1-25-p-3200x143.png 3200w, <?php echo base_url("resources/")?>images/bar1-25.png 3992w" width="1996">
    </div>
    <div class="rowpentingnya w-row">
      <div class="pentingnyacolleft w-col w-col-6"></div>
      <div class="coltext-pentingnya w-col w-col-6">
        <h3 class="txt-pentingnya"><?= $home->title ?></h3>
        <h1 class="txt-tradingonline"><?= $home->title2 ?></h1><img class="garismerahtrading" sizes="(max-width: 479px) 100vw, (max-width: 767px) 69vw, (max-width: 991px) 33vw, 32vw" src="<?php echo base_url("resources/") ?>images/garismerah-29.png" srcset="<?php echo base_url("resources/")?>images/garismerah-29-p-500x32.png 500w, <?php echo base_url("resources/")?>images/garismerah-29.png 626w" width="391">
        <p class="paragraph-trading-online"><?= $home->content ?></p>
      </div>
    </div>
  </div>
  <div class="sectionkeunggulan">
    <div class="w-container">
      <h2 class="textkeunggulan"><?= $home->title3?></h2>
      <div class="rowkeunggulan w-row">
        <?php foreach($home_content_2 as $c2){?>
          <div class="colkeunggulan w-clearfix w-col w-col-3 w-col-medium-6 w-col-small-6"><img src="<?php echo base_url("resources/") ?>images/<?=$c2->url_image?>" width="52">
            <h5 class="headerkeunggulan"><?= $c2->title ?></h5>
            <p class="penjelasan-keunggulan"><?= $c2->content ?></p><img class="gariskeunggulan kebebasan w-hidden-tiny" src="<?php echo base_url("resources/") ?>images/gariskeunggulan-30.jpg" width="1.5">
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="sec-inginbertrading">
    <div class="cont-trade w-container">
      <h2 class="ingiinmob ingin"><?= $home->title4?></h2>
      <a class="button_askedwin mob w-inline-block" href="<?php echo base_url()?>contact"></a>
    </div>
  </div>
  <div class="sec-partner">
    <div class="container-partner w-container">
      <h2 class="textkeunggulan"><?= $home->title5?></h2>
      <div class="logo-roq">
        <?php foreach($home_content_5 as $c5){?>
          <a class="logopartn w-inline-block" href="#">
            <div class="divpartner"><img class="partnerlogo" src="<?php echo base_url("resources/") ?>images/<?= $c5->url_image ?>">
            </div>
            <h4 class="sejak"><?= $c5->since?></h4>
          </a>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="sec-stayupdated">
    <div class="contcontact w-container">
      <h1 class="stay textkeunggulan"><?= $home->title6?></h1>
        <p class="staytext w-hidden-tiny"><?= $home->content6?></p>
      <p class="staytext w-hidden-main w-hidden-medium w-hidden-small"><?= $home->content6?></p>
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
        <div class="divsumbit">
          <a id="subscribe" class="submit-button w-inline-block"></a>
        </div>
      </div>
    </div>
  </div>
  <?php include("include/footer-edwin.php") ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url("resources/") ?>js/webflow.js" type="text/javascript"></script>
  <script src="<?php echo base_url("resources/") ?>js/custom.js" type="text/javascript"></script>
  <script src="<?php echo base_url("resources/") ?>js/lightslider.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="<?php echo base_url("resources/") ?>https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
