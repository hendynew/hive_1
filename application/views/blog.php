<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Thu Feb 09 2017 02:57:05 GMT+0000 (UTC)  -->
<html data-wf-page="589aefd8d90fbc9f3bf70b2b" data-wf-site="589aefd8d90fbc9f3bf70b30">
<head>
  <meta charset="utf-8">
  <title>Blog</title>
  <meta content="Blog" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="<?= base_url() ?>/resources/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>/resources/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>/resources/css/custom.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>/resources/css/edwin-prasetyo-website-5e-1e1f6ac694fa6.webflow.css" rel="stylesheet" type="text/css">
  <script src="<?= base_url() ?>/resources/js/modernizr.js" type="text/javascript"></script>
  <link href="<?= base_url() ?>/resources/images/edwin-fav-32.png" rel="shortcut icon" type="image/x-icon">
  <link href="<?= base_url() ?>/resources/images/edwin-fav-256.png" rel="apple-touch-icon">
</head>
<body>
  <?php include('include/navbar-edwin.php')?>
  <div class="section-blog-post">
    <div class="contblog w-container">
      <h1 class="txt-tradingonline">BLOG</h1>
      <div class="blog div-red-divider"><img src="<?= base_url() ?>/resources/images/garismerah-34.png" width="91">
      </div>
      <div class="divblogddsearch">
        <div class="divsearch w-hidden-main w-hidden-medium">
          <div class="w-row">
            <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2"><img class="img-search" src="<?= base_url() ?>/resources/images/search-btn-37.png" width="73.5">
            </div>
            <div class="w-col w-col-10 w-col-small-10 w-col-tiny-10">
              <div class="w-form">
                <form data-name="Search Form" class="searchform" name="search-form">
                  <input class="searchfield w-input search" data-name="search" maxlength="256" name="search" placeholder="SEARCH" type="text">
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="w-dropdown w-hidden-main w-hidden-medium" data-delay="0">
          <div class="blogdropdown w-dropdown-toggle">
            <div class="blogddtext active-month"><?= strtoupper(date('F', mktime(0, 0, 0, $month, 10)) . date(" Y")) ?></div>
            <div class="w-icon-dropdown-toggle"></div>
          </div>
          <nav class="dropdownlist w-dropdown-list">
            <?php for ($i = 1; $i <= 12; $i++) {
                $date = strtoupper(date('F', mktime(0, 0, 0, $i, 10)) . date(" Y"));
                  echo '<a class="blogddtext w-dropdown-link selectMonth" href="#" data-month="' . $i .'" data-year="' . date("Y") .'">' . $date . '</a>';
              }?>
          </nav>
        </div>
        <div class="w-hidden-small w-hidden-tiny w-row">
          <div class="w-col w-col-5">
            <div class="w-dropdown" data-delay="0">
              <div class="blogdropdown w-dropdown-toggle">
                <div class="blogddtext active-month"><?= strtoupper(date('F', mktime(0, 0, 0, $month, 10)) . date(" Y")) ?></div>
                <div class="w-icon-dropdown-toggle"></div>
              </div>
              <nav class="dropdownlist w-dropdown-list">
              <?php for ($i = 1; $i <= 12; $i++) {
                $date = strtoupper(date('F', mktime(0, 0, 0, $i, 10)) . date(" Y"));
                echo '<a class="blogddtext w-dropdown-link selectMonth" href="#" data-month="' . $i .'" data-year="' . date("Y") .'">' . $date . '</a>';
              }?>
              </nav>
            </div>
          </div>
          <div class="w-col w-col-7">
            <div class="divsearch">
              <div class="w-row">
                <div class="w-col w-col-2"><img class="img-search" src="<?= base_url() ?>/resources/images/search-btn-37.png" width="73.5">
                </div>
                <div class="w-col w-col-10">
                  <div class="w-form">
                    <form data-name="Search Form" class="searchform" name="search-form">
                      <input class="searchfield w-input search2" data-name="search" maxlength="256" name="search" placeholder="SEARCH" type="text">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id='noresult' class="blogdiv hidden">
            <div class="w-row">
              <div class="colgambarblog w-col w-col-4">
              </div>
              <div class="w-col w-col-8">
                <div class="bloginfo">
                  <h4 class="blogheader">No Result</h4>
                </div>
              </div>
          </div>
      </div>
      <div class="blogall">
      <?php if(isset($posts)){foreach($posts as $p){ ?>
      <div class="blogdiv">
        <div class="w-row">
          <div class="colgambarblog w-col w-col-4"><img src="<?php echo base_url()?>resources/images/<?= ($p->url_image != "" ? $p->url_image : "Images9.jpg")?>">
          </div>
          <div class="w-col w-col-8">
            <div class="bloginfo">
              <h4 class="blogheader"><?= $p->title ?></h4>
              <h4 class="blogdate"><?= $p->date ?></h4>
              <p class="blogdesc"><?= $p->caption ?></p>
              <a class="btnseemore w-inline-block" href="<?= base_url()?>view_blog/<?= $p->post_id?>"></a>
            </div>
          </div>
        </div>
      </div>
      <?php }}else{
        echo "<script>document.getElementById('noresult').style.display='inline'</script>";
      } ?>
    </div>
    </div>
  </div>
  <?php include('include/footer-edwin.php') ?>
</body>
</html>