

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
                        <form enctype="multipart/form-data" action="upload.php" method="post">
                           <h4> <a id="headline">Headline </a> </h4>
                           <div class="row">
                              <div class="col-md-5">
                                 <div class="form-group">
                                    <label>Background Headline (max file: 8MB)</label>
                                    <input type="file" id="herofile" class="herogroup" />
                                 </div>
                              </div>
                           </div>
                           <div class='row'>
                              <div class="col-md-12 right">
                                 <button data-target="hero" data-type="hero" type="submit" class="btn btn-info btn-fill pull-right submitHome">Update Page</button>
                              </div>
                           </div>
                        </form>
                        <hr>
                        <form enctype="multipart/form-data" action="upload.php" method="post">
                           <h4> <a id="bodyline">Bodyline 1</a> </h4>
                           <div class="row">
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Background Bodyline </label>
                                    <input type="file" id="bodylinefile" class="bodylinegroup" />
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Title 1</label>
                                    <input id="title" type="text" class="form-control" value="<?=$home->title?>">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Title 2</label>
                                    <input id="title2" type="text" class="form-control" value="<?=$home->title2?>">
                                 </div>
                              </div>
                           </div>
                           
                           <div class='row'>
                              <div class="col-md-12 right">
                                 <button data-target="bodyline"  type="submit" class="btn btn-info btn-fill pull-right submitHome">Update Page</button>
                              </div>
                           </div>
                        </form>
                        <hr>
                        <form enctype="multipart/form-data" action="upload.php" method="post">
                           <h4> <a id="fitur">Fitur dan Keunggulan</a> </h4>
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Title</label>
                                    <input id="fiturtitle" type="text" class="form-control" value="<?=$home->title3?>">
                                 </div>
                              </div>
                           </div>
                           <?php foreach($content2 as $c2){?>
                           <div class="row">
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Title Item <?=$c2->id_content?></label>
                                    <input id="fiturtitle<?=$c2->id_content?>" type="text" class="form-control" value="<?=$c2->title?>">
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Icon <?=$c2->id_content?> </label>
                                    <input type="file" name="fiturfile<?=$c2->id_content?>" class="fiturgroup" size="20" />
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label>Item <?=$c2->id_content?></label>
                                    <textarea name="editc<?= $c2->id_content?>" id="fiturcontent<?=$c2->id_content?>"><?=$c2->content?></textarea>
                                    <script>
                                       var id = '<?= $c2->id_content?>';
                                       CKEDITOR.replace( 'editc' + id );
                                    </script>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12 right">
                                 <button data-target="fitur" type="submit" class="btn btn-info btn-fill pull-right submitFitur">Update Page</button>
                              </div>
                           </div>
                           <?php } ?>
                        </form>
                        <hr>
                        <h4> <a id="video">Video Home</a> </h4>
                           <div class="row">
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>URL Video </label>
                                    <input id="videohome" data-name="url_video" type="text" class="form-control" value="<?=$home->url_video?>">
                                 </div>
                              </div>
                           </div>
                           <div class='row'>
                              <div class="col-md-12 right">
                                 <button data-target="home"  type="submit" class="btn btn-info btn-fill pull-right submitVideo">Update Page</button>
                              </div>
                           </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <ul class="nav right-bar">
                     <li>
                        <a class="item1" href="#headline">
                           <i class="pe-7s-home"></i>
                           <p>Headline</p>
                        </a>
                     </li>
                     <li>
                        <a class="item2" href="#bodyline" >
                           <i class="pe-7s-user"></i>
                           <p>Bodyline 1</p>
                        </a>
                     </li>
                     <li>
                        <a class="item3" href="#fitur">
                           <i class="pe-7s-note2"></i>
                           <p>Fitur dan Keunggulan</p>
                        </a>
                     </li>
                     <li>
                        <a class="item4" href="#video">
                           <i class="pe-7s-note2"></i>
                           <p>Video</p>
                        </a>
                     </li>
                  </ul>
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
   <script src="<?= base_url() ?>assets/js/dropzone.js"></script>
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

