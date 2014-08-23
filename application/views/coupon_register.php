<?php
?>
  <!-- Date picker link  -->
 <link rel="stylesheet" href="<?php echo base_url();?>css/date.css">
<script src="<?php echo base_url();?>js/jquery-1.10.2.js"></script>
<script src="<?php echo base_url();?>js/date.js"></script>
<script type="text/javascript">

 $(document).ready(function (){
 
     $("#coupon_startdate").datepicker({ dateFormat: 'dd-mm-yy',changeMonth: true,
      changeYear: true,yearRange: "-80:+1" });
 });
 function postcoupon()
  {
     var flag=true;    
  
      var coupon_title=document.getElementById('coupon_title').value;
      var categoryid=document.getElementById('category').value;
      var sellerid=document.getElementById('seller').value;
     // var coupon_startdate=document.getElementById('coupon_startdate').value;
    //  var coupon_enddate=document.getElementById('coupon_enddate').value;
      var coupon_cost=document.getElementById('coupon_cost').value;
      var coupon_description=document.getElementById('coupon_description').value;
      if(document.getElementById('category').value==''){
          flag=false;
      }
       if(document.getElementById('seller').value==''){
          flag=false;
      }
    if(flag==false){
        alert('please require input');
    }else{
      $.ajax({
         url:'<?php echo base_url();?>home/addcoupons',
         type:'post',
         async:false,
         data:{coupon_title:coupon_title,
               categoryid:categoryid,
               sellerid:sellerid,
              //coupon_startdate:coupon_startdate,
             // coupon_enddate:coupon_enddate,
              coupon_cost:coupon_cost,
             coupon_description:coupon_description,
         },
         success:function(data){
              
         },
      });
     }
  }
 </script>
<div class="left-form">
    <form>
        
        <label class="wrap-txt " >
           
            <select class="dropdown-cate grid_frame" name="category" id="category">
                 <option value="">-- please select category --</option>
                  <?php foreach($category as $list){ ?>
                <option class="grid_10"  value="<?php echo $list->category_id;?>"><?php echo $list->categoryname;?></option>
                 <?php } ?>
            </select>
         </label>
        
        <label class="wrap-txt " >
             <select class="dropdown-cate grid_frame" name="seller" id="seller">
                 <option value="">-- please select seller --</option>
                  <?php foreach($sellers as $list){ ?>
                <option class="grid_10" value="<?php echo $list->id;?>"><?php echo $list->sellername;?></option>
                 <?php } ?>
            </select>
        </label>
    <label class="wrap-txt" >
        <input class="input-txt" id="coupon_title" type="email" placeholder="coupon title"/>
    </label>
    <label class="wrap-txt grid_6 make-right" >
        <input class="input-txt" id="coupon_image" type="file" placeholder="upload coupen image"/>
    </label>
    <label class="wrap-txt" >
        <input class="input-txt" id="coupon_startdate" type="text" placeholder="coupen start date"/>
    </label>
    <label class="wrap-txt" >
        <input class="input-txt" id="coupon_enddate" type="text" placeholder="coupen end date"/>
    </label>
     <label class="wrap-txt" >
        <input class="input-txt" id="coupon_cost" type="text" placeholder="coupen price amount"/>
    </label>
     <label class="wrap-txt" >
        <input class="input-txt" id="coupon_description" type="text" placeholder="coupen description"/>
    </label>
       <button id="sys_close_addcoupon_popup" class="btn-flat gr btn-submit-reg" type="button" onclick="postcoupon();">Submit</button>
   </form>
</div>
