<script>
function sub()
{
   var sys_email=document.getElementById('sys_mail').value;
   var sys_pass=document.getElementById('pass').value;

   $.ajax({
      url:'<?php echo base_url();?>home/validate',
      type:'post',
      async:false,
      data:{sys_email:sys_email,
           sys_pass:sys_pass},
      success:function(data){
           
        if(data=="success")
        {
           // location.href='<?php// echo base_url();?>home';
        }/*else {
              location.href='<?php// echo base_url();?>home/homeview';
        }*/
                 location.href='<?php echo base_url();?>home';
    },
   });
}
</script>    
<div class="left-form">
    <form method="post">
        <label class="wrap-txt" >
            <input class="input-txt" id="sys_mail" name="sys_mail" type="email" placeholder="you@mail.com"/>
        </label>
        <label class="wrap-txt" >
            <input class="input-txt" id="pass" name="pass" type="password" placeholder="password please!"/>
        </label>
        <label class="wrap-check" >
            <input id="sys_chk_news"  type="checkbox"/> Remember me
            <i class="icon iUncheck"></i>
            <a class="lost-pass" href="#">Forgot password ?</a>
        </label>
       
               
        <div class="wrap-login-btn">
            <button class="btn-flat gr btn-submit-reg" type="button" onclick="sub();">Login</button>
            <div class="sep-connect">
                <span>Or</span>
            </div>
            <div class="grp-connect">
                <a class="btn-flat fb" href="#">Facebook</a>
                <a class="btn-flat gg" href="#">Google</a>
            </div>
        </div>
         </form>
    </div>
