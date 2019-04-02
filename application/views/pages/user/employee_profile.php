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
<?php print_r($userDetails['data'][0]['designation']); ?>
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="dashboard-header content">
                            <h4 class="page-content-title">Edit Profile</h4>
                            <p>Edit your profile here and also changed your password here</p>
                            <!-- alert boxes -->
                            <div id="alert_boxes" ng-bind-html="message"></div>
                            <form id="Edit_employeeprofile" name="Edit_employeeprofile" method="post" role="form" enctype="multipart/form-data">
                                <div  id="service_err"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-lg-6">
                                        <label>First Name</label>
                                        <div class="form-group">
                                            <input type="text" value="<?php echo $userDetails['data'][0]['first_name']; ?>" name="first_name" class="form-control" placeholder="Enter First Name" required>
                                        </div>
                                    </div>									
                                    <div class="col-xs-12 col-lg-6">
                                        <label>Last Name</label>
                                        <div class="form-group">
                                            <input class="form-control" value="<?php echo $userDetails['data'][0]['last_name']; ?>" name="last_name" type="text" placeholder="Enter Last Name" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-lg-6">
                                        <label>Email Id</label>
                                        <div class="form-group">
                                            <input  class="form-control" value="<?php echo $userDetails['data'][0]['user_email']; ?>" type="email" name="user_email" placeholder="Enter Email Id" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-lg-6">
                                        <label>Salary</label>
                                        <div class="form-group">
                                            <input class="form-control" value="<?php echo $userDetails['data'][0]['salary']; ?>" type="number" name="emp_salary" placeholder="Enter Salary" required>
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
                                                if ($skills) {
                                                    foreach ($skills as $key) {
                                                        echo $key['skill_name'];
                                                        echo '<option value="' . $key['skill_name'] . '">' . $key['skill_name'] . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>									
                                    <div class="col-xs-12 col-lg-6">
                                        <label>Select Designation</label>
                                        <div class="form-group">
                                            <?php //print_r($designation); ?>
                                            <select name="designation"  class="form-control">
                                                <option value="0" >Select Designation</option>
                                                <?php
                                                if ($designation) {
                                                    foreach ($designation as $key) { ?>
                                                
                                                        <option <?php if($userDetails['data'][0]['designation'] == $key['designation_name']){ echo 'selected'; } ?> value="<?php echo $key['designation_name']; ?>"><?php echo $key['designation_name']; ?></option>';
                                                   <?php }
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