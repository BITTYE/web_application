<?php
?>
  <!-- Date picker link  -->
 <link rel="stylesheet" href="<?php echo base_url();?>css/Date.css">
<script src="<?php echo base_url();?>js/jquery-1.10.2.js"></script>
<script src="<?php echo base_url();?>js/Date.js"></script>
<script type="text/javascript">

 $(document).ready(function (){
 
     $("#coupon_startdate").datepicker({ dateFormat: 'dd-mm-yy',changeMonth: true,
      changeYear: true,yearRange: "-80:+1" });
 });
 function postcoupon()
  {
     var flag=true;    
      
   /*   var coupon_title=document.getElementById('coupon_title').value;
      var categoryid=document.getElementById('categoryid').value;
      var sellerid=document.getElementById('sellerid').value;
      var coupon_image=document.getElementById('coupon_image').value;
      var coupon_cost=document.getElementById('coupon_cost').value;
      var coupon_description=document.getElementById('coupon_description').value;*/
      
    /*  if(document.getElementById('category').value==''){
          alertr()
          flag=false;
      }
       if(document.getElementById('seller').value==''){
          flag=false;
      }*/
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
       // alert('please provide input');
       return false;
    }else{
         $("#sys_btn_submit").on("click",function(){
        $("#sys_head_addcoupon").trigger("click");
    });
    return true;
     /* $.ajax({
         url:'<?php //echo base_url();?>home/addcoupons',
         type:'post',
         async:false,
         data:{coupon_title:coupon_title,
               categoryid:categoryid,
               sellerid:sellerid,
               coupon_image:coupon_image,
              coupon_cost:coupon_cost,
             coupon_description:coupon_description,
         },
         success:function(data){
              
         },
      });*/
     }
  }
 </script>
 
<div class="left-form">
    <form action="<?php echo base_url();?>home/addcoupons" method="post" enctype='multipart/form-data'>
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
    <label class="wrap-txt" >
        <input class="input-txt" id="coupon_title" name="coupon_title" type="text" placeholder="coupon title"/>
    </label>
    <label class="wrap-txt grid_6 make-right" >
        <input type='file' id="coupon_image" name="coupon_image"/>
    </label> 
    <label class="wrap-txt" >
        <input class="input-txt" name="coupon_startdate" id="coupon_startdate" type="date" placeholder="coupen start date"/>
    </label>
    <label class="wrap-txt" >
        <input class="input-txt" name="coupon_enddate" id="coupon_enddate" type="date" placeholder="coupen end date"/>
    </label>
     <label class="wrap-txt" >
        <input class="input-txt" id="coupon_cost" name="coupon_cost" type="text" placeholder="coupen price amount"/>
    </label>
     <label class="wrap-txt" >
        <input class="input-txt" id="coupon_description" name="coupon_description" type="text" placeholder="coupen description"/>
    </label>
       <button class="btn-flat gr btn-submit-reg" type="submit" onclick="return postcoupon();">Submit</button>
 </form>
</div>
   
