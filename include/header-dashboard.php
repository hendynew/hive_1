<div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="<?= base_url()?>assets/img/sidebar-5.jpg">
    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
		<div class="sidebar-wrapper">
					<div class="logo">
							<a href="<?=base_url()?>cp" class="simple-text">
									<img src="<?=base_url()?>resources/images/logo-hive.png" width=65px />
							</a>
					</div>

					<ul class="nav">
							<li <?= ($page=="Homepage") ? "class=active" : "" ?>>
									<a href="<?=base_url()?>cp">
											<i class="pe-7s-home"></i>
											<p>Home</p>
									</a>
							</li>
                            <li <?= ($page=="Blog") ? "class=active" : "" ?>>
                                    <a href="<?=base_url()?>cp/blog">
                                            <i class="pe-7s-note2"></i>
                                            <p>Blog</p>
                                    </a>
                            </li>
							<li <?= ($page=="About") ? "class=active" : "" ?>>
									<a href="<?=base_url()?>cp/about">
											<i class="pe-7s-user"></i>
											<p>About</p>
									</a>
							</li>
							<li <?= ($page=="Videos") ? "class=active" : "" ?>>
									<a href="<?=base_url()?>cp/videos">
											<i class="pe-7s-play"></i>
											<p>Videos</p>
									</a>
							</li>
                            <li <?= ($page=="Newsletter") ? "class=active" : "" ?>>
                                    <a href="<?=base_url()?>cp/newsletter">
                                            <i class="pe-7s-user"></i>
                                            <p>Newsletter</p>
                                    </a>
                            </li>
					</ul>
		</div>

    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?= $page?></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="<?= base_url('cp/account')?>">
                               Account
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('logout')?>">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
