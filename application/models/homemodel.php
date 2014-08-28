<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class homemodel extends CI_Model{
    public function inserttwitterdata()
    {
        
        $displayname=$this->input->post('displayname');
        $token=$this->input->post('userid');
        $firstname=$this->input->post('firstname');
        $lastname=$this->input->post('lastname');
        $profileimageurl=$this->input->post('image');
        
       $query = mysql_query("SELECT * FROM buyer WHERE twitter_token = '$token' ") or die(mysql_error());
        $result = mysql_fetch_array($query);
        if (!empty($result)) {
         return 2;
        } 
        else {
        $this->db->query("insert into buyer values('','".$firstname."','".$lastname."','".$displayname."','','','','','','','','','','','',
            '".$token."','','','','','')");
        $id=$this->db->insert_id();
        $profile_pic=  file_get_contents($profileimageurl);           
            $attachmentarray = array();
           file_put_contents("./profileimage/image_".$id.".png", $profile_pic);
          array_push($attachmentarray, "image_".$id.".png");
                   
             $attachmentjsonarray=json_encode($attachmentarray);
             
             $this->db->query("update buyer set profile_pic='".$attachmentjsonarray."' where id='".$id."'");
        
        return $id;
        }
    }
    public function Validateadmin($username,$password)
    {
        $result = $this->db->query("select * from  admin where emailid='".$username."' and password='".$password."'");
       if($result->num_rows > 0)
        {
            return $result->row();
        }
        else{
            return 0;
        }
    }
    public function Validatebuyer($username,$password)
    {
        $result=$this->db->query("select * from buyer where email='".$username."' and password='".$password."'");
        if($result->num_rows > 0)
        {
            return $result->row();
        }
        else{
            return 0;
        }
    }
    public function registerbuyer()
    {
         $first_name=$this->input->post('first_name');
        $last_name=$this->input->post('last_name');
        $displayname=$first_name.$last_name;
        $sys_email=$this->input->post('sys_email');
        $mobile_num=$this->input->post('mobile_num');
        $sys_pass=$this->input->post('sys_pass');
        $sys_occupation=$this->input->post('sys_occupation');
        $sys_address=$this->input->post('sys_address');
        $sys_city=$this->input->post('sys_buyercity');
        $sys_pincode=$this->input->post('sys_pincode');
        $sys_buyercity=$this->input->post('sys_buyercity');
         $sys_dateofbirth=date('Y-m-d',  strtotime($this->input->post('sys_dateofbirth')));
        $sys_buyercity=$this->input->post('sys_buyercity');
         $gender=$this->input->post('gender');
       
         date_default_timezone_set('Asia/Calcutta');
      $registerdate = date('Y-m-d');
      
        $this->db->query("insert into buyer values('','".$first_name."','".$last_name."','".$displayname."','".$gender."',
            '".$mobile_num."','".$sys_pass."','','".$sys_address."','".$sys_buyercity."','".$sys_pincode."','".$sys_occupation."','".$sys_dateofbirth."','".$sys_email."','',
            '','','".$registerdate."','','','1')");
        $id=$this->db->insert_id();
         $name="image"."_$id";
         $document="";
                if($_FILES['profile_image']['tmp_name']!=""){
                    $ext =  end(explode('.', $_FILES['profile_image']['name']));
                    
                    move_uploaded_file($_FILES["profile_image"]["tmp_name"],
                   "./profileimage/" . $_FILES["profile_image"]["name"]);
                    rename('./profileimage/'. $_FILES["profile_image"]["name"], './profileimage/'.$name.".".$ext);
                     $document = $name.".".$ext;
                } 
                $attachmentarray = array();
                  array_push($attachmentarray, $document);
                  $attachmentjsonarray=json_encode($attachmentarray);
                  
             $this->db->query("update buyer set profile_pic='".$attachmentjsonarray."' where id='".$id."'");
    }
   
}
?>
