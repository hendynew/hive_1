<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Thu Feb 09 2017 02:57:05 GMT+0000 (UTC)  -->
<html data-wf-page="589aefd8d90fbc9f3bf70b2a" data-wf-site="589aefd8d90fbc9f3bf70b30">
<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <meta content="Contact" property="og:title">
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
  <div class="navbar navbarcontact w-nav" data-animation="over-left" data-collapse="all" data-duration="400">
    <div class="w-container">
      <a class="navbarlogo w-nav-brand" href="index.html"><img src="<?= base_url() ?>resources/images/EdwinLogo_1.png" width="87">
      </a>
      <nav class="openmenu w-nav-menu" role="navigation">
        <a class="btnclose w-inline-block" data-ix="new-interaction" href="#"></a>
        <h1 class="edwinmenu">Edwin<br>Prasetyo</h1><img class="reddivbar" src="<?= base_url() ?>resources/images/barmerah-33.png"><a class="navlink w-nav-link" href="<?= base_url() ?>">Home</a><a class="navlink w-nav-link" href="about">About</a><a class="navlink w-nav-link" href="videos">Videos</a><a class="navlink w-nav-link" href="blog">Blog</a><a class="navlink w-nav-link active" href="#">Contact</a>
      </nav>
      <div class="menubtn w-nav-button">
        <div class="iconcontact iconstyle iconwhite w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="conta sec-contact sec-stayupdated">
    <div class="contcontact sendmeyour w-container">
      <h1 class="contact stay textkeunggulan">SEND ME YOUR MESSAGE</h1>
      <div class="w-form">
        <form class="form formcontact" data-name="Email Form" id="email-form" name="email-form">
          <div class="w-row">
            <div class="w-col w-col-6">
              <input class="fieldcontact textfield w-input" data-name="Name" id="Name" maxlength="256" name="Name" placeholder="What&#39;s your name?" required="required" type="text">
            </div>
            <div class="w-col w-col-6">
              <input class="fieldcontact textfield w-input" data-name="Email" id="Email" maxlength="256" name="Email" placeholder="Drop your e-mail here" required="required" type="email">
            </div>
          </div>
          <textarea class="fieldcontact textarea textfield w-input" data-name="Message" id="Message" maxlength="5000" name="Message" placeholder="Let&#39;s talk"></textarea>
        </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form</div>
        </div>
      </div>
      <div class="divsumbit">
        <a class="send submit-button w-inline-block" href="#"></a>
      </div>
    </div>
  </div>
  <?php include('include/footer-edwin.php') ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>resources/js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>