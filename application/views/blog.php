<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Wed Jan 04 2017 06:01:22 GMT+0000 (UTC)  -->
<html data-wf-page="586b1575e8c25d7a177a9b45" data-wf-site="586b1575e8c25d7a177a9b47">
<head>
  <meta charset="<?php echo base_url()?>/resources/utf-8">
  <title>Blog</title>
  <meta content="Blog" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="<?php echo base_url()?>/resources/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url()?>/resources/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url()?>/resources/css/edwin-prasetyo-website-5efc92dbf3dbaa05.webflow.css" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url()?>/resources/js/modernizr.js" type="text/javascript"></script>
  <link href="<?php echo base_url()?>/resources/images/edwin-fav-32.png" rel="shortcut icon" type="image/x-icon">
  <link href="<?php echo base_url()?>/resources/images/edwin-fav-256.png" rel="apple-touch-icon">
  <link href="<?php echo base_url()?>/resources/css/lightslider.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="navbar w-nav" data-animation="over-left" data-collapse="all" data-duration="400">
    <div class="w-container">
      <a class="navbarlogo w-nav-brand" href="<?php echo base_url()?>"><img src="<?php echo base_url()?>/resources/images/EdwinLogo_1.png" width="87">
      </a>
      <nav class="openmenu w-nav-menu" role="navigation">
        <a class="btnclose w-inline-block" data-ix="new-interaction" href="#"></a>
        <h1 class="edwinmenu">Edwin<br>Prasetyo</h1><img class="reddivbar" src="<?php echo base_url()?>/resources/images/barmerah-33.png"><a class="navlink w-nav-link" href="<?php echo base_url()?>about">About</a><a class="navlink w-nav-link">Blog</a><a class="navlink w-nav-link" href="<?php echo base_url()?>contact">Contact</a>
      </nav>
      <div class="menubtn w-nav-button">
        <div class="iconstyle w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="herosection w-clearfix">
    <div class="herotext w-clearfix">
      <h1 class="heroh1">LEARN</h1><img class="whitedivider" sizes="(max-width: 767px) 50vw, 244px" src="<?php echo base_url()?>/resources/images/garis-26.jpg" srcset="<?php echo base_url()?>/resources/images/garis-26-p-500x14.jpeg 500w, images/garis-26.jpg 565w" width="244">
      <h1 class="from heroh1">FROM EVERYONE</h1>
      <h1 class="follow heroh1">FOLLOW</h1><img class="whitedivider" sizes="(max-width: 767px) 50vw, 244px" src="<?php echo base_url()?>/resources/images/garis-26.jpg" srcset="<?php echo base_url()?>/resources/images/garis-26-p-500x14.jpeg 500w, images/garis-26.jpg 565w" width="244">
      <h1 class="heroh1 none">NO ONE</h1><img class="garisnama" src="<?php echo base_url()?>/resources/images/garis-27.jpg" width="46">
      <h3 class="edwinprasetyo">Edwin Prasetyo</h3>
    </div>
  </div>
  <div class="section-blog-post w-clearfix">
    <div class="contblog w-container">
      <h1 class="txt-tradingonline">BLOG</h1>
      <div class="blog div-red-divider"><img src="<?php echo base_url()?>resources/images/garismerah-34.png" width="118">
      </div>
      <a class="btn-latestblog w-inline-block" href="<?=base_url()?>view_blog/latest">
        <div class="txt-checkout">Check Out My
          <br>Latest Blog Post</div>
      </a>
      <div class="div-month-blog" data-year="2017">
        <?= $link; ?>
      </div>

      <a class="btn-prev-blog-posts mobile w-inline-block" href="#">
        <div class="btn-prev-blog-posts head">p r e v</div>
      </a>
      <div class="div-blogs w-clearfix">
        <div class="colblogs w-row">
          <?php foreach($posts as $p){?>
            <div class="colblogpost w-col w-col-4">
              <a class="blogpost linkblogpost w-inline-block" href="<?php echo base_url()?>view_blog/<?= $p->post_id ?>">
                <div class="thumbnail"><img src="<?php echo base_url()?>resources/images/<?= ($p->url_image != "" ? $p->url_image : "Images9.jpg")?>">
                </div>
                <h2 class="head-blog-post"><?= $p->date?></h2>
                <h2 class="head-blog-post title"><?= $p->title?></h2>
              </a>
            </div>
          <?php
        }
          ?>
          <div class="colblogpost"></div>
        </div>
        <div class="btn-prev-blog-posts head w-hidden-main w-hidden-medium">n e x t</div>
      </div>
      </div><a class="btn-prev-blog-posts w-inline-block" href="#"><h4 class="btn-prev-blog-posts head w-hidden-small w-hidden-tiny">p<br>r<br>e<br>v</h4></a><a class="btn-next-prev-blog btn-prev-blog-posts w-inline-block" href="#"><h4 class="btn-prev-blog-posts head w-hidden-small w-hidden-tiny">n<br>e<br>x<br>t</h4></a>
  </div>
  <?php include("include/footer-edwin.php") ?>
  <style> .lSAction > a{background-image: url('<?= base_url()?>resources/images/controls.png');}</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url()?>/resources/js/webflow.js" type="text/javascript"></script>
  <script src="<?php echo base_url()?>/resources/js/custom.js" type="text/javascript"></script>
  <script src="<?php echo base_url()?>/resources/js/lightslider.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="<?php echo base_url()?>/resources/https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
