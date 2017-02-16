<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Thu Feb 09 2017 02:57:05 GMT+0000 (UTC)  -->
<html data-wf-page="589aefd8d90fbc9f3bf70b2d" data-wf-site="589aefd8d90fbc9f3bf70b30">
<head>
  <meta charset="utf-8">
  <title>About</title>
  <meta content="About" property="og:title">
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
  <?php include('include/navbar-edwin.php')?>
  <div class="sectionabout">
    <div class="container-about w-container">
      <h1 class="about header txt-tradingonline"><?= $about->title1?></h1>
      <p class="parabout"><?= $about->caption1?></p>
      <div class="divgarismerah"><img src="<?=base_url()?>resources/images/garismerah-33.png" width="108">
      </div>
      <div class="par-text-about w-row">
        <div class="w-col w-col-6">
          <p class="partextleft"><?= $about->content1 ?></p>
        </div>
        <div class="w-col w-col-6">
          <p class="partextleft"><?= $about->content2?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="section-about-edwin">
    <div class="row-about-edwin w-row">
      <div class="w-col w-col-6">
        <div class="div-text-aboutedwin">
          <h4 class="styletext-about"><?=$about->title2?></h4>
          <h1 class="heading-edwin"><?=$about->title3?></h1><img src="<?=base_url()?>resources/images/garismerah-34.png" width="114">
          <p class="par-aboutedwin"><?= $about->content3 ?></p>
          <a class="btnpartner w-inline-block" data-ix="btn-partner" href="#"></a>
        </div>
      </div>
      <div class="col-gambar-aboutedwin w-col w-col-6" style="background-image: url('<?= base_url()?>uploads/<?=$about->url_image?>');"></div>
    </div>
  </div>
  <div class="modal-wrapper" data-ix="modal-interaction">
    <div class="partner-wrapper" data-ix="close-partner">
      <div class="w-row">
        <div class="colpartnerkiri w-clearfix w-col w-col-4 w-col-small-small-stack w-col-tiny-tiny-stack">
          <h3 class="partnerhead"> <?= $home->title5?> </h3>
          <a class="btnclosemodal w-inline-block" data-ix="close-partner"></a>
        </div>
        <div class="w-col w-col-8 w-col-small-small-stack w-col-tiny-tiny-stack">
        <?php
          $counter = 0;
          foreach($partner as $p){ ?>
          <?php if($counter % 2 == 0) echo '<div class="row-logo-partner w-row">'; ?>
            <div class="collogopartner w-col w-col-6 w-col-small-6">
              <div class="divlogopartner" style="background-image:url('<?=base_url()?>uploads/<?= $p->url_image?>');">
              </div>
              <h5 class="text-sejak-partner"><?php echo $p->since; ?></h5>
            </div>
          <?php if($counter % 2 == 1) echo '</div>'; ?>
          <?php 
            $counter+=1;
          } ?>
        </div>
      </div>
    </div>
  </div>
  <?php include("include/footer-edwin.php"); ?>
</body>
</html>