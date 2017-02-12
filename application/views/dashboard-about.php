

<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <link rel="icon" type="image/png" href="resources/images/logo-hive.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>Hive Dashboard</title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
      <meta name="viewport" content="width=device-width" />
      <!-- Bootstrap core CSS     -->
      <link href="<?= base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" />
      <!-- Animation library for notifications   -->
      <link href="<?= base_url()?>assets/css/animate.min.css" rel="stylesheet"/>
      <!--  Light Bootstrap Table core CSS    -->
      <link href="<?= base_url()?>assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
      <!--     Fonts and icons     -->
      <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
      <link href="<?= base_url()?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
      <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
   </head>
   <body>
      <?php include_once("./include/header-dashboard.php") ?>
      <div class="content">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-10">
                  <div class="card">
                     <div class="content">
                         <div class="row">
                           <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Title</label>
                                    <input id="title" type="text" placeholder="Your title here.." class="form-control" value="<?=$about->title1?>">
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Caption</label>
                                    <input id="caption" type="text" placeholder="Your title here.." class="form-control" value="<?=$about->caption1?>">
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Content 1</label>
                                    <textarea name="edit" id="content1"><?=$about->content1?></textarea>
                                    <script>
                                       CKEDITOR.replace( 'edit' );
                                    </script>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Content 2</label>
                                    <textarea name="edit2" id="content2"><?=$about->content2?></textarea>
                                    <script>
                                       CKEDITOR.replace( 'edit2' );
                                    </script>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                           <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Title 2</label>
                                    <input id="title2" type="text" placeholder="Your title here.." class="form-control" value="<?=$about->title2?>">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Title 3</label>
                                    <input id="title3" type="text" placeholder="Your title here.." class="form-control" value="<?=$about->title3?>">
                                 </div>
                              </div>
                              <form enctype="multipart/form-data" action="upload.php" method="post">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Background </label>
                                    <input type="file" id="file" />
                                 </div>
                              </div>
                              </form>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label>Content 3</label>
                                    <textarea name="edit3" id="content3"><?=$about->content3?></textarea>
                                    <script>
                                       CKEDITOR.replace( 'edit3' );
                                    </script>
                                 </div>
                              </div>
                           </div>
                           <div class='row'>
                              <div class="col-md-12">
                                  <button type="submit"class="btn btn-info btn-fill pull-right submitUpdateAbout">Submit!</button>
                              </div>
                           </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php include("include/footer-dashboard.php") ?>
   </body>
   <!--   Core JS Files   -->
   <script src="<?= base_url() ?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
   <script src="<?= base_url() ?>assets/js/jquery.form.min.js" type="text/javascript"></script>
   <script src="<?= base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
   <!--  Checkbox, Radio & Switch Plugins -->
   <script src="<?= base_url() ?>assets/js/bootstrap-checkbox-radio-switch.js"></script>
   <!--  Charts Plugin -->
   <script src="<?= base_url() ?>assets/js/chartist.min.js"></script>
   <!--  Notifications Plugin    -->
   <script src="<?= base_url() ?>assets/js/bootstrap-notify.js"></script>
   <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
   <script src="<?= base_url() ?>assets/js/light-bootstrap-dashboard.js"></script>
   <script src="<?= base_url() ?>assets/js/custom-dashboard.js"></script>
   <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript">
      $(document).ready(function(){
      
         	$.notify({
             	icon: 'pe-7s-gift',
             	message: "Welcome! This is the place where you manage your contents!"
      
             },{
                 type: 'info',
                 timer: 4000
             });
      
      });
   </script>
</html>

