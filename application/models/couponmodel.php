<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class couponmodel extends CI_Model{
    public function getcategories()
    {
        $result=$this->db->query("select * from category");
        return $result->result();
    }
    public function getallsellers()
    {
        $result=$this->db->query("select * from seller");
        return $result->result();
    }
    public function addcoupontodb()
    {
        $coupon_title=$this->input->post('coupon_title');
        $categoryid=$this->input->post('categoryid');
        $sellerid=$this->input->post('sellerid');
      //  $coupon_startdate=$this->input->post('coupon_startdate');
     //   $coupon_enddate=$this->input->post('coupon_enddate');
        $coupon_cost=$this->input->post('coupon_cost');
        $coupon_description=$this->input->post('coupon_description');
        
        $this->db->query("insert into coupens values('','".$sellerid."','".$categoryid."','1','".$coupon_title."',
             '','','','','".$coupon_cost."','','','','".$coupon_description."','','','','')");
        $id=$this->db->insert_id();
         $name="image"."_$id";
         $document="";
                if($_FILES['coupon_image']['tmp_name']!=""){
                    $ext =  end(explode('.', $_FILES['coupon_image']['name']));
                    
                    move_uploaded_file($_FILES["coupon_image"]["tmp_name"],
                   "./coupenimages/" . $_FILES["coupon_image"]["name"]);
                    rename('./coupenimages/'. $_FILES["coupon_image"]["name"], './coupenimages/'.$name.".".$ext);
                     $document = $name.".".$ext;
                } 
                $attachmentarray = array();
                  array_push($attachmentarray, $document);
                  $attachmentjsonarray=json_encode($attachmentarray);
                  
             $this->db->query("update coupens set coupen_images='".$attachmentjsonarray."' where id='".$id."'");
        return $id;
    }
    public function getallcoupons()
    {
        $result=$this->db->query("select * from coupens ");
        return $result->result();
    }
}
?>
 