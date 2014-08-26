<?php
ob_start();
require 'facebook/facebook.php';

$facebook = new Facebook(array(
  'appId'  => APP_ID,
  'secret' => APP_SECRET,
));
$users = $facebook->getUser();

if ($users!="") {	
  try {

    $user_profile = $facebook->api('/me');
	$logoutUrl = $facebook->getLogoutUrl();
     
	$fuserid=$user_profile["id"];
	$fusername=$user_profile["username"];
        $firstname=$user_profile["first_name"];
        $lastname=$user_profile["last_name"];
        $displayname=$firstname.$lastname;
        $gender=$user_profile["gender"];
       // $email=$user_profile["email"];
        $imagestring="http://graph.facebook.com/$fuserid/picture?type=normal";
        $profile_pic=  file_get_contents($imagestring);
        $buyercity=$user_profile["location"];
        $newtoken=base64_encode($fuserid."::".$fusername);
         
        $tokenarr=explode("::",base64_decode($newtoken));
		$passcode=$tokenarr[0];
            $msql = mysql_query("SELECT * FROM buyer WHERE facebook_token='".$fuserid."'" );

	if(mysql_num_rows($msql)>0){
             while($array =mysql_fetch_array($msql)){
                
                $this->session->set_userdata('User',$array['user_id']);
                }
		$sqlrow=mysql_fetch_object($msql);
               redirect('home');
	}else {
              $msql = $this->db->query("insert into buyer values('','".$firstname."','".$lastname."','".$displayname."','".$gender."','','','','','','','','','','".$passcode."','','','','','','')" );
               $id=$this->db->insert_id();
              
               $attachmentarray = array();
              file_put_contents("./profileimage/image_".$id.".png", $profile_pic);
             array_push($attachmentarray, "image_".$id.".png");
                   
             $attachmentjsonarray=json_encode($attachmentarray);
           redirect('home');
        }

  } catch (FacebookApiException $e) {
  
    $users = null;
  }
}
?>