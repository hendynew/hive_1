<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Thu Feb 09 2017 02:57:05 GMT+0000 (UTC)  -->
<html data-wf-page="589aefd8d90fbc9f3bf70b29" data-wf-site="589aefd8d90fbc9f3bf70b30">
<head>
  <meta charset="utf-8">
  <title>Videos</title>
  <meta content="Videos" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="<?=base_url('resources/')?>css/normalize.css" rel="stylesheet" type="text/css">
  <link href="<?=base_url('resources/')?>css/webflow.css" rel="stylesheet" type="text/css">
  <link href="<?=base_url('resources/')?>css/custom.css" rel="stylesheet" type="text/css">
  <link href="<?=base_url('resources/')?>css/edwin-prasetyo-website-5e-1e1f6ac694fa6.webflow.css" rel="stylesheet" type="text/css">
  <script src="<?=base_url('resources/')?>js/modernizr.js" type="text/javascript"></script>
  <link href="<?=base_url('resources/')?>images/edwin-fav-32.png" rel="shortcut icon" type="image/x-icon">
  <link href="<?=base_url('resources/')?>images/edwin-fav-256.png" rel="apple-touch-icon">
</head>
<body>
  <?php include('include/navbar-edwin.php')?>
  <div class="section-blog-post">
    <div class="contblog w-container">
      <h1 class="txt-tradingonline videos"><?= $page->title?></h1>
      <div class="div-vid-desc">
        <p class="desc-videos"><?= $page->caption?></p>
      </div>
      <div class="red-divider-videos"><img src="<?=base_url('resources/')?>images/garismerah-33.png" width="118">
      </div>
      <div class="blogall">
      <?php 
        if(sizeof($videos) == 0){
          echo '<div class="blank"><h4 class="blogheader" style="text-align:center;">No Result</h4></div>';
        }
      ?>
      <?php foreach($videos as $v) { ?>
      <div class="div-videos">
        <div class="w-row">
          <div class="w-col w-col-6">
            <div class="w-embed w-video" style="padding-top: 56.17021276595745%;">
              <iframe class="embedly-embed" src="https://www.youtube.com/embed/<?= $v->url?>" scrolling="no" frameborder="0" allowfullscreen=""></iframe>
            </div>
          </div>
          <div class="w-col w-col-6">
            <div class="bloginfo">
              <h4 class="blogheader"><?= $v->title?></h4>
              <h4 class="blogdate vid"><?= $v->date?></h4>
              <p class="blogdesc vid"><?= $v->caption?></p>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      </div>
    </div>
  </div>
  <?php include("include/footer-edwin.php"); ?>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>