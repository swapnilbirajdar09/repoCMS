<title>MIS | </title>
<section id="content-wrapper" class="form-elements">

  <div class="site-content-title">
    <h2 class="float-xs-left content-title-main"></h2>

    <ol class="breadcrumb float-xs-right">
      <li class="breadcrumb-item">
        <span class="fs1" aria-hidden="true" data-icon=""></span>
        <a href="">Home</a>
      </li>
      <li class="breadcrumb-item active"></li>
    </ol>

  </div><!-- page content -->
<div class="right_col" role="main" id="editPkgApp" ng-app="editPkgApp" ng-controller="editPkgController">
  <div class="">
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h3><i class="fa fa-edit " style="margin-left:20px;"></i> Edit Package</h3>
            <a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url(); ?>admin/dashboard" ><i class="fa fa-chevron-left" style="margin-right:20px;"></i> Back to Dashboard</a>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">

              <div class="col-md-12">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                 <?php 
                 if($pkg_details && $_GET['packagedetails']=='true' && $_GET['redirect']=='1'){
                  ?>
                  <form id="editPackageForm">
                    <input type="hidden" name="pkg_id" value="<?php echo $pkg_details[0]['package_id']; ?>">
                    <label>Package Title:</label>
                    <input type="text" name="pkg_name" value="<?php echo $pkg_details[0]['pkg_name']; ?>" class="form-control" placeholder="Eg.(Default, Basic, Premium, Gold, etc.)"><br>
                    <label>Set Price (<i class="fa fa-inr"></i>):</label>
                    <p class="w3-small w3-text-grey"><b>Note: set Price = 0, if package is "FREE".</b></p>
                    <input type="number" name="pkg_price" value="<?php echo $pkg_details[0]['pkg_price']; ?>" class="form-control" min="0" placeholder="Eg.(0/-, 1000/-, 1500/-, 5000/-, etc.)"><br>
                    <label>Package Validity (<i class="fa fa-list-ol"></i>):</label>
                      <input type="number" name="pkg_validity" class="form-control" value="<?php echo $pkg_details[0]['pkg_validity']; ?>" min="1" placeholder="Eg.(1, 3, 6, 12, etc.)"><br>
                    <label>Package Period:</label>
                    <select class="form-control" id="pkg_period" name="pkg_period">
                      <option value="0" class="w3-light-grey" selected>Select package period</option>
                      <option value="Monthly" <?php if($pkg_details[0]['pkg_period']=='Monthly'){echo 'selected';} ?>>Monthly</option>
                      <option value="Yearly" <?php if($pkg_details[0]['pkg_period']=='Yearly'){echo 'selected';} ?>>Yearly</option>
                    </select>
                    <p class="w3-text-red" id="perioderror"></p><br>
                    <label>Package Benefits:</label>                            
                    <p class="w3-small w3-text-grey"><b>Note: Enter benefit below and click on "<i class="fa fa-plus"></i>  Add" button.</b></p>
                    <div class="input-group">
                      <input type="hidden" name="benefitAddedField" value="{{benefitAddedField}}" ng-model="benefitAddedField" id="benefitAddedField">
                      <input type="hidden" name="prebenefitAddedField" value='<?php echo $pkg_details[0]['package_benefits']; ?>' id="prebenefitAddedField">
                      <input type="text" name="pkg_benefits" ng-model="addBenefit" class="form-control" placeholder="Eg.(Access to all profiles, Contact access limits to 5 profiles, etc.)">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-default" ng-click="addBenefitFunc()"><i class="fa fa-plus"></i> Add</button>
                      </span>
                    </div>
                    <p class="w3-text-red" id="errortext">{{errortext}}</p>
                    <ul class="w3-ul w3-border">
                      <li ng-repeat="x in benefits">{{x}}<span ng-click="removeBenefit($index)" style="cursor:pointer;" class="w3-right w3-margin-right">×</span></li>
                    </ul>

                    <div class="col-md-12 w3-center w3-margin-top">
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="submit" id="editPackageBtn" class="btn btn-primary">Save Changes</button>                      
                    </div>
                  </form>
                  <p id="pkg_form_message" class="w3-padding"></p>
                  <?php 
                }
                else{
                  ?>
                  <div class="col-md-12 w3-padding">
                    <center>
                      <h3><i class="fa fa-warning"></i> Invalid Package! No data found.</h3>
                    </center>
                  </div>
                  <?php 

                }
                ?>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>
<!-- /page content -->
<script src="<?php echo base_url(); ?>assets/js/module/editpackage.js"></script>
