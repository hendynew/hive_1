<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Thu Feb 09 2017 02:57:05 GMT+0000 (UTC)  -->
<html data-wf-page="589aefd8d90fbc9f3bf70b28" data-wf-site="589aefd8d90fbc9f3bf70b30">
<head>
  <meta charset="utf-8">
  <title><?= $post->title ?></title>
  <meta content="Blog Content 1" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="<?= base_url() ?>resources/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>resources/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>resources/css/edwin-prasetyo-website-5e-1e1f6ac694fa6.webflow.css" rel="stylesheet" type="text/css">
  <script src="<?= base_url() ?>resources/js/modernizr.js" type="text/javascript"></script>
  <link href="<?= base_url() ?>resources/images/edwin-fav-32.png" rel="shortcut icon" type="image/x-icon">
  <link href="<?= base_url() ?>resources/images/edwin-fav-256.png" rel="apple-touch-icon">
</head>
<body>
  <?php include('include/navbar-edwin.php') ?>
  <div class="sectionabout">
    <div class="container-about w-container">
      <h1 class="about header txt-tradingonline"><?= $post->title?></h1>
      <p class="parabout"><?= $post->date?></p>
      <p class="descblog parabout"><?= $post->caption?></p>
      <div class="divgarismerah"><img src="<?= base_url() ?>resources/images/garismerah-33.png" width="108">
      </div>
      <div class="par-text-about w-row">
        <div class="colblogpostmob w-col w-col-6"><img src="<?= base_url() ?>uploads/<?= $post->url_image?>">
        </div>
        <div class="w-col w-col-6">
          <p class="partextleft"><?= $post->post?></p>
          <a class="btnback w-inline-block" href="<?= base_url() ?>blog"></a>
        </div>
      </div>
    </div>
  </div>
  <?php include('./include/footer-edwin.php') ?>
</body>
</html>