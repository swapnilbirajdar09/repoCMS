<title>MIS | </title>
<section id="content-wrapper" class="form-elements" ng-app="addProjectdata" ng-controller="project_data"> 

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
        <div class="contain-inner crm-dashboard nav-tab-horizontal-right"  >

        <ul class="nav nav-tabs float-xs-right" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a>
            </li>
        </ul><div class="tab-content" >
            <div class="row tab-pane active" id="home" role="tabpanel">
                <div class="col-md-12">

                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">     
                            <div class="dashboard-header content">
                                <h4 class="page-content-title">Edit Project</h4>
                                <?php
                                $result=$projects_details['data'];
                               // print_r($result[0]);
                               // echo $result[0]['skills_required'] ;
if($projects_details['data'] && $_GET['projectdetails']=='true' && $_GET['redirect']=='1'){
                                ?>
                                <form  id="projectDeatils" name="projectDeatils" >
                                    <input type="hidden" name="skilJSON" ng-model="skilJSON">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label>Project name</label>
                                            <div class="form-group">
                                                <input class="form-control" id="project_name" name="project_name"  type="text" value="<?php echo $result[0]['project_name']; ?>">
                                            </div>
                                        </div>                                  
                                        <div class="col-xs-6">
                                            <label>Project Description</label>
                                            <div class="form-group">
                                                <input class="form-control" id="project_description" name="project_description" type="text"  value="<?php echo $result[0]['project_description']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label>Profit Margin</label>
                                            <div class="form-group">
                                                <input class="form-control" id="profit_margin" name="profit_margin" type="text" value="<?php echo $result[0]['profit_margin']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <label>Estimate</label>
                                            <div class="form-group button-form-group">
                                                <div class="input-group">
                                                    <input class="form-control" id="estimate" name="estimate" type="text" value="<?php echo $result[0]['tentative_estimate'] ?>">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label>Start Date</label>
                                            <div class="form-group">
                                                <input class="form-control" id="start_date" name="start_date" type="date"  value="<?php echo date('Y-m-d', strtotime($result[0]['start_date'])); ?>">
                                            </div>
                                        </div>                                  
                                        <div class="col-xs-6">
                                            <label>End Date</label>
                                            <div class="form-group">
                                                <input class="form-control" id="end_date" name="end_date"  type="date"value="<?php echo date('Y-m-d', strtotime($result[0]['end_date'])); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" style="text-align:center;" >
                                                                            <button type="submit" onclick="updateSection1()" class="btn btn-primary site-btn center">Update Project Details</button>
                                                                        </div>
                                </form>
                                <form id="updateSkills" name="updateSkills">  
                                <input type="hidden" name="project_id" value="<?php echo $result[0]['project_id']; ?>" >  
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-6">
                                            <label>Skills Required</label>
                                            <?php $skilArr=json_decode($result[0]['skills_required']); 
                                            //print_r($skilArr);?>
                                            <div class="form-group">

                                                <select  class="js-example-tags form-control"  multiple name="skills[]">
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
                                        <!-- <div class="col-xs-12"> -->
                                     <!--        <label>Skills Required</label>
                                            <?php
                                            $arr = json_decode($result[0]['skills_required'], true);
                                                                                 //print_r($arr);
                                                                                ?>
                                            <div class="form-group">
                                                <select id="skilss" class="js-example-tags form-control" multiple="multiple"  name="skills[]" >
                                                    <option value="0" >Required skill</option>
                                                    <?php
                                                    
                                                        foreach ($arr as $key) {
                                                            echo $key;
                                                            echo '<option value="' . $key . '">' . $key . '</option>';
                                                        }
                                                    
                                                    ?>
                                                </select>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="form-group" style="text-align:center;" >
                                                                            <button type="submit" onclick="updateSection2()" class="btn btn-primary site-btn center">Update Project Skills</button>
                                                                        </div>
                                </form>
                                <form id="updateMilestoneTask" name="updateMilestoneTask">
                                    <input type="hidden" name="project_id" value="<?php echo $result[0]['project_id']; ?>" >

                                                                            <input type="hidden" name="milestonetask_<?php echo $result[0]['project_id']; ?>" value='<?php echo $result[0]['milestone_task']; ?>' id="milestonetask_<?php echo $result[0]['project_id']; ?>" >
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <label>Milestone Task</label>
                                            <div class="form-group">
                                                <input class="form-control" id="milestone_task" ng-model="addMilestoneTask" name="milestone_task" type="text" placeholder="Enter Your Milestone Task">
                                                <input type="hidden" name="task" value="{{skilJSON}}" ng-model="task" id="task">
                                            </div>
                                        </div>                                  
                                        <div class="col-xs-5">
                                            <label>Milestone Percent</label>
                                            <div class="form-group">
                                                <input class="form-control" id="m_persent" name="m_persent" ng-model="m_persent" type="text" placeholder="Enter Your Task persent">
                                                <input type="hidden" name="t_percent" value="{{skilJSON1}}" ng-model="t_percent" id="t_percent">
                                            </div>
                                        </div>


                                        <div class="col-xs-2">
                                            <label></label>
                                            <div class="form-group">
                                                <button class="w3-button theme_bg" type="button" ng-click="addSkill()" title="add requirements"><b>+&nbsp;Add</b></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                       <div class="col-xs-12">

                                                                                <label> </label>
                                                                                <div class="form-group">
                                                                                    <ul class="w3-ul "><?php
                                                                                        $arrtask = json_decode($result[0]['milestone_task'], true);
                                                                                        $i = 0;
                                                                                        foreach ($arrtask as $row => $value) {
                                                                                            // print_r($key);
                                                                                            ?>
                                                                                            <li> 
                                                                                                <?php
                                                                                                $projectID = $result[0]['project_id'];
                                                                                                $taskjson = $result[0]['milestone_task'];
                                                                                                ?>
                                                                                                <a class="w3-right btn w3-margin-right" onclick="removetask(<?php echo $row; ?>,<?php echo $projectID; ?>);" style="cursor: pointer;"><?php echo $value['milestone_name'] . ' ' . $value['milestone_percent'] . '%'; ?> &times;</a>
                                                                                            </li>
                                                                                        <?php }
                                                                                        ?>
                                                                                        <li ng-repeat="x in products">
                                                                                            <span >{{x}} </span>   
                                                                                            <span ng-repeat="y in products1">{{y}}</span>   
                                                                                            <span ng-click="removeSkill($index)" style="cursor:pointer;" class="w3-right w3-margin-right">×</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>                                  

                                                                        </div>                               
                                    <div class="form-group" style="text-align:center;" >
                                                                            <button type="submit" onclick="updateSection3()" class="btn btn-primary site-btn center">Update Milestone task</button>
                                                                        </div>
                                </form>
                            </div>
                                <?php 
                            }
                            else{
                                ?>
                                <div class="col-md-12 w3-padding">
                                    <center>
                                        <h3><i class="fa fa-warning"></i> Project Data! No data found.</h3>
                                    </center>
                                </div>
                                <?php 

                            }
                            ?>

                            </div>
                        </div>
                </div>
            </div>
        </div>
        </div>
