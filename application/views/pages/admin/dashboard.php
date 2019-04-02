<title>MIS | <?php echo $title; ?></title>
<section id="content-wrapper" class="form-elements">
 
<div class="site-content-title">
<h2 class="float-xs-left content-title-main"><?php echo $title; ?></h2>
 
<ol class="breadcrumb float-xs-right">
<li class="breadcrumb-item">
<span class="fs1" aria-hidden="true" data-icon=""></span>
<a href="<?php echo $home_path; ?>">Home</a>
</li>
<li class="breadcrumb-item active"><?php echo $title; ?></li>
</ol>
 
</div>
 
 
<div class="contain-inner crm-dashboard">
<div class="row">
<div class="col-md-12">
<div class="row">
<div class="col-md-12 static-widget-content">
<div class="static-widget-box crl-dashboard-box">
<div class="row">
<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
<div class="widget-box">
<div class="widget-info">
<div class="widget-content">
<h5 class="crm-title text-xs-center">New customers</h5>
<div class="text-xs-center">
<input data-plugin="jknob" type="text" data-angleArc=360 data-bgColor="rgba(255,72,89,0.1)" data-fgColor="#087380" data-thickness=".2" value="90" data-end="90" data-width="100" data-height="100" data-readonly="true">
</div>
<div class="striped-progress-bar">
<h6 class="progress-title">Today</h6>
<progress class="progress progress-striped progress-info progress-sm" value="55" max="100"></progress>
<h6 class="progress-title">Yesterday</h6>
<progress class="progress progress-striped progress-danger progress-sm" value="75" max="100"></progress>
</div>
</div>
</div>
</div>
</div>
<div class="divider-xs-spacing"></div>
<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
<div class="widget-box">
<div class="widget-info">
<div class="widget-content">
<h5 class="crm-title text-xs-center">Total deal</h5>
<div class="text-xs-center sparkline-mobile">
<div class="stackline-bar">
15,20,34,56,78,23,90,13,50,20,45
</div>
</div>
<div class="striped-progress-bar">
<h6 class="progress-title">Today</h6>
<progress class="progress progress-striped progress-info progress-sm" value="20" max="100"></progress>
<h6 class="progress-title">Yesterday</h6>
<progress class="progress progress-striped progress-danger progress-sm" value="35" max="100"></progress>
</div>
</div>
</div>
</div>
</div>
<div class="divider-xs-spacing divider-lg-spacing"></div>
<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
<div class="widget-box">
<div class="widget-info">
<div class="widget-content">
<h5 class="crm-title text-xs-center">Total budget</h5>
<div class="text-xs-center sparkline-mobile">
<div class="sparkline-pie">20,30,40</div>
</div>
<div class="striped-progress-bar">
<h6 class="progress-title">Today</h6>
<progress class="progress progress-striped progress-info progress-sm" value="80" max="100"></progress>
<h6 class="progress-title">Yesterday</h6>
<progress class="progress progress-striped progress-danger progress-sm" value="55" max="100"></progress>
</div>
</div>
</div>
</div>
</div>
<div class="divider-xs-spacing"></div>
<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
<div class="widget-box">
<div class="widget-info">
<div class="widget-content">
<h5 class="crm-title text-xs-center">Total earning</h5>
<div class="text-xs-center sparkline-mobile">
<div class="sparkline-inlinerange">1, 4, 3, 3, 2, 5, 6,
3
</div>
</div>
<div class="striped-progress-bar">
<h6 class="progress-title">Today</h6>
<progress class="progress progress-striped progress-info progress-sm" value="65" max="100"></progress>
<h6 class="progress-title">Yesterday</h6>
<progress class="progress progress-striped progress-danger progress-sm" value="95" max="100"></progress>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="dashboard-header content">
<h4 class="page-content-title float-xs-left">Sales statistics</h4>
<div class="dashboard-action">
<ul class="right-action float-xs-right">
<li data-widget="collapse">
<a aria-hidden="true" href="javascript:void(0)">
<span aria-hidden="true" class="icon_minus-06"></span>
</a>
</li>
<li data-widget="close">
<a href="javascript:void(0)">
<span aria-hidden="true" class="icon_close"></span>
</a>
</li>
</ul>
</div>
<div class="dashboard-box crm-chart">
<div id="linestogglingLegend" class="chart-box"></div>
<div id="linestoggling"></div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="dashboard-header content">
<h4 class="page-content-title float-xs-left">Order survey</h4>
<div class="dashboard-action">
<ul class="right-action float-xs-right">
<li data-widget="collapse">
<a aria-hidden="true" href="javascript:void(0)">
<span aria-hidden="true" class="icon_minus-06"></span>
</a>
</li>
<li data-widget="close">
<a href="javascript:void(0)">
<span aria-hidden="true" class="icon_close"></span>
</a>
</li>
</ul>
</div>
<div class="dashboard-box">
<div id="order-chart"></div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="overlay-box-shadow">
<div class="icon-plus-overlay">
<img src="<?php echo base_url(); ?>assets/template/global/image/crm-product.jpg" alt="images">
<div class="icon-overlay-text">
<div class="text-overlay-wrapper">
<div class="text-overlay-description">
<p>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-facebook"></i></a>
</p>
<hr>
<hr>
<p class="set2">
<a href="#"><i class="fa fa-instagram"></i></a>
<a href="#"><i class="fa fa-dribbble"></i></a>
</p>
</div>
</div>
</div>
</div>
<div class="overlay-box-title">
<h4 class="page-content-title text-light-primary">Featured product</h4>
<p>Nor again is there anyone who loves or pursues or desires.</p>
<div class="widget-footer">
<div class="row">
<div class="col-xs-8">
<div class="widget-icon crm-icon-dashboard">
<a href="#" class="text-xs-center icon-spacing">
<i class="icon icon_like"></i><span>47</span>
</a>
<a href="#" class="text-xs-center icon-spacing">
<i class="icon icon_comment_alt"></i><span>85</span>
</a>
</div>
</div>
<div class="col-xs-4">
<div class="text-xs-right">
<button class="btn btn-primary site-btn m-0">View
</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="dashboard-header content">
<h4 class="page-content-title float-xs-left">Your goal progress (month)</h4>
<div class="dashboard-action">
<ul class="right-action float-xs-right">
<li data-widget="collapse"><a aria-hidden="true" href="javascript:void(0)"><span aria-hidden="true" class="icon_minus-06"></span></a></li>
<li data-widget="close"><a href="javascript:void(0)"><span aria-hidden="true" class="icon_close"></span></a></li>
</ul>
</div>
<div class="dashboard-box">
<div id="straight-line-chart"></div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="dashboard-header content">
<h4 class="page-content-title float-xs-left">Week sales standings</h4>
<div class="dashboard-action">
<ul class="right-action float-xs-right">
<li data-widget="collapse"><a aria-hidden="true" href="javascript:void(0)"><span aria-hidden="true" class="icon_minus-06"></span></a></li>
<li data-widget="close"><a href="javascript:void(0)"><span aria-hidden="true" class="icon_close"></span></a></li>
</ul>
</div>
<div class="dashboard-box">
<div id="sales-data-chart"></div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="dashboard-header content">
<h4 class="page-content-title float-xs-left">Deals review</h4>
<div class="dashboard-action">
<ul class="right-action float-xs-right">
<li data-widget="collapse"><a aria-hidden="true" href="javascript:void(0)"><span aria-hidden="true" class="icon_minus-06"></span></a></li>
<li data-widget="close"><a href="javascript:void(0)"><span aria-hidden="true" class="icon_close"></span></a></li>
</ul>
</div>
<div class="dashboard-box content-list">
<div class="list-group message-list-group">
<a href="#" class="list-group-item">
<div class="list-image float-xs-left">
<img src="<?php echo base_url(); ?>assets/template/global/image/image5-profile.jpg" alt="contact"/>
</div>
<div class="list-message float-xs-left">
<span class="float-xs-right">yesterday</span>
<h6>Henry</h6>
<p>Elementum eu lorem senectus volutpat facilisi quam
dignissim potenti enim posuere conubia eu aenean
Sapien ultricies mattis tellus semper blandit.</p>
</div>
</a>
<a href="#" class="list-group-item">
<div class="list-image float-xs-left">
<img src="<?php echo base_url(); ?>assets/template/global/image/image2-profile.jpg" alt="contact"/>
</div>
<div class="list-message float-xs-left">
<span class="float-xs-right">5 hour ago</span>
<h6>Suzi</h6>
<p>Rhoncus neque per porta. Suspendisse ultricies risus,
iaculis egestas eget tristique elementum mattis sem
venenatis nascetur orci natoque aptent cursus.</p>
</div>
</a>
<a href="#" class="list-group-item">
<div class="list-image float-xs-left">
<img src="<?php echo base_url(); ?>assets/template/global/image/image-profile.jpg" alt="contact"/>
</div>
<div class="list-message float-xs-left">
<span class="float-xs-right">3 hour ago</span>
<h6>Jenny</h6>
<p>Convallis risus. Praesent nec nascetur varius
senectus aptent elit elementum auctor quis suscipit,
curae; tempor varius maecenas viverra tempus
cum.</p>
</div>
</a>
<a href="#" class="list-group-item">
<div class="list-image float-xs-left">
<img src="<?php echo base_url(); ?>assets/template/global/image/image1-profile.jpg" alt="contact"/>
</div>
<div class="list-message float-xs-left">
<span class="float-xs-right">Just now</span>
<h6>John</h6>
<p>Elementum eu lorem senectus volutpat facilisi quam
dignissim potenti enim posuere conubia eu aenean
Sapien ultricies mattis tellus semper blandit.</p>
</div>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-8 col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="dashboard-header content">
<h4 class="page-content-title float-xs-left">Sales details</h4>
<div class="dashboard-action">
<ul class="right-action float-xs-right">
<li data-widget="collapse">
<a aria-hidden="true" href="javascript:void(0)">
<span aria-hidden="true" class="icon_minus-06"></span>
</a>
</li>
<li data-widget="close">
<a href="javascript:void(0)">
<span aria-hidden="true" class="icon_close"></span>
</a>
</li>
</ul>
</div>
<div class="dashboard-box">
<div class="basic_table basic_table_responsive table-responsive">
<table class="table crm-table">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Popularity</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>0</td>
<td>Edmund Wong</td>
<td>Edmund@example.com</td>
<td>
<div class="sparkline-mobile">
<div class="sparkline-line">6,9,8,4,6,7,4</div>
</div>
</td>
<td><span class="tag square-tag tag-success">Online</span></td>
<td>
<span class="basic_table_icon"><i class="icon icon_pencil"></i></span>
<span class="basic_table_icon"><i class="icon icon_trash"></i></span>
</td>
</tr>
<tr>
<td>1</td>
<td>Mark Otto</td>
<td>Mark@example.com</td>
<td>
<div class="sparkline-mobile">
<div class="sparkline-line">2,5,6,4,8,9,8</div>
</div>
</td>
<td><span class="tag square-tag tag-danger">Offline</span></td>
<td>
<span class="basic_table_icon"><i class="icon icon_pencil"></i></span>
<span class="basic_table_icon"><i class="icon icon_trash"></i></span>
</td>
</tr>
<tr>
<td>2</td>
<td>Larry the Bird</td>
<td>Larry@example.com</td>
<td>
<div class="sparkline-mobile">
<div class="sparkline-line">4,8,7,5,8,9,3</div>
</div>
</td>
<td><span class="tag square-tag tag-success">Online</span></td>
<td>
<span class="basic_table_icon"><i class="icon icon_pencil"></i></span>
<span class="basic_table_icon"><i class="icon icon_trash"></i></span>
</td>
</tr>
<tr>
<td>3</td>
<td>Harvinder Singh</td>
<td>Harvinder@example.com</td>
<td>
<div class="sparkline-mobile">
<div class="sparkline-line">2,3,5,5,6,7,8</div>
</div>
</td>
<td><span class="tag square-tag tag-danger">Offline</span></td>
<td>
<span class="basic_table_icon"><i class="icon icon_pencil"></i></span>
<span class="basic_table_icon"><i class="icon icon_trash"></i></span>
</td>
</tr>
<tr>
<td>4</td>
<td>Terry Khoo</td>
<td>Terry@example.com</td>
<td>
<div class="sparkline-mobile">
<div class="sparkline-line">5,4,5,8,7,4,3</div>
</div>
</td>
<td><span class="tag square-tag tag-danger">Offline</span></td>
<td>
<span class="basic_table_icon"><i class="icon icon_pencil"></i></span>
<span class="basic_table_icon"><i class="icon icon_trash"></i></span>
</td>
</tr>
<tr>
<td>5</td>
<td>Jacob Thornton</td>
<td>Jacob@example.com</td>
<td>
<div class="sparkline-mobile">
<div class="sparkline-line">9,7,6,5,6,3,7</div>
</div>
</td>
<td><span class="tag square-tag tag-success">Online</span></td>
<td>
<span class="basic_table_icon"><i class="icon icon_pencil"></i></span>
<span class="basic_table_icon"><i class="icon icon_trash"></i></span>
</td>
</tr>
<tr>
<td>6</td>
<td>Nicky Almera</td>
<td>Nicky@example.com</td>
<td>
<div class="sparkline-mobile">
<div class="sparkline-line">1,5,4,3,8,9,6</div>
</div>
</td>
<td><span class="tag square-tag tag-danger">Offline</span></td>
<td>
<span class="basic_table_icon"><i class="icon icon_pencil"></i></span>
<span class="basic_table_icon"><i class="icon icon_trash"></i></span>
</td>
</tr>
<tr>
<td>7</td>
<td>Jacob Almera</td>
<td>Jacob@example.com</td>
<td>
<div class="sparkline-mobile">
<div class="sparkline-line">8,4,2,7,6,4,1</div>
</div>
</td>
<td><span class="tag square-tag tag-danger">Offline</span></td>
<td>
<span class="basic_table_icon"><i class="icon icon_pencil"></i></span>
<span class="basic_table_icon"><i class="icon icon_trash"></i></span>
</td>
</tr>
<tr>
<td>8</td>
<td>Terry Almera</td>
<td>Terry@example.com</td>
<td>
<div class="sparkline-mobile">
<div class="sparkline-line">4,9,2,7,1,8,3</div>
</div>
</td>
<td><span class="tag square-tag tag-danger">Offline</span></td>
<td>
<span class="basic_table_icon"><i class="icon icon_pencil"></i></span>
<span class="basic_table_icon"><i class="icon icon_trash"></i></span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="dashboard-header content">
<h4 class="page-content-title float-xs-left">Accounts by industry</h4>
<div class="dashboard-action">
<ul class="right-action float-xs-right">
<li data-widget="collapse">
<a aria-hidden="true" href="javascript:void(0)">
<span aria-hidden="true" class="icon_minus-06"></span>
</a>
</li>
<li data-widget="close">
<a href="javascript:void(0)">
<span aria-hidden="true" class="icon_close"></span>
</a>
</li>
</ul>
</div>
<div class="dashboard-box">
<div id="left-right-chart"></div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="dashboard-header content">
<h4 class="page-content-title float-xs-left">World wide visitor map</h4>
<div class="dashboard-action">
<ul class="right-action float-xs-right">
<li data-widget="collapse">
<a aria-hidden="true" href="javascript:void(0)">
<span aria-hidden="true" class="icon_minus-06"></span>
</a>
</li>
<li data-widget="close">
<a href="javascript:void(0)">
<span aria-hidden="true" class="icon_close"></span>
</a>
</li>
</ul>
</div>
<div class="dashboard-box">
<div class="row">
<div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="mapcontainer crm-mapcontainer">
<div class="map"></div>
</div>
</div>
<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="map-right-section">
<h4 class="text-light-primary">Total visitor</h4>
<h2>15,264 <span class="float-xs-right text-light-danger"><i class="fa fa-level-down"></i> 20.18%</span></h2>
<h4 class="text-light-primary">Page Impression</h4>
<h2 class="crm-map-margin">4,504 <span class="float-xs-right text-light-success"><i class="fa fa-level-up"></i> 15.40%</span></h2>
</div>
<canvas id="crm-chart"></canvas>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
 
</section>
