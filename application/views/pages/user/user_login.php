<title>MIS | <?php echo $title; ?></title>
<div class="login_v2" ng-app="loginApp" ng-controller="loginController">
    <div class="login_v2_main">
        <div class="login_v2_contain">
            <div class="login_v2_form text-xs-center" >
                <i class="login_v2_profile_icon icon icon_lock"></i>
                <h5>Sign into your account</h5>
                <div ng-bind-html="message" class="error_msg"></div>
                <!-- <div><h6 class="error_msg">Sorry, credentials wrong</h6></div> -->
                <form ng-submit="submit()" method="POST" id="form-validation">
                    <div class="login_v2_text_field">

                        <input type="email" id='email' ng-model="username" placeholder="Enter email" required>
                        <i class="icon icon_mail"></i>
                    </div>
                    <div class="login_v2_text_field">
                        <input type="password" id='password' ng-model='password' placeholder="Enter Password" required>
                        <i class="icon icon_key"></i>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block" type="submit">
                            <span ng-show="loginButtonText == 'Authenticating user. Please wait'"><i class="fa fa-circle-o-notch fa-spin"></i></span>
                            {{ loginButtonText}}
                        </button>
                    </div>
                    <div class="login_v2_forget_text">
                        <a href="<?php echo base_url(); ?>user/forget_password" style="margin-bottom: 10px">Forgot password?</a>
                    </div>
                </form>
            </div>
            <div class="login_v2_reserved_text text-xs-center bold-fonts">
                <p><?php echo COPYRIGHT; ?></p>
            </div>
        </div>
    </div>
</div>

<!-- Authenticate user script  -->
<script>
    var loginApp = angular.module('loginApp', ['ngSanitize']);
    loginApp.controller('loginController', function ($scope, $http, $timeout, $window) {
        $scope.loginButtonText = "Log in as User";
        $scope.test = "false";

        $scope.submit = function ()
        {
            $scope.message = '';
            // spinner on button
            $scope.test = "true";
            $scope.loginButtonText = "Authenticating user. Please wait";

            // POST form data to controller
            $http({
                method: 'POST',
                url: '<?php echo base_url(); ?>user/login/checkLogin',
                data: JSON.stringify({username: $scope.username, password: $scope.password})
            }).then(function (data) {
                //console.log(data.data);return false;
                if (data.data.type == 'success') {                        
                    $window.location.href = BASE_URL + 'admin/dashboard';
                } else {
                    $scope.message = '<h6 class="error_msg">'+data.data.message+'</h6>';
                }

            });
            $scope.loginButtonText = "Log in as User";
        };
    });
</script>
