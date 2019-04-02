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
							<!-- alert boxes -->
							<div id="alert_boxes" ng-bind-html="message"></div>
							<form id="add_EmployeeForm" name="add_EmployeeForm" method="post" role="form" enctype="multipart/form-data">
								<div  id="service_err"></div>
								<div class="row">
									<div class="col-xs-12 col-lg-6">
										<label>First Name</label>
										<div class="form-group">
											<input type="text" name="first_name" class="form-control" placeholder="Enter First Name" required>
										</div>
									</div>									
									<div class="col-xs-12 col-lg-6">
										<label>Last Name</label>
										<div class="form-group">
											<input class="form-control" name="last_name" type="text" placeholder="Enter Last Name" required>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-xs-12 col-lg-6">
										<label>Email Id</label>
										<div class="form-group">
											<input  class="form-control" type="email" name="user_email" placeholder="Enter Email Id" required>
										</div>
									</div>
									<div class="col-xs-12 col-lg-6">
										<label>Salary</label>
										<div class="form-group">
											<input class="form-control" type="number" name="emp_salary" placeholder="Enter Salary" required>
										</div>
									</div>
									
								</div>
								<div class="row">
									<div class="col-xs-12 col-lg-6">
										<label>Skills Required</label>
										<div class="form-group">
											<select  class="js-example-tags form-control" multiple name="emp_skill[]">
												<option value="0" >Select skill</option>
												<?php 
												if($skills){
													foreach ($skills as $key) {echo $key['skill_name'];
													echo '<option value="'.$key['skill_name'].'">'.$key['skill_name'].'</option>';
												}
											}
											?>
										</select>
									</div>
								</div>									
								 <div class="col-xs-12 col-lg-6">
									<label>Select Designation</label>
									<div class="form-group">
										<select name="designation"  class="js-example-tags form-control"  >
											<option value="0" >Select Designation</option>
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
							<button type="submit" id="btnsubmit" class="btn btn-primary site-btn center">Submit</button>
						</div>
					</form>

				</div>
			</div>
			
		</div>
	</div>
	<!-- div for all employee table -->
			
				<div class="col-md-12">
					<h4 class="page-content-title">Employee List</h4>
					<p>All the online/ offline companies are listed below</p>
					<div class="row">
						<table data-plugin="datatable" data-responsive="true" class="table table-striped table-hover dt-responsive">
							<thead>
								<tr>
									<th>No.</th>
									<th>Name</th>
									<th>Email</th>
									<th>Designation</th>
									<th>Created date</th>
									<th>Expiry date</th>
									
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								if($employees['status']==1){
									for ($i=0; $i <count($employees['data']) ; $i++) { ?>
										<tr>
											<td><?php echo $i+1; ?>.</td>
											<td><?php echo $employees['data'][$i]['first_name'] .' '. $employees['data'][$i]['last_name']; ?></td>
											<td><?php echo $employees['data'][$i]['user_email']; ?></td>
											<td><?php echo $employees['data'][$i]['designation']; ?></td>
											<td><?php echo date('d M Y',strtotime($employees['data'][$i]['created_date'])); ?></td>
											<td><?php echo date('d M Y',strtotime($employees['data'][$i]['salary'])); ?></td>
											<!-- <td><?php echo ($employees['data'][$i]['last_name']==1)?'<span class="tag square-tag tag-success">Online</span>':'<span class="tag square-tag tag-danger">Offline</span>'; ?></td> -->
											<td class="responsive_icon_main"><span class="tablesaw-cell-content">
												 <a href="<?php echo base_url(); ?>user/Manage_employee/editemployee/<?php echo $employees['data'][$i]['user_id']; ?>?employeesdetails=true&redirect=1" class="btn w3-padding-small" title="Update Employee Details">
                                            <i class="w3-text-green w3-xlarge fa fa-edit"></i>

                                        </a>                   

                                        </a>

                                        <a class="btn w3-padding-small" onclick="deleteEmployeeDetails(<?php echo $employees['data'][$i]['user_id']; ?>)" title="Delete Employee">
                                            <i class="w3-text-red w3-xlarge fa fa-close"></i>
                                        </a>
											</span></td>
											<!-- <td><span class="text-success">Online</span></td> -->
										</tr>
										<!-- end div for employee -->
			        <!-- Modal -->
                        <div id="updateEmpModal_<?php echo $employees['data'][$i]['user_id']; ?>" class="modal" role="dialog">
                            <form id="updateEmpForm_<?php echo $employees['data'][$i]['user_id']; ?>" name="updateEmpForm_<?php echo $employees['data'][$i]['user_id']; ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-dialog modal-lg">
                                <!----------------------------------- Modal content------------------------------------>
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Update Employee Details</h4>
                                        </div>
                                        <!----------------------------------- Modal Body------------------------------------>                                        
                                        <div class="modal-body">
                                            <div class="container page_title" style="margin-top: 0px;margin-bottom: 0px;">
                                                <!--                                                <fieldset>-->
                                                <div class="row" style=" margin-top: 5px;">
                                                    <div class="col-lg-1"></div>
                                                    <div class="col-lg-10">
                                                        <div class="">
                                                       
                                       <div class="w3-col l12 w3-margin-bottom">
                                         <div class="row">
										<div class="col-xs-12 col-lg-6">
										<label>First Name</label>
										<div class="form-group">
											<input type="text" name="first_name" class="form-control" value="<?php echo $employees['data'][$i]['first_name']; ?>" placeholder="Enter First Name" required>
										</div>
										</div>									
										<div class="col-xs-12 col-lg-6">
										<label>Last Name</label>
										<div class="form-group">
											<input class="form-control" name="last_name" value="<?php echo $employees['data'][$i]['last_name']; ?>" type="text" placeholder="Enter Last Name" required>
										</div>
										</div>
										</div>
                                       <div class="row">
									  <div class="col-xs-12 col-lg-6">
										<label>Email Id</label>
										<div class="form-group">
											<input  class="form-control" type="email" name="user_email" value="<?php echo $employees['data'][$i]['user_email']; ?>" placeholder="Enter Email Id" required>
										</div>
									</div>
									<div class="col-xs-12 col-lg-6">
										<label>Salary</label>
										<div class="form-group">
											<input class="form-control" type="number" name="emp_salary" value="<?php echo $employees['data'][$i]['salary']; ?>" placeholder="Enter Salary" required>
										</div>
									</div>
									
								    </div>
                                        </div>

                                   <div class="row">
									<div class="col-xs-12 col-lg-6">
										<label>Skills Required</label>
										<div class="form-group">
											<select  class="js-example-tags form-control" multiple name="emp_skill[]" style="position: relative;z-index: 5000;">
												<option value="<?php echo $employees['data'][$i]['skills']; ?>"><?php echo $employees['data'][$i]['skills']; ?></option>
												<?php 
												if($skills){
													foreach ($skills as $key) {echo $key['skill_name'];
													echo '<option value="'.$key['skill_name'].'">'.$key['skill_name'].'</option>';
												}
											}
											?>
										</select>
									</div>
								</div>									
								 <div class="col-xs-12 col-lg-6">
									<label>Select Designation</label>
									<div class="form-group">
										<select name="designation"  class=" form-control"  >
											<option value="<?php echo $employees['data'][$i]['designation']; ?>" ><?php echo $employees['data'][$i]['first_name']; ?></option>
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
                            <!--  <button type="submit" title="Update Details" id="btnsubmit" class="w3-medium w3-button theme_bg">Update Employee Details</button> -->
                                    
                              </div>
                                                       
                         <div class="w3-col l12" id="service_err"></div>
                                  </div>
                                <div class="col-lg-1" id="message"></div>
                                  </div>
                              </div>
                                        </div>
                                        <!----------------------------------- Modal Body------------------------------------>                                                                               
                                    </div>
                                    <!----------------------------------- Modal content------------------------------------->
                                </div>
                            </form>
                        </div>
                        <!-- modal end  -->
                         <!-------script for update material-->
                        <script type="text/javascript">
                            // $(function () {
                            //     $("#updateEmpForm_<?php echo $employees['data'][$i]['user_id'];?>").submit(function (e) {
                            //         e.preventDefault();
                            //         dataString = $("#updateEmpForm_<?php echo $employees['data'][$i]['user_id']; ?>").serialize();
                                    // $('#btnsubmit').html('<span class="w3-card w3-padding-small w3-margin-bottom w3-round"><i class="fa fa-spinner fa-spin w3-large"></i> <b>Updating Service. Hang on...</b></span>');
                                    // $.ajax({
                                    //     type: "POST",
                                    //     url: "<?php echo base_url(); ?>admin/view_services/updateServiceDetails",
                                    //     data: new FormData(this),
                                    //     contentType: false,
                                    //     cache: false,
                                    //     processData: false,
                                    //     success: function (data)
                                    //     {
                                            //alert(data);
                            //                 $('#service_err').html(data);
                            //                 $('#btnsubmit').html('<span>Update Service</span>');
                            //             }
                            //         });
                            //         return false;  //stop the actual form post !important!
                            //     });
                            // });

                                 function deleteEmployeeDetails(user_id) {
                                            alert(user_id);
                                            $.ajax({
                                                type: "GET",
                                                url: BASE_URL + "user/manage_employee/deleteEmployeeDetails",
                                                data: {
                                                    user_id: user_id
                                                },
                                                cache: false,
                                                success: function (data) {
                                                	alert(data);
                                                	 // var data = JSON.parse(data);
                                                 console.log(data);
                                                }
                                            });
                                        
                            }
                        </script>
										<?php
									}
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			
			
</div>
</div>
<script type="text/javascript">
	$(function () {
    $("#add_EmployeeForm").submit(function () {
        dataString = $("#add_EmployeeForm").serialize();
      // console.log(dataString);
        $('#btnsubmit').html('<span class="w3-card w3-padding-small w3-margin-bottom w3-round"><i class="fa fa-spinner fa-spin w3-large"></i> <b>Adding Employee. Hang on...</b></span>');
        $.ajax({
            type: "POST",
            url: BASE_URL + "user/manage_employee/create_employee",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data)
            {
                console.log(data);return false;
                $('#service_err').html(data);
                $('#btnsubmit').html('<span>Add Employee</span>');
            }
        });
        return false;  //stop the actual form post !important!

    });
});
</script>