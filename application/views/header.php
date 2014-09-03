<?php
if (array_key_exists("login", $_GET)) {
    $oauth_provider = $_GET['oauth_provider'];
    if ($oauth_provider == 'twitter') {
        header("Location:home/logintwitter");
    }
}
        unset($_SESSION['access_token']);
        unset($_SESSION['oauth_token_secret']);
require_once 'src/Google_Client.php'; // include the required calss files for google login
require_once 'src/contrib/Google_PlusService.php';
require_once 'src/contrib/Google_Oauth2Service.php';
$client = new Google_Client();
$client->setApplicationName("Bitty"); // Set your applicatio name
$client->setScopes(array('https://www.googleapis.com/auth/userinfo.email', 'https://www.googleapis.com/auth/plus.me')); // set scope during user login
$client->setClientId('774206827525-ajfs45o6rcf6trg7riq1atubfnt123qo.apps.googleusercontent.com'); // paste the client id which you get from google API Console
$client->setClientSecret('mj5QQD87Gv32vHh08BfxufuY'); // set the client secret
$client->setRedirectUri('http://localhost:8080/bittye/'); // paste the redirect URI where you given in APi Console. You will get the Access Token here during login success
$client->setDeveloperKey('XXXXXXXXXXXXXXXX'); // Developer key
$plus 		= new Google_PlusService($client);
$oauth2 	= new Google_Oauth2Service($client); // Call the OAuth2 class for get email address
if(isset($_GET['code'])) {
	$client->authenticate(); // Authenticate
	$_SESSION['access_token'] = $client->getAccessToken(); // get the access token here
	header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}
if(isset($_SESSION['access_token'])) {
	$client->setAccessToken($_SESSION['access_token']);
}

if ($client->getAccessToken()) {
  $user 		= $oauth2->userinfo->get();
  $me 			= $plus->people->get('me');
  $optParams 	= array('maxResults' => 100);
  $activities 	= $plus->activities->listActivities('me', 'public',$optParams);
 
  $_SESSION['access_token'] = $client->getAccessToken();
  $email = filter_var($user['email'], FILTER_SANITIZE_EMAIL); // get the USER EMAIL ADDRESS using OAuth2
} else {
	$authUrl = $client->createAuthUrl();
}

if(isset($me)){ 
	$_SESSION['gplusuer'] = $me; 
        
        $displayname = $me['displayName'];
        $parts = explode(" ", $displayname);
        $lastname = array_pop($parts);
        $firstname = implode(" ", $parts);
         $gender=$me['gender'];
         $profileimageurl=$me['image']['url'];
         $email=$user['email'];
         $googleid=$me['id'];
          $msql = mysql_query("SELECT * FROM buyer WHERE google_token='".$googleid."'" );
	if(mysql_num_rows($msql)>0){
             while($array =mysql_fetch_array($msql)){
                //$this->session->set_userdata('User',$array['user_id']);
                }
                 unset($_SESSION['access_token']);
  unset($_SESSION['gplusuer']);
  session_destroy();
	}else {
      $msql = $this->db->query("insert into buyer values('','".$firstname."','".$lastname."','".$displayname."','".$gender."','','','','','','','','','".$email."','','','".$googleid."','','','','')" );
               $id=$this->db->insert_id();
               
              $profile_pic=  file_get_contents($profileimageurl);           
               $attachmentarray = array();
              file_put_contents("./profileimage/image_".$id.".png", $profile_pic);
             array_push($attachmentarray, "image_".$id.".png");
                   
             $attachmentjsonarray=json_encode($attachmentarray);
              
            $this->db->query("update buyer set profile_pic='".$attachmentjsonarray."' where id='".$id."'");
               unset($_SESSION['access_token']);
              unset($_SESSION['gplusuer']);
              session_destroy();
         
        }        
}

if(isset($_GET['logout'])) {
  unset($_SESSION['access_token']);
  unset($_SESSION['gplusuer']);
  session_destroy();
  header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']); // it will simply destroy the current seesion which you started before
 
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
function sub()
{ var flag=true;
   var sys_email=document.getElementById('sys_mail').value;
   var sys_pass=document.getElementById('pass').value;
     if(document.getElementById('sys_mail').value=='')
         { 
          document.getElementById('mailerror').inner    
             flag=false;
         }
       if(document.getElementById('pass').value=='')
         {
             flag=false;
         }
         if(flag==false)
             {
         return false;
             }
             else { 
            $.ajax({
      url:'<?php echo base_url();?>home/buyervalidate',
      type:'post',
      async:false,
      data:{sys_email:sys_email,
           sys_pass:sys_pass},
      success:function(data){
            location.href='<?php echo base_url();?>home';
    },
   });     
            $("#sys_pop_login").fadeOut();
                 return true;
             }
}
</script>
<header class="mod-header">
    <div class="grid_frame">
        <div class="container_grid clearfix">
            <div class="grid_12">
                <div class="header-content clearfix">
                    <h1 id="logo" class="rs">
                        <a href="<?php echo base_url();?>home">
                            <img src="<?php echo base_url();?>images/logo.png" alt="$SITE_NAME"/>
                        </a>
                    </h1>
                    <?php $level=$this->session->userdata('userlevel'); ?>
                  <?php if($level==1){ ?>
                       <span style="padding-left: 5px;">
                   <a id="" class="btn btn-green type-login btn-login" href="<?php echo base_url();?>admin/logout">Logout</a>
                     </span>
                        <a id="sys_head_addcoupon" class="btn btn-green type-login btn-login" href="#">Add coupon</a>
                  <?php } else if($level>0) { ?>
                    <a id="" class="btn btn-green type-login btn-login" href="<?php echo base_url();?>home/logout">Logout</a>
                  <?php } else { ?>
                     <a id="sys_head_login" class="btn btn-green type-login btn-login" href="#">Login</a>
                  <?php } ?>
                    <nav class="main-nav">
                        <ul id="main-menu" class="nav nav-horizontal clearfix">
                            <li class="active">
                                <a href="<?php echo base_url();?>home">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>home/coupons">Coupons</a>
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
                                <img class="account" src="<?php echo base_url();?>images/reg-account.png" alt="bittye.com">
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
                                 
                                    <a class="btn-flat gg" href="?login&oauth_provider=twitter">Twitter</a>
                                  <?php if(isset($authUrl)) {
	echo "<a class='login btn-flat gg' href='$authUrl'>Google</a>";
	} else {
	echo "<a class='logout' href='index.php?logout'>Logout</a>";
                } ?>
                                      
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

