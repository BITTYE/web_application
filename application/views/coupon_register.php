<?php
?>
<script type="text/javascript">
 function postcoupon()
  {
     var flag=true;    
      if(document.getElementById('coupon_title').value==''){
          flag=false;
      }
       if(document.getElementById('coupon_cost').value==''){
          flag=false;
      }
       if(document.getElementById('coupon_description').value==''){
          flag=false;
      }
    if(flag==false){
       return false;
    }else{
         $("#sys_btn_submit").on("click",function(){
        $("#sys_head_addcoupon").trigger("click");
    });
    return true;
     }
  }
 </script>
<div>
    <form action="<?php echo base_url();?>home/addcoupons" method="post" enctype='multipart/form-data'>
 <div class="left-form">
     
    
         <label class="wrap-txt" >
        <input class="input-txt" id="coupon_title" name="coupon_title" type="text" placeholder="coupon title"/>
    </label>
        <label class="wrap-txt " >
            <select class="dropdown-cate grid_frame" name="categoryid" id="categoryid">
                 <option value="">-- please select category --</option>
                  <?php foreach($category as $list){ ?>
                <option class="grid_10"  value="<?php echo $list->category_id;?>"><?php echo $list->categoryname;?></option>
                 <?php } ?>
            </select>
         </label>
        <label class="wrap-txt " >
             <select class="dropdown-cate grid_frame" name="sellerid" id="sellerid">
                 <option value="">-- please select seller --</option>
                  <?php foreach($sellers as $list){ ?>
                <option class="grid_10" value="<?php echo $list->id;?>"><?php echo $list->sellername;?></option>
                 <?php } ?>
            </select>
        </label>
    <label class="wrap-txt grid_6 make-left" >
       Upload coupon Pic<input type="file" id="coupon_image" name="coupon_image" />
    </label> 
    
    <label class="wrap-txt" >
         <textarea class="input-txt" id="sys_address" name="sys_address"  placeholder="coupon address"></textarea>
    </label>
     <label class="wrap-txt grid_6 " >
        <input class="input-txt" name="sys_couponcity" id="sys_couponcity" type="text" placeholder="coupon city"/>
    </label>
     <label class="wrap-txt grid_6 make-right" >
        <input class="input-txt" name="sys_pincode" id="sys_pincode" type="text" placeholder="Pincode"/>
    </label>
    <label class="wrap-txt" >
        <input class="input-txt" name="coupon_startdate" id="coupon_startdate" type="text" placeholder="coupon start date"/>
    </label>
    <label class="wrap-txt" >
        <input class="input-txt" name="coupon_enddate" id="coupon_enddate" type="text" placeholder="coupon end date"/>
    </label>
     <label class="wrap-txt" >
        <input class="input-txt" id="coupon_cost" name="coupon_cost" type="text" placeholder="coupon price amount"/>
    </label>
     <label class="wrap-txt" >
        <input class="input-txt" id="coupon_description" name="coupon_description" type="text" placeholder="coupon description"/>
    </label>
      
</div>
<div class="left-form">
    <label class="wrap-txt" >
         <textarea class="input-txt" id="sys_termscondition" name="sys_termscondition"  placeholder="Terms and Conditions"></textarea>
    </label>
    <label class="wrap-txt" >
         <textarea class="input-txt" id="sys_couponoffer" name="sys_couponoffer"  placeholder="coupon offers"></textarea>
    </label>
    <label class="wrap-txt" >
         <input class="input-txt" id="sys_validity" type="text" name="sys_validity"  placeholder="coupon Utilization validity"></textarea>
    </label>
    <label class="wrap-txt" >
         <textarea class="input-txt" id="sys_recommendation" name="sys_recommendation"  placeholder="coupon Recommendations"></textarea>
    </label>
      <button class="btn-flat gr btn-submit-reg" type="submit" onclick="return postcoupon();">Submit</button>
</div>
   
 </form>
</div>



 

