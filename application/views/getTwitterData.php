<?php

require("twitter/twitteroauth.php");


if (!empty($_GET['oauth_verifier']) && !empty($_SESSION['oauth_token']) && !empty($_SESSION['oauth_token_secret'])) {
   
    $twitteroauth = new TwitterOAuth(YOUR_CONSUMER_KEY, YOUR_CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);

    $access_token = $twitteroauth->getAccessToken($_GET['oauth_verifier']);

    $_SESSION['access_token'] = $access_token;

    $user_info = $twitteroauth->get('account/verify_credentials');

    echo '<pre>';
   // print_r($user_info);
    echo '</pre><br/>';
    if (isset($user_info->error)) {
   
        header('Location: login-twitter.php');
    } else {
     ?>
<?php
        $twitter_otoken=$_SESSION['oauth_token'];
	$twitter_otoken_secret=$_SESSION['oauth_token_secret'];
	$email='';
        $uid = $user_info->id;
       
        $displayname = $user_info->name;
        $parts = explode(" ", $displayname);
        $lastname = array_pop($parts);
        $firstname = implode(" ", $parts);
        $image=$user_info->profile_image_url;
       
        ?>
<html><head>
<script src="<?php echo base_url(); ?>js/jquery-1.10.2.js"></script>
<script>
 
    $.ajax({
                 url:'<?php echo base_url(); ?>home/twitvalues',
                    type:'post',
                    async:false,
                    
                    data:{userid:'<?php echo $uid; ?>',displayname:'<?php echo $displayname; ?>',firstname:'<?php echo $firstname;?>',lastname:'<?php echo $lastname;?>',image:'<?php echo $image; ?>'},
                    success : function (result){
                              
                 location.href="<?php echo base_url();?>home";
                      }
    });
  
</script>
</head></html>
<?php
       
    }
   /*  unset($_SESSION['access_token']);
        unset($_SESSION['oauth_token_secret']);*/
}
?>
