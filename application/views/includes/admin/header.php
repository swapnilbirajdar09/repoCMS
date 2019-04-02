<?php
////start session     
$admin_name = $this->session->userdata('admin_name');
$session_name = '';
if ($admin_name != '') {
   //$sessionArr = explode('|', $admin_name);
   $session_name = $admin_name;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="bootstrap default admin template">
	<meta name="viewport" content="width=device-width">
	<title>CRM Dashboard | Admin Template</title>

<link rel="shortcut icon" href="http://backend.themesadmin.com/backend/assets/favicon/favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/template/favicon/apple-touch-icon.png"/>
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>assets/template/favicon/apple-touch-icon-57x57.png"/>
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/template/favicon/apple-touch-icon-72x72.png"/>
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/template/favicon/apple-touch-icon-76x76.png"/>
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/template/favicon/apple-touch-icon-114x114.png"/>
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/template/favicon/apple-touch-icon-120x120.png"/>
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>assets/template/favicon/apple-touch-icon-144x144.png"/>
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/template/favicon/apple-touch-icon-152x152.png"/>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/template/favicon/apple-touch-icon-180x180.png"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/global/plugins/bootstrap/dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/icons_fonts/elegant_font/elegant.min.css"/>
<link id="site-color" rel="stylesheet" href="<?php echo base_url(); ?>assets/template/layouts/layout-left-icon-menu/css/color/light/color-default.min.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/global/plugins/switchery/dist/switchery.min.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
<!-- Font Awesome -->
<link href="<?php echo base_url(); ?>assets/fa/css/font-awesome.min.css" rel="stylesheet">


<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/global/plugins/rickshaw/rickshaw.min.css"/> -->

<!-- <link href="<?php echo base_url(); ?>assets/template/global/plugins/jQuery-Smart-Wizard/styles/smart_wizard.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/template/global/plugins/jQuery-Smart-Wizard/styles/smart_wizard_vertical.min.css" rel="stylesheet" type="text/css"> -->

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/global/css/components.min.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/layouts/layout-left-icon-menu/css/layout.min.css"/>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/global/plugins/bootstrap-select/dist/css/bootstrap-select.min.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/global/plugins/select2/dist/css/select2.min.css"/>
<!-- angular-->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/angular.js"></script>
<script src="<?php echo base_url(); ?>assets/js/angular-sanitize.js"></script>
<script src="<?php echo base_url(); ?>assets/js/const.js"></script>

</head>
<body>
	<div class="loader-overlay">
		<div class="loader-preview-area">
			<div class="spinners">
				<div class="loader">
					<div class="rotating-plane"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper">

		<header id="header">
			<div class="row">
				<div class="col-sm-4 col-xl-2 header-left">
					<div class="logo float-xs-left">
						<a href="#"><img src="<?php echo base_url(); ?>assets/template/global/image/web-logo.png" alt="logo"></a>
					</div>
					<a id="navtoggle" class="animated-arrow"><span></span></a>
				</div>
				<div class="col-sm-8 col-xl-10 header-right">
					<div class="header-inner-right">
						<div class="float-default searchbox">
							<div class="right-icon">
								<a href="javascript:void(0)">
									<i class="icon_search"></i>
								</a>
							</div>
						</div>
						<div class="float-default mail">
							<div class="right-icon">
								<a href="javascript:void(0)" data-toggle="dropdown" data-open="true" aria-expanded="true">
									<i class="icon_mail_alt"></i>
									<span class="mail-no">10</span>
								</a>
								<div class="dropdown-menu messagetoggle" role="menu">
									<div class="nav-tab-horizontal">
										<ul class="nav nav-tabs" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" data-toggle="tab" href="#messages" role="tab">Message</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#resendmessage" role="tab">Resend</a>
											</li>
										</ul>
									</div>
									<div class="tab-content">
										<div class="tab-pane active" id="messages" role="tabpanel" data-plugin="custom-scroll" data-height="320">
											<ul class="userMessagedrop">
												<li>
													<a href="#">
														<div class="media">
															<div class="media-left float-xs-left">
																<span class="label label-primary"><i class="icon_plus"></i></span>
															</div>
															<div class="media-body">
																<h6>New tasks added</h6>
																<p>Dummy text of the printing and typesetting industry.</p>
																<div class="meta-tag text-nowrap">
																	<time datetime="2016-12-10T20:27:48+07:00" class="text-muted">5 mins
																	</time>
																</div>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="media">
															<div class="media-left float-xs-left">
																<span class="label label-success"><i class="icon_lock"></i></span>
															</div>
															<div class="media-body">
																<h6>Successfully</h6>
																<p>Dummy text of the printing and typesetting industry.</p>
																<div class="meta-tag text-nowrap">
																	<time datetime="2016-12-10T20:27:48+07:00" class="text-muted">5 mins
																	</time>
																</div>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="media">
															<div class="media-left float-xs-left">
																<span class="label label-danger"><i class="icon_info_alt"></i></span>
															</div>
															<div class="media-body">
																<h6>Warnind</h6>
																<p>Dummy text of the printing and typesetting industry.</p>
																<div class="meta-tag text-nowrap">
																	<time datetime="2016-12-10T20:27:48+07:00" class="text-muted">5 mins
																	</time>
																</div>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="media">
															<div class="media-left float-xs-left">
																<span class="label label-info"><i class="icon_plus"></i></span>
															</div>
															<div class="media-body">
																<h6>Add new friend</h6>
																<p>Dummy text of the printing and typesetting industry.</p>
																<div class="meta-tag text-nowrap">
																	<time datetime="2016-12-10T20:27:48+07:00" class="text-muted">5 mins
																	</time>
																</div>
															</div>
														</div>
													</a>
												</li>
											</ul>
										</div>
										<div class="tab-pane" id="resendmessage" role="tabpanel" data-plugin="custom-scroll" data-height="320">
											<ul class="userMessagedrop">
												<li>
													<a href="#">
														<div class="media">
															<div class="media-left float-xs-left">
																<span class="label label-primary"><i class="icon_profile"></i></span>
															</div>
															<div class="media-body">
																<h6>5 new members joi...</h6>
																<p>Dummy text of the printing and typesetting industry.</p>
																<div class="meta-tag text-nowrap">
																	<time datetime="2016-12-10T20:27:48+07:00" class="text-muted">2 mins
																	</time>
																</div>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="media">
															<div class="media-left float-xs-left">
																<span class="label label-success"><i class="icon_key"></i></span>
															</div>
															<div class="media-body">
																<h6>You changed...</h6>
																<p>Dummy text of the printing and typesetting industry.</p>
																<div class="meta-tag text-nowrap">
																	<time datetime="2016-12-10T20:27:48+07:00" class="text-muted">5 mins
																	</time>
																</div>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="media">
															<div class="media-left float-xs-left">
																<span class="label label-danger"><i class="icon_close"></i></span>
															</div>
															<div class="media-body">
																<h6>5 members removed</h6>
																<p>Dummy text of the printing and typesetting industry.</p>
																<div class="meta-tag text-nowrap">
																	<time datetime="2016-12-10T20:27:48+07:00" class="text-muted">15 mins
																	</time>
																</div>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="media">
															<div class="media-left float-xs-left">
																<span class="label label-info"><i class="icon_plus"></i></span>
															</div>
															<div class="media-body">
																<h6>Update available</h6>
																<p>Dummy text of the printing and typesetting industry.</p>
																<div class="meta-tag text-nowrap">
																	<time datetime="2016-12-10T20:27:48+07:00" class="text-muted">5 mins
																	</time>
																</div>
															</div>
														</div>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- all related projects div -->
						<div class="float-default chat">
							<div class="right-icon">
								<a href="javascript:void(0)" title="Project List" data-toggle="dropdown" data-open="true" data-animation="slideOutUp" aria-expanded="false">
									<i class="icon_puzzle"></i>
									<span class="mail-no">0</span>
								</a>
								<ul class="dropdown-menu userChat" data-plugin="custom-scroll" data-height="210" style="overflow-y: scroll;">
									<li>
										<a href="#">
											<div class="media">
												<div class="media-left float-xs-left">
													<span class="label label-success"><i class="icon_lock"></i></span>
												</div>
												<div class="media-body">
													<h6>Project Name</h6>
													<div class="meta-tag text-nowrap">
														<time datetime="2016-12-10T20:27:48+07:00" class="text-muted">created on 20 Jan 2019
														</time>
													</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="media">
												<div class="media-left float-xs-left">
													<span class="label label-primary"><i class="icon_plus"></i></span>
												</div>
												<div class="media-body">
													<h5>Judy Fowler Dummy text of the printing</h5>
													<div class="meta-tag text-nowrap">
														<time datetime="2016-12-10T20:27:48+07:00" class="text-muted">created on 20 Jan 2019
														</time>
													</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="media">
												<div class="media-left float-xs-left">
													<span class="label label-primary"><i class="icon_plus"></i></span>
												</div>
												<div class="media-body">
													<h5>Judy Fowler</h5>
													<div class="meta-tag text-nowrap">
														<time datetime="2016-12-10T20:27:48+07:00" class="text-muted">created on 20 Jan 2019
														</time>
													</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="media">
												<div class="media-left float-xs-left">
													<span class="label label-primary"><i class="icon_plus"></i></span>
												</div>
												<div class="media-body">
													<h5>Judy Fowler</h5>
													<div class="meta-tag text-nowrap">
														<time datetime="2016-12-10T20:27:48+07:00" class="text-muted">created on 20 Jan 2019
														</time>
													</div>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- all related projects div ends -->
						<div class="float-default chat">
							<div class="right-icon">
								<a href="javascript:void(0)" data-toggle="dropdown" data-open="true" data-animation="slideOutUp" aria-expanded="false">
									<i class="icon_chat_alt"></i>
									<span class="mail-no">8</span>
								</a>
								<ul class="dropdown-menu userChat" data-plugin="custom-scroll" data-height="310">
									<li>
										<a href="#">
											<div class="media">
												<div class="media-left float-xs-left">
													<img src="<?php echo base_url(); ?>assets/template/global/image/image1-profile.jpg" alt="message"/>
												</div>
												<div class="media-body">
													<h5>Judy Fowler</h5>
													<p>Dummy text of the printing...</p>
													<div class="meta-tag text-nowrap">
														<time datetime="2016-12-10T20:27:48+07:00" class="text-muted">5 mins
														</time>
													</div>
													<div class="status online"></div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="media">
												<div class="media-left float-xs-left">
													<img src="<?php echo base_url(); ?>assets/template/global/image/image2-profile.jpg" alt="message"/>
												</div>
												<div class="media-body">
													<h5>Judy Fowler</h5>
													<p>Dummy text of the printing...</p>
													<div class="meta-tag text-nowrap">
														<time datetime="2016-12-10T20:27:48+07:00" class="text-muted">2 hours
														</time>
													</div>
													<div class="status offline"></div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="media">
												<div class="media-left float-xs-left">
													<img src="<?php echo base_url(); ?>assets/template/global/image/image3-profile.jpg" alt="message"/>
												</div>
												<div class="media-body">
													<h5>Judy Fowler</h5>
													<p>Dummy text of the printing...</p>
													<div class="meta-tag text-nowrap">
														<time datetime="2016-12-10T20:27:48+07:00" class="text-muted">20 Oct
														</time>
													</div>
													<div class="status offline"></div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="media">
												<div class="media-left float-xs-left">
													<img src="<?php echo base_url(); ?>assets/template/global/image/image4-profile.jpg" alt="message"/>
												</div>
												<div class="media-body">
													<h5>Judy Fowler</h5>
													<p>Dummy text of the printing...</p>
													<div class="meta-tag text-nowrap">
														<time datetime="2016-12-10T20:27:48+07:00" class="text-muted">20 Oct
														</time>
													</div>
													<div class="status online"></div>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="user-dropdown">
							<div class="btn-group">
								<a href="#" class="user-header dropdown-toggle" data-toggle="dropdown" data-animation="slideOutUp" aria-haspopup="true" aria-expanded="false">
									<img src="<?php echo base_url(); ?>assets/template/global/image/user.jpg" alt="Profile image"/>
								</a>
								<div class="dropdown-menu drop-profile">
									<div class="userProfile">
										<img src="<?php echo base_url(); ?>assets/template/global/image/user.jpg" alt="Profile image"/>
										<h5><?php echo $session_name;?></h5>
										<p>milerhussey@yahoo.com</p>
									</div>
									<div class="dropdown-divider"></div>
									<a class="btn left-spacing link-btn" href="#" role="button">Link</a>
									<a class="btn left-second-spacing link-btn" href="#" role="button">Link 2</a>
									<a class="btn btn-primary float-xs-right right-spacing" href="<?php echo base_url(); ?>login/logoutAdmin" role="button">Logout</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="search-overlay">
			<div class="float-default search">
				<div class="search_bg"></div>
				<div class="right-icon search_box">
					<div class="search-div">
						<input type="text" class="search_input">
						<label class="search-input-label">
							<span class="input-label-title">Search</span>
						</label>
					</div>
					<div class="divider50"></div>
					<div class="search-result">
						<div class="search-item">
							<div class="search-image float-xs-left">
								<img src="<?php echo base_url(); ?>assets/template/global/image/guitar.jpg" alt="search-image">
							</div>
							<div class="search-info float-xs-right">
								<h3 class="title">Search here</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus diam quis arcu lobortis sagittis. Etiam eu ornare mi. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
							</div>
						</div>
						<div class="divider15"></div>
						<div class="search-item">
							<div class="search-info search-full float-xs-right">
								<h3 class="title">Admin templates</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus diam quis arcu lobortis sagittis. Etiam eu ornare mi. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
							</div>
						</div>
						<div class="divider15"></div>
						<div class="search-item">
							<div class="search-image float-xs-left">
								<img src="<?php echo base_url(); ?>assets/template/global/image/book-flower.jpg" alt="search-image">
							</div>
							<div class="search-info float-xs-right">
								<h3 class="title">Books</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus diam quis arcu lobortis sagittis. Etiam eu ornare mi. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="search_close icon_close"></div>
			</div>
		</div>


		<section id="main" class="container-fluid">
			<div class="row">

				<aside id="sidebar">
					<div class="sidebar-menu">
						<ul class="nav site-menu" id="site-menu">
							<li class="sub-item <?php if(strpos($_SERVER['REQUEST_URI'], "dashboard") !== false){echo 'active';} ?>">
								<a href="<?php echo base_url(); ?>admin/dashboard">
									<i class="icon_desktop"></i>
									<span>Dashboard</span>
								</a>
							</li>
							<li class="sub-item <?php if(strpos($_SERVER['REQUEST_URI'], "manage_company") !== false){echo 'active';} ?>">
							<a href="<?php echo base_url(); ?>admin/manage_company">
								<i class="icon_building"></i>
								<span>Manage Company</span>
							</a>
						</li>
						<li class="sub-item <?php if(strpos($_SERVER['REQUEST_URI'], "manage_employee") !== false){echo 'active';} ?>">
							<a href="<?php echo base_url(); ?>user/manage_employee">
								<i class="icon_profile"></i>
								<span>Manage Employee</span>
							</a>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">
								<i class="icon_table"></i>
								<span>Timesheet</span>
							</a>
							<ul class="sub-menu">
								<li class="menu-title"><span>Timesheet</span></li>
								<li>
									<a href="index.html">Employee 1</a>
								</li>
								<li>
									<a href="dashboard_v1.html">Employee 2</a>
								</li>
								<li>
									<a href="dashboard_v2.html">Employee 3</a>
								</li>
								<li>
									<a href="dashboard_v3.html">Employee 4</a>
								</li>
							</ul>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">
								<i class="icon_tags_alt"></i>
								<span>Layout</span>
							</a>
							<ul class="sub-menu">
								<li class="menu-title"><span>Layout</span></li>
								<li class="main-item">
									<ul data-plugin="custom-scroll" data-suppress-scroll-x="true" data-height="100%">
										<li class="sub-item">
											<a href="javascript:void(0)"><span>General Pages</span>
												<span class="float-xs-right"><i class="icon_plus"></i></span>
											</a>
											<ul class="submenu-sub">
												<li>
													<a href="userlist.html">Userlist</a>
												</li>
												<li>
													<a href="invoice.html">Invoice</a>
												</li>
												<li>
													<a href="blank.html">Blank</a>
												</li>
												<li>
													<a href="profile.html">Profile</a>
												</li>
												<li>
													<a href="search.html">Search</a>
												</li>
												<li>
													<a href="gallery.html">Gallery</a>
												</li>
												<li>
													<a href="grid.html">Grid</a>
												</li>
												<li>
													<a href="maintenance.html">Maintenance</a>
												</li>
												<li>
													<a href="404.html">404 Page</a>
												</li>
											</ul>
										</li>
										<li class="sub-item">
											<a href="javascript:void(0)"><span>Cookie consent</span>
												<span class="float-xs-right"><i class="icon_plus"></i></span>
											</a>
											<ul class="submenu-sub">
												<li>
													<a href="cookie_consent_v1.html">Cookie consent 1</a>
												</li>
												<li>
													<a href="cookie_consent_v2.html">Cookie consent 2</a>
												</li>
											</ul>
										</li>
										<li class="sub-item">
											<a href="javascript:void(0)"><span>eCommerce</span>
												<span class="float-xs-right"><i class="icon_plus"></i></span>
											</a>
											<ul class="submenu-sub">
												<li>
													<a href="eCommerce_dashboard.html">Dashboard</a>
												</li>
												<li>
													<a href="order.html">Orders</a>
												</li>
												<li>
													<a href="order_view.html">Order view</a>
												</li>
												<li>
													<a href="product.html">Products</a>
												</li>
												<li>
													<a href="products_edit.html">Product edit</a>
												</li>
											</ul>
										</li>
										<li class="sub-item">
											<a href="javascript:void(0)"><span>Maps</span>
												<span class="float-xs-right"><i class="icon_plus"></i></span>
											</a>
											<ul class="submenu-sub">
												<li>
													<a href="google_maps.html">Google map</a>
												</li>
												<li>
													<a href="vector_maps.html">Vector map</a>
												</li>
											</ul>
										</li>
										<li class="sub-item">
											<a href="javascript:void(0)"><span>Users</span>
												<span class="float-xs-right"><i class="icon_plus"></i></span>
											</a>
											<ul class="submenu-sub">
												<li class="sub-item">
													<a href="javascript:void(0)"><span>Login</span>
														<span class="float-xs-right"><i class="icon_plus"></i></span>
													</a>
													<ul class="submenu-sub">
														<li>
															<a href="login_v1.html">Login Page 1</a>
														</li>
														<li>
															<a href="login_v2.html">Login Page 2</a>
														</li>
													</ul>
												</li>
												<li class="sub-item">
													<a href="javascript:void(0)"><span>Register</span>
														<span class="float-xs-right"><i class="icon_plus"></i></span>
													</a>
													<ul class="submenu-sub">
														<li>
															<a href="register_v1.html">Register Page 1</a>
														</li>
														<li>
															<a href="register_v2.html">Register Page 2</a>
														</li>
													</ul>
												</li>
												<li class="sub-item">
													<a href="javascript:void(0)"><span>Lockscreen</span>
														<span class="float-xs-right"><i class="icon_plus"></i></span>
													</a>
													<ul class="submenu-sub">
														<li>
															<a href="lock_screen_v1.html">Lockscreen Page 1</a>
														</li>
														<li>
															<a href="lock_screen_v2.html">Lockscreen Page 2</a>
														</li>
													</ul>
												</li>
												<li class="sub-item">
													<a href="javascript:void(0)"><span>Forgot Password</span>
														<span class="float-xs-right"><i class="icon_plus"></i></span>
													</a>
													<ul class="submenu-sub">
														<li>
															<a href="forgot_password_v1.html">Forgot Password 1</a>
														</li>
														<li>
															<a href="forgot_password_v2.html">Forgot Password 2</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">
								<i class="icon_ribbon_alt"></i>
								<span>Components</span>
							</a>
							<ul class="sub-menu">
								<li class="menu-title"><span>Components</span></li>
								<li class="main-item">
									<ul data-plugin="custom-scroll" data-suppress-scroll-x="true" data-height="100%">
										<li class="sub-item">
											<a href="javascript:void(0)"><span>Basic Ui</span>
												<span class="float-xs-right"><i class="icon_plus"></i></span>
											</a>
											<ul class="submenu-sub">
												<li>
													<a href="cards.html">Cards</a>
												</li>
												<li>
													<a href="buttons.html">Button</a>
												</li>
												<li>
													<a href="switches.html" class="flat-buttons">Switch</a>
												</li>
												<li class="sub-item">
													<a href="javascript:void(0)"><span>Icons</span>
														<span class="float-xs-right"><i class="icon_plus"></i></span>
													</a>
													<ul class="submenu-sub">
														<li>
															<a href="font_awesome.html">Font-Awesome</a>
														</li>
														<li>
															<a href="themify_icons.html">Themify-Icons</a>
														</li>
														<li>
															<a href="7-Stroke_icons.html">7-stroke</a>
														</li>
														<li>
															<a href="weather_icons.html">Weather-Icons</a>
														</li>
														<li>
															<a href="material_icons.html">Material-Design</a>
														</li>
													</ul>
												</li>
												<li class="sub-item">
													<a href="javascript:void(0)"><span>Progress</span>
														<span class="float-xs-right"><i class="icon_plus"></i></span>
													</a>
													<ul class="submenu-sub">
														<li>
															<a href="youtube_progress.html">Youtube</a>
														</li>
														<li>
															<a href="3D_bar_progress.html">3D bar</a>
														</li>
														<li>
															<a href="flate_topbar_progress.html">Flate header</a>
														</li>
														<li>
															<a href="corner_indicator_progress.html">Corner indicator</a>
														</li>
														<li>
															<a href="big_counter.html">Counter</a>
														</li>
														<li>
															<a href="bounce.html">Bounce</a>
														</li>
														<li>
															<a href="loading_bar.html">Loading bar</a>
														</li>
														<li>
															<a href="center_circle.html">Center circle</a>
														</li>
														<li>
															<a href="center_simple.html">Center simple</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="list.html">List</a>
												</li>
												<li>
													<a href="dropdown.html">Dropdown</a>
												</li>
												<li>
													<a href="images.html">Image</a>
												</li>
												<li>
													<a href="modals.html">Modals</a>
												</li>
												<li>
													<a href="scrollable.html">Scrollbar</a>
												</li>
												<li>
													<a href="typography.html">Typography</a>
												</li>
												<li>
													<a href="utilities.html">Utilities</a>
												</li>
												<li>
													<a href="carousel.html">Carousel</a>
												</li>
												<li>
													<a href="color_generator.html">Color Generator</a>
												</li>
												<li>
													<a href="tabs_accordions.html">Tabs &amp; Accordions</a>
												</li>
												<li>
													<a href="badges_tags.html">Badges &amp; Tags</a>
												</li>
												<li>
													<a href="progress_bar.html">Progress Bars</a>
												</li>
											</ul>
										</li>
										<li class="sub-item">
											<a href="javascript:void(0)"><span>Advanced UI</span>
												<span class="float-xs-right"><i class="icon_plus"></i></span>
											</a>
											<ul class="submenu-sub">
												<li>
													<a href="highlight.html">Highlight</a>
												</li>
												<li>
													<a href="bootbox.html">Bootbox</a>
												</li>
												<li>
													<a href="sweetalert.html">Sweetalert</a>
												</li>
												<li>
													<a href="toastr.html">Toastr</a>
												</li>
												<li>
													<a href="tooltip_popover.html">Tooltip &amp; Popover</a>
												</li>
												<li>
													<a href="masonry.html">Masonry</a>
												</li>
												<li>
													<a href="rating.html">Rating</a>
												</li>
												<li>
													<a href="sortable_nestable.html">Sortable &amp; Nestable</a>
												</li>
												<li>
													<a href="lightbox.html">Lightbox</a>
												</li>
												<li>
													<a href="treeview.html">Treeview</a>
												</li>
												<li>
													<a href="context_menu.html">Context Menu</a>
												</li>
												<li>
													<a href="file_manager.html">File Manager</a>
												</li>
											</ul>
										</li>
										<li class="sub-item">
											<a href="javascript:void(0)"><span>Elements</span>
												<span class="float-xs-right"><i class="icon_plus"></i></span>
											</a>
											<ul class="submenu-sub">
												<li>
													<a href="alerts.html">Alerts</a>
												</li>
												<li>
													<a href="ribbon.html">Ribbon</a>
												</li>
												<li>
													<a href="pricing-table.html">Pricing Table</a>
												</li>
												<li>
													<a href="overlay.html">Overlay</a>
												</li>
												<li>
													<a href="step.html">Step</a>
												</li>
												<li>
													<a href="timeline.html">Timeline</a>
												</li>
												<li>
													<a href="testimonial.html">Testimonials</a>
												</li>
												<li>
													<a href="breadcrumbs.html">Breadcrumbs</a>
												</li>
												<li>
													<a href="blockquote.html">Blockquotes</a>
												</li>
												<li>
													<a href="nav.html">Nav</a>
												</li>
												<li>
													<a href="navbar.html">Navbars</a>
												</li>
												<li>
													<a href="pagination.html">Pagination</a>
												</li>
												<li>
													<a href="different_headers.html">Different Headers</a>
												</li>
											</ul>
										</li>
										<li class="sub-item">
											<a href="javascript:void(0)"><span>Chart</span>
												<span class="float-xs-right"><i class="icon_plus"></i></span>
											</a>
											<ul class="submenu-sub">
												<li>
													<a href="morris_chart.html">Morris Chart</a>
												</li>
												<li>
													<a href="sparkline_chart.html">Sparkline Chart </a>
												</li>
												<li>
													<a href="chartist.html">Chartist</a>
												</li>
												<li>
													<a href="gantt_chart.html">Gantt Chart</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">
								<i class="icon_puzzle"></i>
								<span>App</span>
							</a>
							<ul class="sub-menu">
								<li class="menu-title"><span>App</span></li>
								<li class="main-item">
									<ul data-plugin="custom-scroll" data-suppress-scroll-x="true" data-height="100%">
										<li>
											<a href="contact.html">Contacts</a>
										</li>
										<li>
											<a href="calendar.html">Calender</a>
										</li>
										<li class="sub-item">
											<a href="javascript:void(0)"><span>Message</span>
												<span class="float-xs-right"><i class="icon_plus"></i></span>
											</a>
											<ul class="submenu-sub">
												<li>
													<a href="message.html">Message</a>
												</li>
												<li>
													<a href="message_v2.html">Message V2</a>
												</li>
											</ul>
										</li>
										<li class="sub-item">
											<a href="javascript:void(0)"><span>Mailbox</span>
												<span class="float-xs-right"><i class="icon_plus"></i></span>
											</a>
											<ul class="submenu-sub">
												<li>
													<a href="mail_box.html">Inbox</a>
												</li>
												<li>
													<a href="mail_draft.html">Draft</a>
												</li>
												<li>
													<a href="mail_send.html">Sent</a>
												</li>
												<li>
													<a href="mail_archive.html">Archive</a>
												</li>
												<li>
													<a href="mail_trash.html">Trash</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">
								<i class="icon_id"></i>
								<span>Form</span>
							</a>
							<ul class="sub-menu">
								<li class="menu-title"><span>Form</span></li>
								<li class="main-item">
									<ul data-plugin="custom-scroll" data-suppress-scroll-x="true" data-height="100%">
										<li>
											<a href="general_elements.html">General Elements</a>
										</li>
										<li>
											<a href="form_layout.html">Form Layouts</a>
										</li>
										<li>
											<a href="form_validation.html">Form Validation</a>
										</li>
										<li>
											<a href="form_mask.html">Form Masks</a>
										</li>
										<li>
											<a href="advanced_elements.html">Advanced Elements</a>
										</li>
										<li>
											<a href="form_wizard.html">Form Wizard</a>
										</li>
										<li>
											<a href="markdown_editor.html">Markdown Editor</a>
										</li>
										<li>
											<a href="image_cropping.html">Image Cropping</a>
										</li>
										<li>
											<a href="file_upload.html">File Upload</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">
								<i class="icon_table"></i>
								<span>Table</span>
							</a>
							<ul class="sub-menu">
								<li class="menu-title"><span>Table</span></li>
								<li class="main-item">
									<ul data-plugin="custom-scroll" data-suppress-scroll-x="true" data-height="100%">
										<li>
											<a href="basic_table.html">Basic Tables</a>
										</li>
										<li>
											<a href="bootstrap_tables.html">Bootstrap Tables</a>
										</li>
										<li>
											<a href="floatthead.html">floatThead</a>
										</li>
										<li>
											<a href="editable.html">Editable</a>
										</li>
										<li>
											<a href="datatable.html">Datatable</a>
										</li>
										<li>
											<a href="jsgrid.html">jsGrid</a>
										</li>
										<li>
											<a href="responsive_table.html">Responsive Tables</a>
										</li>
										<li>
											<a href="footable.html">Footable</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">
								<i class="icon_wallet"></i>
								<span>Widgets</span>
							</a>
							<ul class="sub-menu">
								<li class="menu-title"><span>Widgets</span></li>
								<li class="main-item">
									<ul data-plugin="custom-scroll" data-suppress-scroll-x="true" data-height="100%">
										<li>
											<a href="social_widget.html">Social Widgets</a>
										</li>
										<li>
											<a href="static_widget.html">Static Widgets</a>
										</li>
										<li>
											<a href="data_widgets.html">Data Widgets</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</aside>