<?php 
?>
<!DOCTYPE html>
<html>

<head>
    <title>Coupon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="<?php echo base_url();?>css/font.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>css/normalize.css"/>
    <!--css plugin-->
    <link rel="stylesheet" href="<?php echo base_url();?>css/flexslider.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>css/jquery.nouislider.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>css/jquery.popupcommon.css"/>

    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css"/>
    
    
    <!--[if IE 9]>
    <link rel="stylesheet" href="../css/ie9.css"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="../css/ie8.css"/>
    <![endif]-->

    <link rel="stylesheet" href="<?php echo base_url();?>css/res-menu.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>css/responsive.css"/>
    <!--[if lte IE 8]>
        <script type="text/javascript" src="../js/html5.js"></script>
    <![endif]-->
   
</head>
<body class=""><!--<div class="alert_w_p_u"></div>-->
<div class="container-page">
    <div class="mp-pusher" id="mp-pusher">
        <?php include 'header.php';?>
<?php include 'mobile-nav.php';?>
        <!--<header class="mod-header">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <div class="header-content clearfix">
                            <h1 id="logo" class="rs">
                                <a href="index-2.html">
                                    <img src="<?php// echo base_url();?>images/logo.png" alt="$SITE_NAME"/>
                                </a>
                            </h1>
                              <?php //$level=$this->session->userdata('userlevel'); ?>
                  <?php //if($level==1){ ?>
                     <a id="sys_head_addcoupon" class="btn btn-green type-login btn-login" href="#">Add coupon</a>
                  <?php// } else  { ?>
                    <a id="sys_head_login" class="btn btn-green type-login btn-login" href="#">Login</a>
                  <?php //}?>
                            <nav class="main-nav">
                                <ul id="main-menu" class="nav nav-horizontal clearfix">
                                    <li>
                                        <a href="<?php// echo base_url();?>home/homeview">Home</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php// echo base_url();?>home/coupons">Coupons</a>
                                    </li>
                                    <li class="has-sub">
                                        <a href="<?php// echo base_url();?>home/couponcode">Coupons Code</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php// echo base_url();?>home/couponcode">Coupons Code 1</a></li>
                                            <li><a href="coupon-code-2.html">Coupons Code 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub">
                                        <a href="<?php// echo base_url();?>home/brandlist">Brands</a>
                                        <ul class="sub-menu">
                                            <li><a href="brand-detail-1.html">Brand Detail 1</a></li>
                                            <li><a href="brand-detail-2.html">Brand Detail 2</a></li>
                                            <li><a href="brand-detail-3.html">Brand Detail 3</a></li>
                                            <li><a href="brand-detail-4.html">Brand Detail 4</a></li>
                                            <li><a href="brand-detail-5.html">Brand Detail 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php// echo base_url();?>home/blog">Blog</a></li>
                                    <li>
                                        <a href="<?php //echo base_url();?>home/mycoupon">My coupons</a>
                                        <i class="icon iPickRed lbl-count"><span>12</span></i>
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
                            <h3 class="rs title-mod">Hello pretty! Welcome to Couponday.com</h3>
                            <div class="wrap-form-reg clearfix">
                                <form action="#">
                                    <div class="left-form">
                                        <label class="wrap-txt" for="sys_email">
                                            <input class="input-txt" id="sys_email" name="sys_email" type="email" placeholder="you@mail.com">
                                        </label>
                                        <label class="wrap-txt" for="sys_pass">
                                            <input class="input-txt" id="sys_pass" name="sys_pass" type="password" placeholder="password please!">
                                        </label>
                                        <label class="wrap-check" for="sys_chk_news">
                                            <input id="sys_chk_news" class="input-chk" type="checkbox"> Remember me
                                            <i class="icon iUncheck"></i>
                                            <a class="lost-pass" href="#">Forgot password ?</a>
                                        </label>
                                        <div class="wrap-login-btn">
                                            <button class="btn-flat gr btn-submit-reg" type="button" onclick="adminsub();">Login</button>
                                            <div class="sep-connect">
                                                <span>Or</span>
                                            </div>
                                            <div class="grp-connect">
                                                <a class="btn-flat fb" href="#">Facebook</a>
                                                <a class="btn-flat gg" href="#">Google</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-create-acc">
                                        <img class="account" src="<?php// echo base_url();?>images/reg-account.png" alt="Couponday.com">
                                        <p class="lbl-dung-lo rs">Not a member? Don’t worry</p>
                                        <a id="sys_link_reg_panel" href="register.php" class="btn-flat yellow btn-submit-reg">Create an account</a>
                                        <div id="sys_warning_sms" class="warning-sms" data-warning-txt="No spam guarantee,No disturb,Promotion News"></div>
                                    </div>
                                </form>
                                <i class="line-sep"></i>
                            </div>
                        </div>
                        <div class="mod-register">
                            <h3 class="rs title-mod">Hello pretty! Welcome to Couponday.com</h3>
                            <div class="desc-reg">Sign up for free and get exclusive access to members-only savings, rewards and special promotions from Coupons.com. Enter in an email and a password or sign up with Facebook.</div>
                            <div class="wrap-form-reg clearfix">
                                <form action="#">
                                    <div class="left-form">
                                        <label class="wrap-txt" for="sys_email_reg">
                                            <input class="input-txt" id="sys_email_reg" type="email" placeholder="you@mail.com"/>
                                        </label>
                                        <label class="wrap-txt" for="sys_pass">
                                            <input class="input-txt" id="sys_pass_reg" type="password" placeholder="password please!"/>
                                        </label>
                                        <label class="wrap-check" for="sys_chk_news_reg">
                                            <input id="sys_chk_news_reg" class="input-chk" type="checkbox"/> Send me the weekly Couponday.com’s offers.
                                            <i class="icon iUncheck"></i>
                                        </label>
                                        <label class="wrap-check" for="sys_chk_agree">
                                            <input id="sys_chk_agree" class="input-chk" type="checkbox"/> I agree to the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.
                                            <i class="icon iUncheck"></i>
                                        </label>
                                    </div>
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
                                <a id="sys_link_login_panel" href="login.php" class="link-back">
                                    <i class="pick-r"></i>
                                    Back to login
                                </a>
                            </p>
                        </div>
                    </div>
                    <div id="sys_paging_state" class="paging-state">
                        <i class="active"></i>
                        <i></i>
                    </div>
                    <i id="sys_close_login_popup" class="icon iClose close-popop"></i>
                </div>
            </div>
             <div id="sys_pop_addcoupon" class="pop-login">
        <div class="viewport-pop">
            <div class="transport-viewer clearfix">
                <div class="mod-register">
                    <h3 class="rs title-mod">Hello pretty! Welcome to coupon register</h3>
                    <div class="wrap-form-reg clearfix">
                        <form action="#">
                            <?php// include 'coupon_register.php';?>
                        </form>
                    </div>
                </div>
            </div>
            <div id="sys_paging_state" class="paging-state">
                <i class="active"></i>
                <i></i>
            </div>
            <i id="sys_close_addcoupon_popup" class="icon iClose close-popop"></i>
        </div>
    </div>
        </header>
        <nav id="mp-menu" class="mp-menu alternate-menu">
            <div class="mp-level">
                <h2>Menu</h2>
                <ul>
                    <li><a href="<?php //echo base_url();?>home/homeview">Home</a></li>
                    <li><a href="<?php //echo base_url();?>home/coupon">Coupons</a></li>
                    <li class="has-sub">
                        <a href="coupon-code.html">Coupons Code</a>
                        <div class="mp-level">
                            <h2>Coupons Code</h2>
                            <a class="mp-back" href="#">back</a>
                            <ul>
                                <li><a href="coupon-code.html">Coupons Code 1</a></li>
                                <li><a href="coupon-code-2.html">Coupons Code 2</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="has-sub">
                         <a href="<?php echo base_url();?>home/brand_list">Brands</a>
                        <div class="mp-level">
                            <h2>Brands</h2>
                            <a class="mp-back" href="#">back</a>
                            <ul>
                                <li><a href="brand-detail-1.html">Brand Detail 1</a></li>
                                <li><a href="brand-detail-2.html">Brand Detail 2</a></li>
                                <li><a href="brand-detail-3.html">Brand Detail 3</a></li>
                                <li><a href="brand-detail-4.html">Brand Detail 4</a></li>
                                <li><a href="brand-detail-5.html">Brand Detail 5</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="my-coupon.html">My coupons(12)</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </nav>-->
        <div class="top-area">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <h2 class="page-title">456 Coupons are waiting for you!</h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="sys_mod_filter" class="mod-filter">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <div class="lbl-search">
                            <input class="txt-search" id="sys_txt_search" type="search" placeholder="Search"/>
                            <input type="submit" class="btn-search" value=""/>
                        </div>
                        <div class="select-cate">
                            <div id="sys_selected_val" class="show-val">
                                <span data-cate-id="0">All type</span>
                                <i class="pick-down"></i>
                            </div>
                            <div id="sys_list_dd_cate" class="dropdown-cate">
                                <div class="first-lbl">All Categories</div>
                                <div class="wrap-list-cate clearfix">
                                    <a href="#" data-cate-id="1">Baby & Toddler</a>
                                    <a href="#" data-cate-id="2">Automotive </a>
                                    <a href="#" data-cate-id="3">Beverages</a>
                                    <a href="#" data-cate-id="4">Books & Magazines</a>
                                    <a href="#" data-cate-id="5">Foods </a>
                                    <a href="#" data-cate-id="6">Health Care</a>
                                    <a href="#" data-cate-id="7">Home Entertainment</a>
                                    <a href="#" data-cate-id="8">Personal Care </a>
                                    <a href="#" data-cate-id="9">Pet Care </a>
                                    <a href="#" data-cate-id="10">Professional Services </a>
                                    <a href="#" data-cate-id="11">Toys and Games</a>
                                    <a href="#" data-cate-id="12">Coupon Codes</a>
                                    <a href="#" data-cate-id="13">Recipes</a>
                                    <a href="#" data-cate-id="14">Household </a>
                                </div>
                            </div>
                        </div><!--end: .select-cate -->
                        <div class="range-days-left">
                            <span class="lbl-day">Days left</span>
                            <span id="sys_min_day" class="min-day"></span>
                            <div id="sys_filter_days_left" class="filter-days"></div>
                            <span id="sys_max_day" class="max-day"></span>
                        </div><!--end: .range-days-left -->
                        <input id="sys_apply_filter" class="btn btn-red type-1 btn-apply-filter" type="button" value="Apply Filter">
                    </div>
                </div>
            </div>
        </div><!--end: .mod-filter -->
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-grp-coupon block clearfix tabbable">
                    <div class="grid_12">
                        <h3 class="title-block">
                            <span class="wrap-tab">
                                <span class="lbl-tab active">New Coupons</span>
                                <span class="lbl-tab">Featured Coupons</span>
                            </span>
                        </h3>
                    </div>
                    <div class="block-content list-coupon clearfix">
                        <div class="tab-content">
                            <div class="tab-content-item active">
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$2.00 Off</div>
                                        <div class="coupon-brand">Wallmart</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">9 days 4 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                    </div>
                                    <i class="stick-lbl hot-sale"></i>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">Save $1.50 on two</div>
                                        <div class="coupon-brand">Lindt Chocolate</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">9 days 4 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                    </div>
                                    <i class="stick-lbl hot-sale"></i>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$5.00 Off</div>
                                        <div class="coupon-brand">Lindt Chocolate</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">2 days 14 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon untake" href="#">Un Take Coupon</a>
                                    </div>
                                    <i class="stick-lbl hot-sale"></i>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$7.00 Off</div>
                                        <div class="coupon-brand">Wallmart</div>
                                        <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                                        <div class="time-left">12 days 1 hour left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                    </div>
                                    <i class="stick-lbl hot-sale"></i>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$12.00 Off</div>
                                        <div class="coupon-brand">Wallmart</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">9 days 4 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                    </div>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$17.50 off</div>
                                        <div class="coupon-brand">Lindt Chocolate</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">9 days 4 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                    </div>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$3.00 Off</div>
                                        <div class="coupon-brand">Lindt Chocolate</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">2 days 14 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                    </div>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$7.00 Off</div>
                                        <div class="coupon-brand">Wallmart</div>
                                        <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                                        <div class="time-left">12 days 1 hour left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                    </div>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$2.00 Off</div>
                                        <div class="coupon-brand">Lindt Chocolate</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">9 days 4 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                    </div>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$11.50 off</div>
                                        <div class="coupon-brand">Lindt Chocolate</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">9 days 4 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                    </div>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$12.00 Off</div>
                                        <div class="coupon-brand">SunMart</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">2 days 14 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon untake" href="#">Un Take Coupon</a>
                                    </div>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$4.5 Off</div>
                                        <div class="coupon-brand">Wallmart</div>
                                        <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                                        <div class="time-left">12 days 1 hour left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                    </div>
                                </div><!--end: .coupon-item -->
                            </div>
                            <div class="tab-content-item">
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$7.00 Off</div>
                                        <div class="coupon-brand">Wallmart</div>
                                        <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                                        <div class="time-left">12 days 1 hour left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                    </div>
                                    <i class="stick-lbl hot-sale"></i>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$12.00 Off</div>
                                        <div class="coupon-brand">Wallmart</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">9 days 4 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                    </div>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$17.50 off</div>
                                        <div class="coupon-brand">Lindt Chocolate</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">9 days 4 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                    </div>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$3.00 Off</div>
                                        <div class="coupon-brand">Lindt Chocolate</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">2 days 14 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                    </div>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$7.00 Off</div>
                                        <div class="coupon-brand">Wallmart</div>
                                        <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                                        <div class="time-left">12 days 1 hour left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                    </div>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$2.00 Off</div>
                                        <div class="coupon-brand">Lindt Chocolate</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">9 days 4 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                    </div>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$11.50 off</div>
                                        <div class="coupon-brand">Lindt Chocolate</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">9 days 4 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                    </div>
                                </div><!--end: .coupon-item -->
                            </div>
                        </div>
                    </div>
                    <a class="grid_6 btn btn-orange btn-load-more" href="#">LOAD MORE COUPON</a>
                </div><!--end block: Featured Coupons-->
                <div class="mod-email-newsletter clearfix">
                    <div class="grid_12">
                        <div class="wrap-form clearfix">
                            <div class="left-lbl">
                                <div class="big-lbl">newsletter</div>
                                <div class="sml-lbl">Don't miss a chance!</div>
                            </div>
                            <div class="wrap-email">
                                <label for="sys_email_newsletter">
                                    <input type="email" id="sys_email_newsletter" placeholder="Enter your email here"/>
                                </label>
                            </div>
                            <button class="btn btn-orange btn-submit-email" type="submit">SUBSCRIBE NOW</button>
                        </div>
                    </div>
                </div><!--end: .mod-email-newsletter-->
                <div class="mod-brands block clearfix">
                    <div class="grid_12">
                        <h3 class="title-block has-link">
                            POPULAR BRANDS (129)
                            <a href="#" class="link-right">See all <i class="pick-right"></i></a>
                        </h3>
                    </div>
                    <div class="block-content list-brand clearfix">
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.php" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                    </div>
                </div><!--end: .mod-brand -->
            </div>
        </div>
        <footer class="mod-footer">
            <div class="footer-top">
                <div class="grid_frame">
                    <div class="container_grid clearfix">
                        <div class="grid_3">
                            <div class="company-info">
                                <img src="<?php echo base_url();?>images/logo-gray.png" alt="CouponDay"/>
                                <p class="rs">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud</p>
                                <p class="rs">
                                    1200 Balh Blah Avenue <br />
                                    Hanoi, Vietnam 12137
                                </p>
                            </div>
                        </div>
                        <div class="grid_3">
                            <div class="block social-link">
                                <h3 class="title-block">Follow us</h3>
                                <div class="block-content">
                                    <ul class="rs">
                                        <li>
                                            <i class="fa fa-facebook-square fa-2x"></i>
                                            <a href="#" target="_blank">Our Facebook page</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-twitter-square fa-2x"></i>
                                            <a href="#" target="_blank">Follow our Tweets</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-pinterest-square fa-2x"></i>
                                            <a href="#" target="_blank">Follow our Pin board</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--end: Follow us -->
                        <div class="grid_3">
                            <div class="block intro-video">
                                <h3 class="title-block">Intro Video</h3>
                                <div class="block-content">
                                     <div class="block-content">
                                    <div class="wrap-video" id="sys_wrap_video">
                                        <div class="lightbox-video">
                                                <a class="html5lightbox" href="http://player.vimeo.com/video/36932496" title=""><i class="btn-play"></i><img src="<?php echo base_url();?>images/video-img.png" alt=""></a>
                                            </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div><!--end: Intro Video -->
                        <div class="grid_3">
                            <div class="block blog-recent">
                                <h3 class="title-block">Latest blog</h3>
                                <div class="block-content">
                                    <div class="entry-item flex">
                                        <a class="thumb-left" href="#">
                                            <img src="<?php echo base_url();?>images/ex/04-14.jpg" alt="$TITLE"/>
                                        </a>
                                        <div class="flex-body"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing eli</a></div>
                                    </div>
                                    <div class="entry-item flex">
                                        <a class="thumb-left" href="#">
                                            <img src="<?php echo base_url();?>images/ex/04-16.jpg" alt="$TITLE"/>
                                        </a>
                                        <div class="flex-body"><a href="#">Ut wisi enim ad minim veniam, quis nostrud</a></div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: blog-recent -->
                    </div>
                </div>
            </div><!--end: .foot-top-->
            <div class="foot-copyright">
                <div class="grid_frame">
                    <div class="container_grid clearfix">
                        <div class="left-link">
                            <a href="#">Home</a>
                            <a href="#">Term of conditions</a>
                            <a href="#">Privacy</a>
                            <a href="#">Support</a>
                            <a href="#">Contact</a>
                        </div>
                        <div class="copyright">
                            Copyright © 2014 by CouponDay. Designed by MegaDrupal
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.nouislider.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.popupcommon.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/html5lightbox.js"></script>

<!--//js for responsive menu-->
<script type="text/javascript" src="<?php echo base_url();?>js/modernizr.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/classie.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/mlpushmenu.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/script.js"></script>

<!--[if lte IE 9]>
<script type="text/javascript" src="../js/jquery.placeholder.js"></script>
<script type="text/javascript" src="../js/create.placeholder.js"></script>
<![endif]-->

<!--[if lte IE 8]>
<script type="text/javascript" src="../js/ie8.js"></script>
<![endif]-->
</body>

</html>