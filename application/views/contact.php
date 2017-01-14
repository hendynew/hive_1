<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Wed Jan 04 2017 06:01:22 GMT+0000 (UTC)  -->
<html data-wf-page="586b1575e8c25d7a177a9b46" data-wf-site="586b1575e8c25d7a177a9b47">
<head>
  <meta charset="<?php echo base_url()?>/resources/utf-8">
  <title>Contact</title>
  <meta content="Contact" property="og:title">
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
        <h1 class="edwinmenu">Edwin<br>Prasetyo</h1><img class="reddivbar" src="<?php echo base_url()?>/resources/images/barmerah-33.png"><a class="navlink w-nav-link" href="<?php echo base_url()?>about">About</a><a class="navlink w-nav-link" href="<?php echo base_url()?>blog">Blog</a><a class="navlink w-nav-link" href="#">Contact</a>
      </nav>
      <div class="menubtn w-nav-button">
        <div class="iconstyle iconwhite w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="sec-contact sec-stayupdated">
    <div class="contcontact sendmeyour w-container">
      <h1 class="contact stay textkeunggulan">SEND ME YOUR MESSAGE</h1>
      <div class="w-form">
        <?php
          $arr = [
            "class"=>"form formcontact",
            "data-name"=>"Email Form",
            "id"=>"email-form",
            "name"=>"email-form"
          ];
          echo form_open("sendmail",$arr);
        ?>
          <div class="w-row">
            <div class="w-col w-col-6">
              <input class="fieldcontact textfield w-input" data-name="Name" id="Name" maxlength="256" name="Name" placeholder="What&#39;s your name?" required="required" type="text">
            </div>
            <div class="w-col w-col-6">
              <input class="fieldcontact textfield w-input" data-name="Email" id="Email" maxlength="256" name="Email" placeholder="Drop your e-mail here" required="required" type="email">
            </div>
          </div>
          <textarea class="fieldcontact textarea textfield w-input" data-name="Message" id="Message" maxlength="5000" name="Message" placeholder="Let&#39;s talk"></textarea>
          <div class="divsumbit">
            <?php $arr = array("class"=>"send submit-button w-inline-block","name"=>"btnSubmit"); ?>
            <?= form_submit($arr)?>
          </div>
        </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form</div>
        </div>
      </div>
    </div>
  </div>
  <?php include("include/footer-edwin.php") ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url()?>/resources/js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="<?php echo base_url()?>/resources/https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <?php
    if($this->session->flashdata('status') == 'success'){
      echo "<script>$('.w-form-done').slideDown();</script>";
    }else if($this->session->flashdata('status') == 'failed'){
      echo "<script>$('.w-form-fail').slideDown();</script>";
    }?>
</body>
</html>
