<?php
if (array_key_exists("login", $_GET)) {
    $oauth_provider = $_GET['oauth_provider'];
    if ($oauth_provider == 'twitter') {
        header("Location:home/logintwitter");
    }
}
?>
<div id="fb-root" style="float:left; width:1px;"></div>
<script>
window.fbAsyncInit = function() {
	FB.init({
	    appId: '276988829092618',
        cookie: true,
       	xfbml: true,
        oauth: true
   });      
};
(function() {
	var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
    document.getElementById('fb-root').appendChild(e);
}());
            function fblogin(){
	FB.login(function(response){
           
        if (response.authResponse) {
		window.location='<?php echo base_url();?>home/loginfacebook';
	 }
	},{scope: 'publish_stream'});
}
</script>
<header class="mod-header">
    <div class="grid_frame">
        <div class="container_grid clearfix">
            <div class="grid_12">
                <div class="header-content clearfix">
                    <h1 id="logo" class="rs">
                        <a href="<?php echo base_url();?>home/homeview">
                            <img src="images/logo.png" alt="$SITE_NAME"/>
                        </a>
                    </h1>
                    <?php $level=$this->session->userdata('userlevel'); ?>
                  <?php if($level==1){ ?>
                     <a id="sys_head_addcoupon" class="btn btn-green type-login btn-login" href="#">Add coupon</a>
                  <?php } else  { ?>
                    <a id="sys_head_login" class="btn btn-green type-login btn-login" href="#">Login</a>
                  <?php }?>
                    <nav class="main-nav">
                        <ul id="main-menu" class="nav nav-horizontal clearfix">
                            <li class="active">
                                <a href="<?php echo base_url();?>home/homeview">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>home/coupon">Coupons</a>
                            </li>
                            <li class="has-sub">
                                <a href="<?php echo base_url();?>home/couponcode">Coupons Code</a>
                                <ul class="sub-menu">
                                    <li><a href="coupon-code.html">Coupons Code 1</a></li>
                                    <li><a href="coupon-code-2.html">Coupons Code 2</a></li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="<?php echo base_url();?>home/brandlist">Brands</a>
                                <ul class="sub-menu">
                                    <li><a href="brand-detail-1.html">Brand Detail 1</a></li>
                                    <li><a href="brand-detail-2.html">Brand Detail 2</a></li>
                                    <li><a href="brand-detail-3.html">Brand Detail 3</a></li>
                                    <li><a href="brand-detail-4.html">Brand Detail 4</a></li>
                                    <li><a href="brand-detail-5.html">Brand Detail 5</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url();?>home/blog">Blog</a></li>
                            <li>
                                <a href="<?php echo base_url();?>home/mycoupon">My coupons</a>
                                <i class="icon iPickRed lbl-count"><span>12</span></i>
                            </li>
                        </ul>
                        <a id="sys_btn_toogle_menu" class="btn-toogle-res-menu" href="#alternate-menu"></a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div id="sys_pop_login" class="pop-login">
        <div class="viewport-pop">
            <div class="transport-viewer clearfix">
                <div class="mod-register">
                    <h3 class="rs title-mod">Hello pretty! Welcome to bittye.com</h3>
                    <div class="wrap-form-reg clearfix">
                       
                            <?php include 'login-form.php';?>
                            <div class="right-create-acc">
                                <img class="account" src="images/reg-account.png" alt="bittye.com">
                                <p class="lbl-dung-lo rs">Not a member? Don’t worry</p>
                                <a id="sys_link_reg_panel" href="<?php echo base_url();?>home/register" class="btn-flat yellow btn-submit-reg">Create an account</a>
                                <div id="sys_warning_sms" class="warning-sms" data-warning-txt="No spam guarantee,No disturb,Promotion News"></div>
                            </div>
                      
                        <i class="line-sep"></i>
                    </div>
                </div><!--end: Login panel -->
                <div class="mod-register">
                    <h3 class="rs title-mod">Hello pretty! Welcome to bittye.com</h3>
                    <div class="desc-reg">Sign up for free and get exclusive access to members-only savings, rewards and special promotions from Coupons.com. Enter in an email and a password or sign up with Facebook.</div>
                    <div class="wrap-form-reg clearfix">
                       
                            <?php include 'register-form.php';?>
                            <div class="right-connect">
                                <button class="btn-flat yellow btn-submit-reg" type="submit">Create an account</button>
                                <div class="sep-connect">
                                    <span>Or</span>
                                </div>
                                <div class="grp-connect">
                                    <p class="rs">Sign up using your account on:</p>
                                    <a class="btn-flat fb" onclick="return fblogin();" href="#">Facebook</a>
                                    <!--<a class="btn-flat gg" href="#">Twitter</a>-->
                                    <a class="btn-flat gg" href="?login&oauth_provider=twitter">Twitter</a>
                                </div>
                            </div>
                       
                    </div>
                    <p class="rs wrap-link-back">
                        <a id="sys_link_login_panel" href="login.php" class="link-back">
                            <i class="pick-r"></i>
                            Back to login
                        </a>
                    </p>
                </div><!--end: Register panel -->
            </div>
            <div id="sys_paging_state" class="paging-state">
                <i class="active"></i>
                <i></i>
            </div>
            <i id="sys_close_login_popup" class="icon iClose close-popop"></i>
        </div>
    </div>
     <div id="sys_pop_addcoupon" class="pop-login">
        <div class="viewport-pop">
            <div class="transport-viewer clearfix">
                <div class="mod-register">
                    <h3 class="rs title-mod">Hello pretty! Welcome to coupon register</h3>
                    <div class="wrap-form-reg clearfix">
                       
                            <?php include 'coupon_register.php';?>
                       
                    </div>
                </div><!--end: Login panel -->
            </div>
            <div id="sys_paging_state" class="paging-state">
                <i class="active"></i>
                <i></i>
            </div>
            <i id="sys_close_addcoupon_popup" class="icon iClose close-popop"></i>
        </div>
    </div>
</header><!--end: header.mod-header -->