</section>

                        <script>

    var project = angular.module('addProjectdata', ['ngSanitize']);
    project.controller('project_data', function ($scope, $http, $timeout, $window) {
        $scope.skillData = '';
        $scope.products = [];
        $scope.products1 = [];
        $scope.addSkill = function () {
            $scope.errortext = "";
            if (!$scope.addMilestoneTask) {
                return;
            }

            if ($scope.products.indexOf($scope.addMilestoneTask) == -1 && $scope.products.indexOf($scope.m_persent) == -1) {
               // alert($scope.addMilestoneTask);
               // alert($scope.m_persent);

                $scope.products.push($scope.addMilestoneTask);
                $scope.skilJSON = JSON.stringify($scope.products);

                $scope.products1.push($scope.m_persent);
                $scope.skilJSON1 = JSON.stringify($scope.products1);

                $scope.addMilestoneTask = '';
                $scope.m_persent = '';

            } else {
                $scope.errortext = "This Requirement is already listed.";
            }

        };

        // remove skill from temp
        $scope.removeSkill = function (x) {
            $scope.errortext = "";
            $scope.products.splice(x, 1);
            $scope.products1.splice(x, 1);
            $scope.skilJSON = JSON.stringify($scope.products);
            $scope.skilJSON1 = JSON.stringify($scope.products1);
        };

    
    });


</script>

<script>


    function removetask(i, p_id)
    {
        //alert(p_id);
        //var milestoneTask = $('#milestonetask_'+p_id).val();
        var r = 'milestonetask_' + p_id;

        var milestoneTask = document.getElementById(r).value;
        $.ajax({
            type: "POST",
            url: BASE_URL + "project/Project/removeTask",
            dataType: 'text',
            data: {
                project_id: p_id,
                milestoneTask: milestoneTask,
                index: i
            },
            return: false, //stop the actual form post !important!
            beforeSend: function () {

            },
            success: function (data) {
                console.log(data);
                // window.setTimeout(function() {
                //   location.reload();
                // }, 5000);
            },
            error: function (data) {

            }
        });
        return false;
    }

    function updateSection1()
    {
        // ------------POST form data to PHP controller--------------
        dataString = $("#updateSection1").serialize();
        // validate form fields
        // alert(dataString);
        $.ajax({
            type: "POST",
            url: BASE_URL + "project/Project/updateSection1",
            dataType: 'text',
            data: dataString,
            return: false, //stop the actual form post !important!
            beforeSend: function () {

            },
            success: function (data) {
                console.log(data);
                // window.setTimeout(function() {
                //   location.reload();
                // }, 5000);
            },
            error: function (data) {

            }
        });
        return false;  //stop the actual form post !important!


    }

    function updateSection3()
    {
        // ------------POST form data to PHP controller--------------
        dataString = $("#updateMilestoneTask").serialize();
        // validate form fields
         //alert(dataString);return false;
        $.ajax({
            type: "POST",
            url: BASE_URL + "project/Project/updateSection3",
            dataType: 'text',
            data: dataString,
            return: false, //stop the actual form post !important!
            beforeSend: function () {

            },
            success: function (data) {
                console.log(data);
                // window.setTimeout(function() {
                //   location.reload();
                // }, 5000);
            },
            error: function (data) {

            }
        });
        return false;  //stop the actual form post !important!


    }

function updateSection2()
    {
        // ------------POST form data to PHP controller--------------
        dataString = $("#updateSkills").serialize();
        // validate form fields
        //alert(dataString);return false;
        $.ajax({
            type: "POST",
            url: BASE_URL + "project/Project/updateSection2",
            dataType: 'text',
            data: dataString,
            return: false, //stop the actual form post !important!
            beforeSend: function () {

            },
            success: function (data) {
                console.log(data);
                // window.setTimeout(function() {
                //   location.reload();
                // }, 5000);
            },
            error: function (data) {

            }
        });
        return false;  //stop the actual form post !important!


    }
</script>
