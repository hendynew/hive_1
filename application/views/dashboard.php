<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Hendy CP</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<?php include("include/header-dashboard.php") ?>

<div class="content">
		<div class="container-fluid">
				<div class="row">
						<div class="col-md-8">
								<div class="card">
										<div class="header">
												<h3 class="title">Home Page</h3>
										</div>
										<div class="content">
												<?= form_open_multipart("cp/update/home","class=form")?>
														<br>
														<h4> <a id="headline">Headline </a> </h4>
														<div class="row">
																<div class="col-md-3">
																		<div class="form-group">
																				<label>Hero 1 </label>
																				<input id="hero1" type="text" class="form-control" value=<?=$home->hero?>>
																		</div>
																</div>
																<div class="col-md-3">
																		<div class="form-group">
																				<label>Hero 2 </label>
																				<input id="hero2" type="text" class="form-control" value="<?=$home->hero2?>">
																		</div>
																</div>
																<div class="col-md-3">
																		<div class="form-group">
																				<label>Hero 3 </label>
																				<input id="hero3" type="text" class="form-control" value="<?=$home->hero3?>">
																		</div>
																</div>
																<div class="col-md-3">
																		<div class="form-group">
																				<label>Hero 4 </label>
																				<input id="hero4" type="text" class="form-control" value="<?=$home->hero4?>">
																		</div>
																</div>
														</div>

														<div class="row">
															<div class="col-md-3">
																	<div class="form-group">
																			<label>Name </label>
																			<input id="name" type="text" class="form-control" value="<?=$home->name?>">
																	</div>
															</div>
															<div class="col-md-3">
																<div class="form-group">
																		<label>Background Hero </label>
																		<input type="file" name="userfile" size="20" />
																</div>
															</div>
														</div>

														<hr>
														<h4> <a id="bodyline">Bodyline 1</a> </h4>
														<div class="row">
																<div class="col-md-6">
																		<div class="form-group">
																				<label>Title 1</label>
																				<input id="title" type="text" class="form-control" placeholder="Company" value="<?=$home->title?>">
																		</div>
																</div>
																<div class="col-md-6">
																		<div class="form-group">
																				<label>Title 2</label>
																				<input id="title2" type="text" class="form-control" placeholder="Last Name" value="<?=$home->title2?>">
																		</div>
																</div>
														</div>

														<div class="row">
																<div class="col-md-12">
																		<div class="form-group">
																				<label>Content 1</label>
																				<textarea id="content"  rows="5" class="form-control" placeholder="Here can be your description" value=""><?=$home->content?></textarea>
																		</div>
																</div>
														</div>
														<hr>
														<h4> <a id="fitur">Fitur dan Keunggulan</a> </h4>
														<div class="row">
																<div class="col-md-4">
																		<div class="form-group">
																				<label>Title 3</label>
																				<input id="title3" type="text" class="form-control" placeholder="City" value="<?=$home->title3?>">
																		</div>
																</div>
														</div>
														<?php foreach($content2 as $c2){?>
															<div class="row">
																	<div class="col-md-3">
																			<div class="form-group">
																					<label>Title Item <?=$c2->id_content?></label>
																					<input id="c2-title1" type="text" class="form-control" placeholder="City" value="<?=$c2->title?>">
																			</div>
																	</div>
																	<div class="col-md-6">
																			<div class="form-group">
																					<label>Item <?=$c2->id_content?></label>
																					<textarea id="c2-content1" rows="5" class="form-control" placeholder="Here can be your description" value="Mike"><?=$c2->content?></textarea>
																			</div>
																	</div>
																	<div class="col-md-3">
																		<div class="form-group">
																				<label>Icon <?=$c2->id_content?> </label>
																				<input type="file" name="userfile" size="20" />
																		</div>
																	</div>
															</div>
														<?php } ?>
														<div class="row">
																<div class="col-md-6">
																		<div class="form-group">
																				<label>Title 5</label>
																				<input id="title5" type="text" class="form-control" placeholder="City" value="<?=$home->title5?>">
																		</div>
																</div>
																<div class="col-md-6">
																		<div class="form-group">
																				<label>Title 6</label>
																				<input id="title6" type="text" class="form-control" placeholder="City" value="<?=$home->title6?>">
																		</div>
																</div>
														</div>
														<hr>
														<h4> <a id="subscribe">Subscribe</a> </h4>
														<div class="row">
																<div class="col-md-8">
																		<div class="form-group">
																				<label>Content 6</label>
																				<textarea id="content6" rows="5" class="form-control" placeholder="Here can be your description" value="Mike"><?=$home->content6?></textarea>
																		</div>
																</div>
																<div class="col-md-4">
																		<div class="form-group">
																				<label>Background 6</label>
																				<input type="file" name="userfile" size="20" />
																		</div>
																</div>
														</div>
														<button id="submitHome" type="submit" class="btn btn-info btn-fill pull-right">Update Page</button>
														<div class="clearfix"></div>
												</form>
										</div>
								</div>
						</div>
						<div class="col-md-4">
							<div class="sidebar-wrapper" data-color="blue" data-image="assets/img/sidebar-5.jpg">
								<ul class="nav">
										<li>
												<a class="scroll" href="headline">
														<i class="pe-7s-home"></i>
														<p>Headline</p>
												</a>
										</li>
										<li>
												<a href="#">
														<i class="pe-7s-user"></i>
														<p>Bodyline 1</p>
												</a>
										</li>
										<li>
												<a href="#">
														<i class="pe-7s-note2"></i>
														<p>Fitur dan Keunggulan</p>
												</a>
										</li>
										<li>
												<a href="#">
														<i class="pe-7s-users"></i>
														<p>Subscribe</p>
												</a>
										</li>
								</ul>
							</div>
						</div>

				</div>
		</div>
</div>

<?php include("include/footer-dashboard.php") ?>

</body>

    <!--   Core JS Files   -->
    <script src="<?= base_url() ?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?= base_url() ?>assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="<?= base_url() ?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?= base_url() ?>assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?= base_url() ?>assets/js/light-bootstrap-dashboard.js"></script>

	<script src="<?= base_url() ?>assets/js/custom-dashboard.js"></script>

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
