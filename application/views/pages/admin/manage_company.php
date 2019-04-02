<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/global/plugins/datatables/media/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/global/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"/>
<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/global/plugins/datatables-scroller/css/scroller.bootstrap4.min.css"/> -->

<title>MIS | <?php echo $title; ?></title>
<section id="content-wrapper" class="form-elements" ng-app="companyApp" ng-controller="companyCtrl"> 

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

	<div class="contain-inner crm-dashboard"  >
		<div class="row">
			<div class="col-md-12">

				<div class="row">
					<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- <?php echo base64_decode('c2FtcmF0MTIzNA=='); ?> -->
						
						<div class="dashboard-header content">
							<h4 class="page-content-title">Add Company</h4>
							<p>Add new Company here and assign credentials for the Company Admin</p>
							<!-- alert boxes -->
							<div id="alert_boxes" ng-bind-html="message"></div>
							<form ng-submit="submitCompany()" >
								<div class="row">
									<div class="col-xs-12">
										<label>Company Name</label>
										<div class="form-group">
											<input type="text" class="form-control" ng-model="companyFormData.company_name" placeholder="Enter Company fullname" required>
										</div>
									</div>
								</div>
								
								<div class="row">																		
									<div class="col-xs-6">
										<label>Company Email</label>
										<div class="form-group">
											<input class="form-control" ng-model="companyFormData.company_email" type="email" placeholder="Enter Company Admin email" required>
											<span style="color: red;font-size: 12px">Note: password will be send to above mentioned email ID</span>
										</div>

									</div>
									<div class="col-xs-6">
										<label>Membership Package</label>
										<div class="form-group">
											<select class="form-control" ng-model="companyFormData.company_package">
												<option value="" ng-if="false"></option>
												<option value="0"  style="background-color: #BEBDC2;color: white" selected>Select Package</option>
												<?php 
												if($package){
													foreach ($package as $key) {
														echo '<option value="'.$key['package_id'].'">'.$key['pkg_name'].' <i>(<span class="fa fa-inr"></span> '.$key['pkg_price'].' - '.$key['pkg_validity'].' '.$key['pkg_period'].')</i></option>';
													}
												}
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group" style="text-align:center;" >
									<button type="submit" class="btn btn-primary btn-md site-btn center"><span ng-hide="createButtonText == 'Create Company'" ng-disabled="true"><i class="fa fa-circle-o-notch fa-spin"></i></span> {{createButtonText}}</button>
								</div>
							</form>

						</div>
					</div>

					<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="dashboard-header content">
							<h4 class="page-content-title">Company Settings</h4>
							<p>Add new designation here</p>
							<div class="w3-card w3-padding" id="skill" >
								<div class="w3-container w3-white">
									<div class="row w3-margin-top">
										<form ng-submit="submit()" method="POST">
											<div class="col-xs-9">
												<label>Designation Name</label>
												<div class="form-group">
													<input type="text" ng-model="skillname" class="form-control w3-small"  required>
												</div>
											</div>
											<div class="col-xs-3">
												<label></label>
												<div class="form-group">
													<button class="btn btn-primary theme_bg btn-block" type="submit"><i class="fa fa-plus "></i></button>
												</div>
											</div>
										</form>
									</div>
									<div class="row w3-padding" style="height:250px; overflow: auto;">
										<div class="col-lg-12 col-xs-12 col-md-12 w3-padding" ng-repeat='skill in skills'>
											<span>{{skill.designation_name}} </span>
											<a type="btn" ng-click="delskill(skill.designation_id)" class="w3-right" ><i class="fa fa-times w3-text-black"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end skill div -->
					</div>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="row">
				<div class="col-md-12">
					<h4 class="page-content-title">Company List</h4>
					<p>All the online/ offline companies are listed below</p>
					<div class="row">
						<table data-plugin="datatable" data-responsive="true" class="table table-striped table-hover dt-responsive">
							<thead>
								<tr>
									<th>No.</th>
									<th>Company Name</th>
									<th>Email</th>
									<th>Membership</th>
									<th>Created date</th>
									<th>Expiry date</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								if($companies['status']==1){
									for ($i=0; $i <count($companies['data']) ; $i++) { ?>
										<tr>
											<td><?php echo $i+1; ?>.</td>
											<td><?php echo $companies['data'][$i]['company_name']; ?></td>
											<td><?php echo $companies['data'][$i]['user_email']; ?></td>
											<td><?php echo $companies['data'][$i]['pkg_name']; ?></td>
											<td><?php echo date('d M Y',strtotime($companies['data'][$i]['created_date'])); ?></td>
											<td><?php echo date('d M Y',strtotime($companies['data'][$i]['expiry_date'])); ?></td>
											<td>
												<?php echo ($companies['data'][$i]['status']==1)?'<span class="tag square-tag tag-success">Online</span>':'<span class="tag square-tag tag-danger">Offline</span>'; ?>
											</td>
											<td>
												<!-- <a ng-click="selUser(<?php echo $companies['data'][$i]['company_id']; ?>)" class="btn responsive_table_icon" style="padding: 0"><i class="icon icon_pencil"></i></a> -->
												<a data-toggle="modal" data-target="#formmodal" class="btn responsive_table_icon" style="padding: 0"><i class="icon icon_trash"></i></a>
											</td>
										</tr>
										<?php
									}
								}
								?>
							</tbody>
						</table>
						<div class="modal fade" id="formmodal" tabindex="-1" role="dialog" aria-labelledby="formmodal" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<h4 class="modal-title">Edit Company</h4>
									</div>
									<div class="modal-body">
										<div class="container">
											<div class="col-lg-12 m-2" style="text-align: center;" ng-show="loadEditCompanyForm">
												<h6><span class="fa fa-refresh fa-spin"></span> Loading data. Please wait...</h6>
											</div>
											
											<form ng-show="editCompanyForm" id="editCompany">												
												<div class="col-lg-12">
													<label>Company Name</label>
													<div class="form-group">
														<input type="text" class="form-control" name="editCompany_name" ng-value="editCompany_name" ng-model="editcompanyFormData.editcompany_name" placeholder="Enter Company fullname" required>
													</div>
												</div>
												<div class="col-lg-6">
													<label>Company Email</label>
													<div class="form-group">
														<input class="form-control" ng-model="editcompanyFormData.editcompany_email" name="editCompany_email" ng-value="editCompany_email" type="email" placeholder="Enter Company Admin email" required>
														<span style="color: red;font-size: 12px">Note: password will be send to above mentioned email ID</span>
													</div>
												</div>
												<div class="col-lg-6">
													<label>Membership Package</label>
													<div class="form-group">
														<select class="form-control" name="editCompany_pkg" id="editCompanyPackage" ng-model="editcompanyFormData.editcompany_package">
															<option value="" ng-if="false"></option>
															<option value="0"  style="background-color: #BEBDC2;color: white" selected>Select Package</option>
															<?php 
															if($package){
																foreach ($package as $key) {
																	echo '<option value="'.$key['package_id'].'" id="selectedPackage_'.$key['package_id'].'">'.$key['pkg_name'].' <i>(<span class="fa fa-inr"></span> '.$key['pkg_price'].' - '.$key['pkg_validity'].' '.$key['pkg_period'].')</i></option>';
																}
															}
															?>
														</select>
													</div>												
												</div>
												<div id="editMessage"></div>
												
												<div class="col-lg-12 m-2" style="text-align: center;">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="submit" id="editCompanyBtn" class="btn btn-primary"> Save changes </button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<script>
			var companyApp = angular.module('companyApp', ['ngSanitize']);
			companyApp.controller('companyCtrl', function ($scope, $http, $timeout, $window) {
				$scope.typePassword=0;
				$scope.createButtonText = "Create Company";
				$scope.editButtonText = "Save changes";
				$scope.test = "false";
				$scope.disableSubmit = "false";
				

			// hide/ show password script
			$scope.togglePassword = function () { 
				$scope.typePassword = !$scope.typePassword; 
			};

			$('#formmodal').on('hidden.bs.modal', function (e) {
				$scope.editCompanyForm=false;
				$scope.loadEditCompanyForm=false;
				$scope.editCompany_name='';
				$scope.editCompany_email='';
			})


			// open edit modal and fetch company details
			$scope.selUser=function(user_id){
				$('#formmodal').modal('show');
				$scope.loadEditCompanyForm=true;
				$timeout(function(){
				// get company details api
				$http({
					method: 'GET',
					url: '<?php echo base_url(); ?>api/v1/admin/company_api/getCompanyDetail/'+btoa(user_id),
					headers: {'Content-Type': 'application/json'},
				}).then(function (data) {
					// populate edit form values
					$scope.loadEditCompanyForm=false;
					$scope.editCompanyForm=true;
					$('#editCompanyPackage').val(data.data.data[0].package_id).change();
					$scope.editCompany_name=data.data.data[0].company_name;
					$scope.editCompany_email=data.data.data[0].user_email;
				});
			}, 2000);
				return false;
				// $scope.selected_user=user;
			}

		// script to submit company create form data
		$scope.submitCompany = function ()
		{
			$scope.disableSubmit = "true";
			$scope.createButtonText = "Creating Company";
			$scope.message = '';
			$timeout(function(){
				// POST form data to controller
				$http({
					method: 'POST',
					url: '<?php echo base_url(); ?>admin/manage_company/create_company',
					headers: {'Content-Type': 'application/json'},
					data: $scope.companyFormData
				}).then(function (data) {
            	// console.log(data.data);return false;
            	$scope.message=data.data;
            });
				$scope.createButtonText = "Create Company";
				$scope.disableSubmit = "false";
			}, 2000);
			return false;
		};

// get all company details api
$scope.getCompanies = function(){
	$http({
		method: 'get',
		url: '<?php echo base_url(); ?>api/v1/admin/company_api/allcompanies'
	}).then(function successCallback(response) {

		$scope.allCompanies=response.data.data;
				//console.log($scope.allCompanies);return false;
			});
};
		// $scope.getCompanies();
// --------add user designation
            $scope.submit = function () {           // POST form data to controller
            	$http({
            		method: 'POST',
            		url: '<?php echo base_url(); ?>admin/manage_company/add_designation',
            		headers: {'Content-Type': 'application/json'},
            		data: JSON.stringify({skillname: $scope.skillname})
            	}).then(function (data) {

            		$scope.skillname = '';
            		$scope.getUsers();
            	});
            };

    //---------show all designation
    $scope.getUsers = function(){
    	$http({
    		method: 'get',
    		url: '<?php echo base_url(); ?>admin/manage_company/show_designation'
    	}).then(function successCallback(response) {
    // Assign response to skills object
    console.log(response.data);
    $scope.skills = response.data['status_message'];
});
    };
    $scope.getUsers();

    //---del designation
    $scope.delskill = function(designation_id){
    	$http({
    		method: 'get',
    		url: '<?php echo base_url(); ?>admin/manage_company/del_designation?designation_id=' + designation_id
    	}).then(function successCallback(response) {
   // alert(response);
    // Assign response to skills object
    console.log(response);
    //$scope.skills = response.data;
    $scope.getUsers();
});
    };
});

</script>

