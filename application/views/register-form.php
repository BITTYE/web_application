<?php ?>
<script type="text/javascript">
 function registervalidate()
 {
     var flag=true;
     if(document.getElementById('first_name').value=='')
     {
         flag=false;
     }
     if(document.getElementById('last_name').value=='')
     {
         flag=false;
     }
     /* if(document.getElementById('gender').che)
     {
         flag=false;
     }*/
     if(document.getElementById('sys_email').value=='')
     {
         flag=false;
     }
     if(document.getElementById('mobile_num').value=='')
     {
         flag=false;
     }
     if(document.getElementById('sys_pass').value=='')
     {
         flag=false;
     }
     if(document.getElementById('sys_buyercity').value=='')
     {
         flag=false;
     }
      if(document.getElementById('sys_dateofbirth').value=='')
     {
         flag=false;
     }
     if(flag==false){
         return false;
     }else {
         return true;
     }
 }
</script>
<div class="left-form">
    <form action="<?php echo base_url();?>home/registerbuyer" method="post" enctype='multipart/form-data'>
    <label class="wrap-txt grid_6">
        <input class="input-txt" name="first_name" id="first_name" type="text" placeholder="first name"/>
    </label>
    <label class="wrap-txt grid_6 make-right">
        <input class="input-txt" name="last_name" id="last_name" type="text" placeholder="last name"/>
    </label>
    <label class="wrap-txt grid_6 " for="sys_chk_agree2">
  <input type="radio" id="gender" name="gender" value="male">&nbsp;&nbsp;&nbsp;&nbsp; Male  
    </label>
    <label class="wrap-txt grid_6 make-right">
     <input type="radio" id="gender" name="gender" value="female">&nbsp;&nbsp;&nbsp;&nbsp;Female
    </label>
    <label class="wrap-txt" >
        <input class="input-txt" name="sys_email" id="sys_email" type="email" placeholder="you@mail.com"/>
    </label>
     <label class="wrap-txt grid_6 make-left" >
        <input type="file" id="profile_image" name="profile_image"/>
    </label> 
    <label class="wrap-txt" >
        <input class="input-txt" name="mobile_num" id="mobile_num" type="text" placeholder="+91 9123456789"/>
    </label>
    <label class="wrap-txt grid_6" >
        <input class="input-txt" name="sys_pass" id="sys_pass" type="password" placeholder="password"/>
    </label>
    <label class="wrap-txt grid_6 make-right" >
        <input class="input-txt" id="sys_pass_conf" type="password" placeholder="confirm pwd"/>
    </label>
     <label class="wrap-txt grid_6 " >
        <input class="input-txt" name="sys_occupation" id="sys_occupation" type="text" placeholder="Occupation"/>
    </label>
     <label class="wrap-txt grid_6 make-right" >
        <input class="input-txt" name="sys_dateofbirth" id="sys_dateofbirth" type="text" placeholder="Birthdate"/>
    </label>
     <label class="wrap-txt" >
         <textarea class="input-txt" id="sys_address" name="sys_address"  placeholder="buyer address"></textarea>
    </label>
     <label class="wrap-txt grid_6 " >
        <input class="input-txt" name="sys_buyercity" id="sys_buyercity" type="text" placeholder="Buyer city"/>
    </label>
     <label class="wrap-txt grid_6 make-right" >
        <input class="input-txt" name="sys_pincode" id="sys_pincode" type="text" placeholder="Pincode"/>
    </label>
   
    <label class="wrap-check grid_12 make-left" for="sys_chk_news">
        <input id="sys_chk_news" class="input-chk make-left" type="checkbox"/> Send me the weekly Couponday.com’s offers.
        <i class="icon iUncheck"></i>
    </label>
    <label class="wrap-check grid_12 make-left" for="sys_chk_agree">
        <input id="sys_chk_agree" class="input-chk make-left" type="checkbox"/> I agree to the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.
        <i class="icon iUncheck"></i>
    </label>
         <button class="btn-flat gr btn-submit-reg" type="submit" onclick="return registervalidate();">Submit</button>
</form>
</div>