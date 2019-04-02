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
                                <h4 class="page-content-title">Create Project</h4>

                                <form ng-submit="submit()" id="projectForm" name="projectForm" >
                                    <input type="hidden" name="skilJSON" ng-model="skilJSON">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label>Project name</label>
                                            <div class="form-group">
                                                <input class="form-control" id="project_name" name="project_name" ng-model="project_name" type="text">
                                            </div>
                                        </div>                                  
                                        <div class="col-xs-6">
                                            <label>Project Description</label>
                                            <div class="form-group">
                                                <input class="form-control" id="project_description" name="project_description" type="text" ng-model="project_description">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label>Profit Margin</label>
                                            <div class="form-group">
                                                <input class="form-control" id="profit_margin" name="profit_margin" ng-model="profit_margin" type="text">
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <label>Estimate</label>
                                            <div class="form-group button-form-group">
                                                <div class="input-group">
                                                    <input class="form-control" id="estimate" name="estimate" type="text" ng-model="estimate">

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label>Start Date</label>
                                            <div class="form-group">
                                                <input class="form-control" id="start_date" name="start_date" type="date" ng-model="start_date">
                                            </div>
                                        </div>                                  
                                        <div class="col-xs-6">
                                            <label>End Date</label>
                                            <div class="form-group">
                                                <input class="form-control" id="end_date" name="end_date" ng-model="end_date" type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <label>Skills Required</label>
                                            <div class="form-group">
                                                <select id="skilss" class="js-example-tags form-control" multiple="multiple"  name="skills[]" >
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
                                    </div>
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
                                                <ul class="w3-ul ">
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
                                        <button type="submit" class="btn btn-primary site-btn center">Submit</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!--/*****************list of projects*********************/-->
                        <div class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="page-content-title">List Of All Projects</h4>
                                    <table id="editing-footable" class="table table-striped footable-filter m-0" data-filtering="true" data-sorting="true" data-paging="true">
                                        <thead>
                                            <tr>
                                                <th data-name="id" data-breakpoints="xs" data-type="number">Sr. No</th>
                                                <th data-name="firstName">Project Name</th>
                                                <th data-name="jobTitle" data-breakpoints="xs">Project Created Date</th>
                                                <th data-name="email" data-breakpoints="xs sm md" data-type="email">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php
                                            $count = 0;
                                            if ($projects['status'] != 500) {
                                                foreach ($projects['status_message'] as $key) {
                                                    $count++;
                                                    ?>  
                                                    <tr data-expanded="true">
                                                        <td><?php echo $count; ?></td>
                                                        <td><?php echo $key['project_name']; ?></td>
                                                        <td><?php echo $key['created_date']; ?></td> 
                                                        <td class="responsive_icon_main">
                                                            <span class="responsive_table_icon"><a title="View Query" href="<?php echo base_url(); ?>project/project/editProject/<?php echo $key['project_id']; ?>?project_id=<?php echo $key['project_id']; ?>&projectdetails=true&redirect=1" class="btn btn-xs text-left" >
                                                                    <i class="icon icon_pencil"></i></a></span>
                                                            <span class="responsive_table_icon"><a onclick="deleteProject(<?php echo $key['project_id']; ?>);" class="btn w3-text-red"><i class="icon icon_trash"></i></span>
                                                        </td>

                                                    </tr>

                                                    <!--edit model load popup form of update Project-->
                                                <div class="modal fade bs-example-modal-lg" id="RFIModal_<?php echo $key['project_id']; ?>" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-md ">
                                                        <!-- Modal content View Query -->
                                                        <div class="modal-content">

                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                                </button>
                                                                <div class="col-lg-6">
                                                                    <h4 class="modal-title w3-padding-left"><b>Update Project:</b> </h4>
                                                                </div>
                                                            </div>
                                                            <!-- Modal body starts -->
                                                            <div class="dashboard-header content">

                                                                <h4 class="page-content-title">Update Project</h4>
                                                                <div class="dashboard-header content">
                                                                    <form id="updateSection1" name="UpdateProjectForm" >
                                                                        <div class="row">
                                                                            <input type=hidden name=project_id value="<?php echo $key['project_id']; ?>" >
                                                                            <div class="col-xs-6">
                                                                                <label>Project name</label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control" ng-mode id="project_name" name="project_name" type="text" value="<?php echo $key['project_name']; ?>">
                                                                                </div>
                                                                            </div>                                  
                                                                            <div class="col-xs-6">
                                                                                <label>Project Description</label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control" id="project_description" name="project_description" type="text" value="<?php echo $key['project_description']; ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-xs-6">
                                                                                <label>Profit Margin</label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control" id="profit_margin" name="profit_margin" type="text" value="<?php echo $key['profit_margin']; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-6">
                                                                                <label>Estimate</label>
                                                                                <div class="form-group button-form-group">
                                                                                    <div class="input-group">
                                                                                        <input class="form-control" id="estimate" name="estimate" type="text" value="<?php echo $key['tentative_estimate']; ?>">

                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-xs-6">
                                                                                <label>Start Date</label> 
                                                                                <div class="form-group">
                                                                                    <input class="form-control" id="start_date" name="start_date" type="date" value="<?php echo date('Y-m-d', strtotime($key['start_date'])); ?>">
                                                                                </div>
                                                                            </div>                                  
                                                                            <div class="col-xs-6">
                                                                                <label>End Date</label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control" id="end_date" name="end_date"  type="date" value="<?php echo date('Y-m-d', strtotime($key['end_date'])); ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group" style="text-align:center;" >
                                                                            <button type="submit" onclick="updateSection1()" class="btn btn-primary site-btn center">Update</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="dashboard-header content">
                                                                    <form id="updateSection2">
                                                                        <div class="row">
                                                                            <input type="hidden" name="project_id" value="<?php echo $key['project_id']; ?>" >
                                                                            <div class="col-xs-12">
                                                                                <label>Skills Required</label><?php
                                                                                $arr = json_decode($key['skills_required'], true);
                                                                                 //print_r($arr);
                                                                                ?>
                                                                                <div class="form-group">
                                                                                    <select id="skilss" class="js-example-tags form-control" multiple="multiple"  name="skills" >
                                                                                        <option value="0" >Select skill</option>
                                                                                        <?php
                                                                                        //if($key['skills_required']){
                                                                                        for ($i = 0; $i < count($arr); $i++) {
                                                                                            ?>
                                                                                            <option value="<?php echo $arr[$i]; ?>"><?php echo $arr[$i]; ?></option>
                                                                                            <?php
                                                                                        }
                                                                                        // }
                                                                                        ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group" style="text-align:center;" >
                                                                            <button type="submit" onclick="updateSection2()" class="btn btn-primary site-btn center">Update</button>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                                <div class="dashboard-header content">
                                                                    <form id="updateSection3">
                                                                        <div class="row">
                                                                            <input type="hidden" name="project_id" value="<?php echo $key['project_id']; ?>" >

                                                                            <input type="hidden" name="milestonetask_<?php echo $key['project_id']; ?>" value='<?php echo $key['milestone_task']; ?>' id="milestonetask_<?php echo $key['project_id']; ?>" >
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
                                                                                        $arrtask = json_decode($key['milestone_task'], true);
                                                                                        $i = 0;
                                                                                        foreach ($arrtask as $row => $value) {
                                                                                            // print_r($key);
                                                                                            ?>
                                                                                            <li> 
                                                                                                <?php
                                                                                                $projectID = $key['project_id'];
                                                                                                $taskjson = $key['milestone_task'];
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
                                                                            <button type="submit" onclick="updateSection3()" class="btn btn-primary site-btn center">Update</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <?php
                                            }
                                        } else {
                                            ?> 

                                            <?php
                                        }
                                        ?> 
                                        
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- ***************************** Ends update projects************ -->
                    </div>
                </div>
            </div>
            <!-- Expense of projects -->
            <div class="tab-pane" id="profile" role="tabpanel" >
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">     
                    <div class="dashboard-header content">
                        <h4 class="page-content-title">Create Expense</h4>

                        <form method="POST"  >
                            <div class="tab-content" >
                                <div class="tab-pane active btn-margin" id="default-select" role="tabpanel">
                                    <div class="element-margin-bottom form-bootstrap-select">                                
                                        <label>Select Projects</label>
                                        <select class="selectpicker" data-style="btn-secondary" ng-model="expense.project_id">
                                            <?php foreach ($projects['status_message'] as $key) {
                                                ?>
                                                <option value="<?php echo $key['project_id'] ?>">  <?php echo $key['project_name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="col-xs-9">
                                        <label>Expense Name</label>
                                        <div class="form-group">
                                            <input type="text" ng-model="expense.skillname" class="form-control w3-small"  required>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <label></label>
                                        <div class="form-group">
                                            <button class="btn btn-primary theme_bg btn-block" ng-click="expensesubmit()" type="submit"><i class="fa fa-plus "></i></button>
                                        </div>
                                    </div>
                                    
                                    <div class="row w3-padding" >
                                        <div class="col-lg-12 col-xs-12 col-md-12 w3-padding" ng-repeat='skill in skillData'>
                                            <span>{{skill.expense_name}} </span>
                                            <a type="btn" ng-click="delskill(skill.expense_id)" class="w3-right" ><i class="fa fa-times w3-text-black"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="text-align:center;" >
                                <!-- <button type="button" class="btn btn-primary site-btn center">Submit</button> -->
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">     
                    <div class="dashboard-header content">
                        <h4 class="page-content-title">Show Expense</h4>
                        <form ng-submit="" id="projectForm" name="projectForm" >
                            <div class="tab-content">
                                <div class="element-margin-bottom form-bootstrap-select" style="margin-bottom: 15px">                                
                                        <label>Select Projects</label>
                                        <select class="selectpicker" data-style="btn-secondary" ng-model="expense.project_id">
                                            <?php foreach ($projects['status_message'] as $key) {
                                                ?>
                                                <option value="<?php echo $key['project_id'] ?>">  <?php echo $key['project_name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                <div class="tab-pane active btn-margin" id="default-select" role="tabpanel">
 <table id="editing-footable" class="table table-striped footable-filter m-0" data-filtering="true" data-sorting="true" data-paging="true">
                                        <thead>
                                            <tr>
                                                <th data-name="id" data-breakpoints="xs" data-type="number">Sr. No</th>
                                                <th data-name="firstName">Expense Name</th>
                                                <th data-name="jobTitle" data-breakpoints="xs">Expense Created Date</th>
                                                <th data-name="email" data-breakpoints="xs sm md" data-type="email">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repete="skillData in $data">
                                                <td>$skillData.expense_name</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--  -->
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

        // code to add expense
        $scope.expensesubmit = function () {
           // alert($scope.expense);         // POST form data to controller
            $http({
                method: 'POST',
                url: '<?php echo base_url(); ?>project/Project/addExpense',
                headers: {'Content-Type': 'application/json'},
                data: $scope.expense
            }).then(function (data) {
                console.log(data.data);
                return false;
                $scope.skillname = '';
                $scope.getExpense();
            });
        };

        //---------show all Expense
        $scope.getExpense = function () {
            $http({
                method: 'get',
                url: '<?php echo base_url(); ?>project/Project/show_expense'
            }).then(function successCallback(response) {
                // Assign response to skills object
                console.log(response.data);
                $scope.skillData = response.data;
            });
        };
        $scope.getExpense();

        //---del designation
    $scope.delskill = function(expense_id){
        $http({
            method: 'get',
            url: '<?php echo base_url(); ?>project/Project/delete_expense?expense_id=' + expense_id
        }).then(function successCallback(response) {
   // alert(response);
    // Assign response to skills object
    console.log(response);
    //$scope.skills = response.data;
    $scope.getExpense();
});
    };
    });


</script>
<script type="text/javascript">

    $(function () {
        $("#projectForm").submit(function () {
            dataString = $("#projectForm").serialize();
            //alert(dataString);
            $('#btnsubmit').html('<span class="w3-card w3-padding-small w3-margin-bottom w3-round"><i class="fa fa-spinner fa-spin w3-large"></i> <b>Adding Employee. Hang on...</b></span>');
            $.ajax({
                type: "POST",
                url: BASE_URL + "project/Project/createProject",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data)
                {
                    console.log(data);
                    return false;
                    $('#service_err').html(data);
                    $('#btnsubmit').html('<span>Add Employee</span>');
                }
            });
            return false;  //stop the actual form post !important!

        });
    });
</script>
<script>
    //*****************DElete Project onclick************************
    function deleteProject(project_id) {

        $.ajax({
            type: "GET",
            url: BASE_URL + "project/Project/deleteProjects",
            data: {
                project_id: project_id
            },
            cache: false,
            success: function (data) {
                var data = JSON.parse(data);
                console.log(data);

            }
        });

    }

// ----function to open modal product------//
    function openHelp(modal_id) {
        var modal = $('#RFIModal_' + modal_id);
        modal.addClass('in');
        //getComments(modal_id);
        $('.comment_msg').html('');

    }

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
        dataString = $("#updateSection3").serialize();
        // validate form fields
        // alert(dataString);return false;
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


</script>

<script type="text/javascript">


</script>