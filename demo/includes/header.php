<header class="mod-header">
    <div class="grid_frame">
        <div class="container_grid clearfix">
            <div class="grid_12">
                <div class="header-content clearfix">
                    <h1 id="logo" class="rs">
                        <a href="index.php">
                            <img src="images/logo.png" alt="$SITE_NAME"/>
                        </a>
                    </h1>
                    <a id="sys_head_login" class="btn btn-green type-login btn-login" href="#">Login</a>
                    <nav class="main-nav">
                        <ul id="main-menu" class="nav nav-horizontal clearfix">
                            <li class="active">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="has-sub">
                                <a href="../brand-list.html">Brands</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Empire Hotel</a></li>
                                    <li><a href="#">PVR cinemas</a></li>
                                    <li><a href="#">Pizza hut</a></li>
                                    <li><a href="#">Play arena</a></li>
                                    <li><a href="#">Samarrun Biyrani</a></li>
                                </ul>
                            </li>
                            <!--<li><a href="../blog.html">Blog</a></li>-->
                            <li>
                                <a href="profile.php">My grabs</a>
                                <i class="icon iPickRed lbl-count"><span>2 / 5</span></i>
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
                        <form action="#">
                            <?php include 'login-form.php';?>
                            <div class="right-create-acc">
                                <img class="account" src="../images/reg-account.png" alt="bittye.com">
                                <p class="lbl-dung-lo rs">Not a member? Don’t worry</p>
                                <a id="sys_link_reg_panel" href="../register.php" class="btn-flat yellow btn-submit-reg">Create an account</a>
                                <div id="sys_warning_sms" class="warning-sms" data-warning-txt="No spam guarantee,No disturb,Promotion News"></div>
                            </div>
                        </form>
                        <i class="line-sep"></i>
                    </div>
                </div><!--end: Login panel -->
                <div class="mod-register">
                    <h3 class="rs title-mod">Hello pretty! Welcome to bittye.com</h3>
                    <div class="desc-reg">Sign up for free and get exclusive access to members-only savings, rewards and special promotions from bittye. Enter in an email and a password or sign up with Facebook.</div>
                    <div class="wrap-form-reg clearfix">
                        <form action="#">
                            <?php include 'register-form.php';?>
                            <div class="right-connect">
                                <button class="btn-flat yellow btn-submit-reg" type="submit">Create an account</button>
                                <div class="sep-connect">
                                    <span>Or</span>
                                </div>
                                <div class="grp-connect">
                                    <p class="rs">Sign up using your account on:</p>
                                    <a class="btn-flat fb" href="#">Facebook</a>
                                    <a class="btn-flat gg" href="#">Google</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <p class="rs wrap-link-back">
                        <a id="sys_link_login_panel" href="../login.php" class="link-back">
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
</header><!--end: header.mod-header -->
