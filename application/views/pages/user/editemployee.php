<title>MIS | </title>
<style type="text/css">
.modal-body { 
	position: static; 
}
</style>
<section id="content-wrapper" class="form-elements" > 

	<div class="site-content-title">
		<h2 class="float-xs-left content-title-main"></h2>

		<ol class="breadcrumb float-xs-right">
			<li class="breadcrumb-item">
				<span class="fs1" aria-hidden="true" data-icon=""></span>
				<!-- <a href="<?php echo $home_path; ?>">Home</a> -->
			</li>
			<li class="breadcrumb-item active"></li>
		</ol>

	</div>
	<div class="contain-inner crm-dashboard"  >
		<div class="row">
			<div class="col-md-12">

				<div class="row">
					<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="dashboard-header content">
							<h4 class="page-content-title">Add Employee</h4>
							<p>Add new employee here and assign credentials for the Company Admin</p>
							<?php 
							 // echo $employee_details['data'][0]->first_name; die();
							 // print_r($employee_details);die();
							if($employee_details && $_GET['employeesdetails']=='true' && $_GET['redirect']=='1'){
								?>
								<!-- alert boxes -->
								<div id="alert_boxes" ng-bind-html="message"></div>
								<form id="edit_EmployeeForm<?php echo $employee_details['data'][0]->user_id;?>" name="edit_EmployeeForm<?php echo $employee_details['data'][0]->user_id;?>" method="post" role="form" enctype="multipart/form-data">
									<div  id="service_err"></div>
									<div class="row">
										<div class="col-xs-12 col-lg-6">
											<label>First Name</label>
											<div class="form-group">
												<input type="text" name="first_name" class="form-control" placeholder="Enter First Name"value="<?php echo $employee_details['data'][0]->first_name; ?>"required>
											</div>
										</div>									
										<div class="col-xs-12 col-lg-6">
											<label>Last Name</label>
											<div class="form-group">
												<input class="form-control" name="last_name" value="<?php echo $employee_details['data'][0]->last_name; ?>" type="text" placeholder="Enter Last Name" required>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-12 col-lg-6">
											<label>Email Id</label>
											<div class="form-group">
												<input  class="form-control" type="email"  value="<?php echo $employee_details['data'][0]->user_email; ?>" placeholder="Enter Email Id" disabled>
											</div>
										</div>
										<div class="col-xs-12 col-lg-6">
											<label>Salary</label>
											<div class="form-group">
												<input class="form-control" type="number" name="emp_salary" value="<?php echo $employee_details['data'][0]->salary; ?>" placeholder="Enter Salary" required>
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-xs-12 col-lg-6">
											<label>Skills Required</label>
											<?php $skilArr=json_decode($employee_details['data'][0]->skills); 
											//print_r($skilArr);?>
											<div class="form-group">

												<select  class="js-example-tags form-control"  multiple name="emp_skill[]">
													<?php 
													foreach ($skills as $key) {
														?>
														<option <?php if(in_array($key['skill_name'], $skilArr)){echo 'selected';} ?> value="<?php echo $key['skill_name']; ?>"><?php echo $key['skill_name']; ?></option>
														<?php	
													}
													?>
												</select>
											</div>
										</div>									
										<div class="col-xs-12 col-lg-6">
											<label>Select Designation</label>
											<div class="form-group">
												<select name="designation"  class="js-example-tags form-control"  >
													<option value="<?php echo $employee_details['data'][0]->designation; ?>" >
														<?php echo $employee_details['data'][0]->designation ?></option>
														<?php 
														if($designation){
															foreach ($designation as $key) {echo $key['designation_name'];
															echo '<option value="'.$key['designation_name'].'">'.$key['designation_name'].'</option>';
														}
													}
													?>
												</select>
											</div>
										</div> 
									</div>


									<div class="form-group" style="text-align:center;" >
										<button type="submit" id="btnsubmit" class="btn btn-primary site-btn center">Update Employee Details</button>
									</div>
								</form>
								<?php 
							}
							else{
								?>
								<div class="col-md-12 w3-padding">
									<center>
										<h3><i class="fa fa-warning"></i> Employee Data! No data found.</h3>
									</center>
								</div>
								<?php 

							}
							?>
						</div>
					</div>

				</div>
			</div>

			
			<script type="text/javascript">
				$(function () {
                            $("#edit_EmployeeForm<?php echo $employee_details['data'][0]->user_id;?>").submit(function (e) {
                                 e.preventDefault();
                                 dataString = $("#edit_EmployeeForm<?php echo $employee_details['data'][0]->user_id;?>").serialize();
                                 alert( dataString);
                             $('#btnsubmit').html('<span class="w3-card w3-padding-small w3-margin-bottom w3-round"><i class="fa fa-spinner fa-spin w3-large"></i> <b>Updating Service. Hang on...</b></span>');
                             $.ajax({
                                       type: "POST",
                                        url: "<?php echo base_url(); ?>user/manage_employee/update_employee",
                                        data: new FormData(this),
                                        contentType: false,
                                        cache: false,
                                        processData: false,
                                        success: function (data)
                                        {
                                            console.log(data);return false;
                                            $('#service_err').html(data);
                                            $('#btnsubmit').html('<span>Update Service</span>');
                                        }
                                    });
                                    return false;  //stop the actual form post !important!
                                });
                            });

			</script>