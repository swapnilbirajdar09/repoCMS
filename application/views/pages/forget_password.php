<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from backend.themesadmin.com/backend/admin_left_icon_menu/default/admin_default/login_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Apr 2017 08:57:23 GMT -->
<head>
<meta charset="utf-8">
<meta name="description" content="bootstrap default admin template">
<meta name="viewport" content="width=device-width">
<title>Login | Admin Template</title>
 
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:1491225341,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"63d60e99900bfef0e4c96293acb7a3ab",petok:"83098970801ecba2027c583719e193e3bea578e4-1492160089-1800",zone:"themesadmin.com",rocket:"0",apps:{"ga_key":{"ua":"UA-92643213-2","ga_bs":"2"}}}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="../../../../../ajax.cloudflare.com/cdn-cgi/nexp/dok3v%3d905ca5bd16/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
//]]>
</script>
<link rel="shortcut icon" href="http://backend.themesadmin.com/backend/assets/favicon/favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/template/favicon/apple-touch-icon.png"/>
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>assets/template/favicon/apple-touch-icon-57x57.png"/>
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/template/favicon/apple-touch-icon-72x72.png"/>
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/template/favicon/apple-touch-icon-76x76.png"/>
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/template/favicon/apple-touch-icon-114x114.png"/>
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/template/favicon/apple-touch-icon-120x120.png"/>
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>assets/template/favicon/apple-touch-icon-144x144.png"/>
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/template/favicon/apple-touch-icon-152x152.png"/>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/template/favicon/apple-touch-icon-180x180.png"/>
 
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/global/css/bootstrap.min.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/icons_fonts/elegant_font/elegant.min.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/pages/global/css/global.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/global/css/components.min.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/layouts/layout-left-icon-menu/css/layout.min.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/pages/forgot-password/forgot-password-v2/css/forgot_password_v2.css"/>
<!-- angular-->
        <script src="<?php echo base_url(); ?>assets/js/angular.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/angular-sanitize.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/const.js"></script>
 
<script type="text/javascript">
/* <![CDATA[ */
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-92643213-2']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

(function(b){(function(a){"__CF"in b&&"DJS"in b.__CF?b.__CF.DJS.push(a):"addEventListener"in b?b.addEventListener("load",a,!1):b.attachEvent("onload",a)})(function(){"FB"in b&&"Event"in FB&&"subscribe"in FB.Event&&(FB.Event.subscribe("edge.create",function(a){_gaq.push(["_trackSocial","facebook","like",a])}),FB.Event.subscribe("edge.remove",function(a){_gaq.push(["_trackSocial","facebook","unlike",a])}),FB.Event.subscribe("message.send",function(a){_gaq.push(["_trackSocial","facebook","send",a])}));"twttr"in b&&"events"in twttr&&"bind"in twttr.events&&twttr.events.bind("tweet",function(a){if(a){var b;if(a.target&&a.target.nodeName=="IFRAME")a:{if(a=a.target.src){a=a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);b=0;for(var c;c=a[b];++b)if(c.indexOf("url")===0){b=unescape(c.split("=")[1]);break a}}b=void 0}_gaq.push(["_trackSocial","twitter","tweet",b])}})})})(window);
/* ]]> */
</script>
</head>
<body>
	<div class="forgot_passoword_v2">
<div class="forgot_v2_main">
<div class="forgot_v2_contain">
<div class="forgot_v2_form text-xs-center">
<i class="forgot_v2_profile_icon icon icon_key"></i>
<h5>Recover your password</h5>
<form id="userForgetForm" method="post" action="#">
	<div id="adminOutput"></div>
<div class="forgot_v2_text_field">
<input type="text" id='email' name="user_email" placeholder="Enter Email">
<i class="icon icon_mail"></i>
</div>
<button type="submit" name="forget_submit" id="forget_submit" tabindex="4" class="form-control btn btn-login"> Forget Password </button>
<div class="forgot_v2_sign_link">
<i class="arrow_back"></i>
Go to <a href="login_v2.html">Back.</a>
</div>
</form>
</div>
<div class="forgot_v2_reserved_text text-xs-center bold-fonts">
<p>© 2017. all right reserved.</p>
</div>
</div>
</div>
</div>
<script>
    $(function () {
        $("#userForgetForm").submit(function (e) {
            e.preventDefault();
            dataString = $("#userForgetForm").serialize();
            // alert(dataString);
            $('#forget_submit').html('<span><i class="fa fa-spinner fa-spin w3-large"></i> <b>Getting Password....</b></span>')
            $.ajax({
                type: "POST",
                url: BASE_URL + "forget_password/getPassword",
                dataType: 'text',
                data: dataString,
                return: false, //stop the actual form post !important!
                success: function (data)
                {
                  alert(data);
                    $("#adminOutput").html(data);
                    $('#forget_submit').html('<span>Forget Password</span>');

                }
            });
            return false;  //stop the actual form post !important!
        });
    });
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/global/plugins/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/global/plugins/tether/dist/js/tether.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/global/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/pages/global/js/global.min.js"></script>
 
 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/global/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
 
 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/global/js/global/global_validation.js"></script>
</body>