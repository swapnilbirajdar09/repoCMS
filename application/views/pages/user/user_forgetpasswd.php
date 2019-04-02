<title>MIS | <?php echo $title; ?></title>
<div class="forgot_passoword_v2" ng-app="forgetApp" ng-controller="forgetController">
    <div class="forgot_v2_main">
        <div class="forgot_v2_contain">
            <div class="forgot_v2_form text-xs-center" >
                <i class="forgot_v2_profile_icon icon icon_lock"></i>
                <h5>Recover your password</h5>
                <div ng-bind-html="message" class="error_msg"></div>
                <form ng-submit="submit()" method="POST" id="form-validation">
                    <div class="forgot_v2_text_field">
                        <input type="email" id='email' name="user_email" ng-model="user_email" placeholder="Enter Email" required>
                        <i class="icon icon_mail"></i>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block" type="submit">
                            <span ng-show="forgetButtonText == 'Authenticating user. Please wait'"><i class="fa fa-circle-o-notch fa-spin"></i></span>
                            {{forgetButtonText}}
                        </button>
                    </div>
                    <div class="forgot_v2_forget_text">
                        <i class="arrow_back"></i>
                        Go to <a href="<?php echo base_url(); ?>user/login">Back.</a>
                    </div>
                </form>
            </div>
            <div class="forgot_v2_reserved_text text-xs-center bold-fonts">
                <p><?php echo COPYRIGHT; ?></p>
            </div>
        </div>
    </div>
</div>

<!-- Authenticate user script  -->
<script>
    var forgetApp = angular.module('forgetApp', ['ngSanitize']);
    forgetApp.controller('forgetController', function ($scope, $http, $timeout, $window) {
        $scope.forgetButtonText = "Get Password";
        $scope.test = "false";

        $scope.submit = function ()
        {
            $scope.message = '';
            // spinner on button
            $scope.test = "true";
            $scope.forgetButtonText = "Authenticating user. Please wait";

            // POST form data to controller
            $http({
                method: 'POST',
                url: '<?php echo base_url(); ?>user/forget_password/getPassword',
                data: JSON.stringify({user_email: $scope.user_email})
            }).then(function (data) {
                // console.log(data.data);return false;
                if (data.data.type == 'success') {                        
                    $scope.message = '<h6 class="success_msg">'+data.data.message+'</h6>';
                } else {
                    $scope.message = '<h6 class="error_msg">'+data.data.message+'</h6>';
                }

            });
            $scope.forgetButtonText = "Get Password";
        };
    });
</script>
