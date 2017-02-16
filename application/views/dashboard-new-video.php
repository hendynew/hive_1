

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="<?= base_url()?>resources/images/logo-hive.png">
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
        <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
        <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
        </style>
    </head>
    <body>
        <?php include_once("./include/header-dashboard.php") ?>
        <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Title</label>
                                    <input id="title" type="text" placeholder="Your title here.." class="form-control" value="<?= (isset($video)) ? $video->title : ''?>">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>URL Video</label>
                                    <input id="url" type="text" placeholder="Your URL Video here.." class="form-control" value="<?= (isset($video)) ? $video->url : ''?>">
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label>Caption</label>
                                    <input id="caption" type="text" placeholder="Your caption here.." class="form-control" value="<?= (isset($video)) ? $video->caption : ''?>">
                                 </div>
                              </div>
                           </div>
                           <div class='row'>
                              <div class="col-md-12 right">
                                <?php if($page == "New Video"){ ?>
                                  <button data-target="add_video" type="submit" class="btn btn-info btn-fill pull-right submitNewVideo">Submit!</button>
                                <?php }else{ 
                                    echo '<button data-target="update_video" data-id="' . $video->video_id  . '" type="submit" class="btn btn-info btn-fill pull-right submitNewVideo">Submit!</button>';
                                    if($video->status == "1"){
                                      echo '<button id="btnDeactivate" data-id="' . $video->video_id .'" data-target="deactivate" type="submit" class="btn btn-danger btn-fill pull-right submitNewVideo">Deactivate</button>';
                                      echo '<button id="btnActivate" data-id="' . $video->video_id .'" data-target="activate" type="submit" class="btn btn-success btn-fill pull-right submitNewVideo" style="display:none">Activate</button>';
                                    }else{
                                      echo '<button id="btnDeactivate" data-id="' . $video->video_id .'" data-target="deactivate" type="submit" class="btn btn-danger btn-fill pull-right submitNewVideo" style="display:none">Deactivate</button>';
                                      echo '<button id="btnActivate" data-id="' . $video->video_id .'" data-target="activate" type="submit" class="btn btn-success btn-fill pull-right submitNewVideo">Activate</button>';
                                    }
                                  ?>
                                <?php } ?>
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

