<?php?>
<!DOCTYPE html>
<html>

<head>
    <title>Coupon code</title>
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
       <!-- <header class="mod-header">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <div class="header-content clearfix">
                            <h1 id="logo" class="rs">
                                <a href="<?php// echo base_url();?>home/homeview">
                                    <img src="<?php //echo base_url();?>images/logo.png" alt="$SITE_NAME"/>
                                </a>
                            </h1>
                            <a id="sys_head_login" class="btn btn-green type-login btn-login" href="#">Login</a>
                            <nav class="main-nav">
                                <ul id="main-menu" class="nav nav-horizontal clearfix">
                                    <li>
                                        <a href="<?php// echo base_url();?>home/homeview">Home</a>
                                    </li>
                                    <li>
                                        <a href="<?php //echo base_url();?>home/coupons">Coupons</a>
                                    </li>
                                    <li class="has-sub">
                                        <a href="<?php //echo base_url();?>home/couponcode">Coupons Code</a>
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
                                            <input class="input-txt" id="sys_email" type="email" placeholder="you@mail.com">
                                        </label>
                                        <label class="wrap-txt" for="sys_pass">
                                            <input class="input-txt" id="sys_pass" type="password" placeholder="password please!">
                                        </label>
                                        <label class="wrap-check" for="sys_chk_news">
                                            <input id="sys_chk_news" class="input-chk" type="checkbox"> Remember me
                                            <i class="icon iUncheck"></i>
                                            <a class="lost-pass" href="#">Forgot password ?</a>
                                        </label>
                                        <div class="wrap-login-btn">
                                            <button class="btn-flat gr btn-submit-reg" type="submit">Login</button>
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
        </header>
        <nav id="mp-menu" class="mp-menu alternate-menu">
            <div class="mp-level">
                <h2>Menu</h2>
                <ul>
                    <li><a href="index-2.html">Home</a></li>
                    <li><a href="coupon.html">Coupons</a></li>
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
                        <a href="brand-list.html">Brands</a>
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
                        <h2 class="page-title">Coupon Code</h2>
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
                <div class="layout-2cols clearfix">
                    <div class="grid_8 content">
                        <div class="mod-coupons-code">
                            <div class="wrap-list">
                                <div class="coupons-code-item full flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/04-01.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 20%-50% Off All Vitamin World Brand Items</a></p>
                                        <p class="rs coupon-desc">Must book by 11:59PM CT on 11/17/13. Travel completed by 3/30/14.</p>
                                        <div class="bottom-action">
                                            <div class="left-vote">
                                                <span class="lbl-work">100% work</span>
                                                <span>
                                                    <span class="lbl-vote">12 <i class="icon iAddVote"></i></span>
                                                    <span class="lbl-vote">2 <i class="icon iSubVote"></i></span>
                                                </span>
                                            </div>
                                            <a class="btn btn-blue btn-view-coupon" href="#">VIEW <span>COUPON</span> CODE</a>
                                        </div>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/04-04.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                        <p class="rs coupon-desc">Must book by 11:59PM CT on 11/17/13. Travel completed by 3/30/14.</p>
                                        <div class="bottom-action">
                                            <div class="left-vote">
                                                <span class="lbl-work">100% work</span>
                                                <span>
                                                    <span class="lbl-vote">12 <i class="icon iAddVote"></i></span>
                                                    <span class="lbl-vote">2 <i class="icon iSubVote"></i></span>
                                                </span>
                                            </div>
                                            <a class="btn btn-blue btn-view-coupon" href="#">VIEW <span>COUPON</span> CODE</a>
                                        </div>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/04-05.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 20%-50% Off All Vitamin World Brand Items</a></p>
                                        <p class="rs coupon-desc">Must book by 11:59PM CT on 11/17/13. Travel completed by 3/30/14.</p>
                                        <div class="bottom-action">
                                            <div class="left-vote">
                                                <span class="lbl-work">100% work</span>
                                                <span>
                                                    <span class="lbl-vote">16 <i class="icon iAddVote"></i></span>
                                                    <span class="lbl-vote">0 <i class="icon iSubVote"></i></span>
                                                </span>
                                            </div>
                                            <a class="btn btn-blue btn-view-coupon" href="#">VIEW <span>COUPON</span> CODE</a>
                                        </div>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/04-02.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                        <p class="rs coupon-desc">Must book by 11:59PM CT on 11/17/13. Travel completed by 3/30/14.</p>
                                        <div class="bottom-action">
                                            <div class="left-vote">
                                                <span class="lbl-work">100% work</span>
                                                <span>
                                                    <span class="lbl-vote">21 <i class="icon iAddVote"></i></span>
                                                    <span class="lbl-vote">12 <i class="icon iSubVote"></i></span>
                                                </span>
                                            </div>
                                            <a class="btn btn-blue btn-view-coupon" href="#">VIEW <span>COUPON</span> CODE</a>
                                        </div>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/04-06.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 20%-50% Off All Vitamin World Brand Items</a></p>
                                        <p class="rs coupon-desc">Must book by 11:59PM CT on 11/17/13. Travel completed by 3/30/14.</p>
                                        <div class="bottom-action">
                                            <div class="left-vote">
                                                <span class="lbl-work">100% work</span>
                                                <span>
                                                    <span class="lbl-vote">321 <i class="icon iAddVote"></i></span>
                                                    <span class="lbl-vote">5 <i class="icon iSubVote"></i></span>
                                                </span>
                                            </div>
                                            <a class="btn btn-blue btn-view-coupon" href="#">VIEW <span>COUPON</span> CODE</a>
                                        </div>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/04-04.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                        <p class="rs coupon-desc">Must book by 11:59PM CT on 11/17/13. Travel completed by 3/30/14.</p>
                                        <div class="bottom-action">
                                            <div class="left-vote">
                                                <span class="lbl-work">100% work</span>
                                                <span>
                                                    <span class="lbl-vote">34 <i class="icon iAddVote"></i></span>
                                                    <span class="lbl-vote">8 <i class="icon iSubVote"></i></span>
                                                </span>
                                            </div>
                                            <a class="btn btn-blue btn-view-coupon" href="#">VIEW <span>COUPON</span> CODE</a>
                                        </div>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/04-01.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 20%-50% Off All Vitamin World Brand Items</a></p>
                                        <p class="rs coupon-desc">Must book by 11:59PM CT on 11/17/13. Travel completed by 3/30/14.</p>
                                        <div class="bottom-action">
                                            <div class="left-vote">
                                                <span class="lbl-work">100% work</span>
                                                <span>
                                                    <span class="lbl-vote">59 <i class="icon iAddVote"></i></span>
                                                    <span class="lbl-vote">21 <i class="icon iSubVote"></i></span>
                                                </span>
                                            </div>
                                            <a class="btn btn-blue btn-view-coupon" href="#">VIEW <span>COUPON</span> CODE</a>
                                        </div>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/04-05.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                        <p class="rs coupon-desc">Must book by 11:59PM CT on 11/17/13. Travel completed by 3/30/14.</p>
                                        <div class="bottom-action">
                                            <div class="left-vote">
                                                <span class="lbl-work">100% work</span>
                                                <span>
                                                    <span class="lbl-vote">63 <i class="icon iAddVote"></i></span>
                                                    <span class="lbl-vote">10 <i class="icon iSubVote"></i></span>
                                                </span>
                                            </div>
                                            <a class="btn btn-blue btn-view-coupon" href="#">VIEW <span>COUPON</span> CODE</a>
                                        </div>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/04-06.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                        <p class="rs coupon-desc">Must book by 11:59PM CT on 11/17/13. Travel completed by 3/30/14.</p>
                                        <div class="bottom-action">
                                            <div class="left-vote">
                                                <span class="lbl-work">100% work</span>
                                                <span>
                                                    <span class="lbl-vote">63 <i class="icon iAddVote"></i></span>
                                                    <span class="lbl-vote">10 <i class="icon iSubVote"></i></span>
                                                </span>
                                            </div>
                                            <a class="btn btn-blue btn-view-coupon" href="#">VIEW <span>COUPON</span> CODE</a>
                                        </div>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                            </div>
                            <div class="pagination">
                                <a class="page-nav" href="#"><i class="icon iPrev"></i></a>
                                <a class="page-num active" href="#">1</a>
                                <a class="page-num" href="#">2</a>
                                <a class="page-num" href="#">3</a>
                                <a class="page-num" href="#">4</a>
                                <a class="page-num" href="#">5</a>
                                <a class="page-nav" href="#"><i class="icon iNext"></i></a>
                            </div>
                        </div><!--end: .mod-coupons-code -->
                    </div>
                    <div class="grid_4 sidebar">
                        <div class="mod-search block">
                            <h3 class="title-block">Find your coupon code</h3>
                            <div class="block-content">
                                <label class="lbl-wrap" for="sys_search_coupon_code">
                                    <input class="keyword-search" id="sys_search_coupon_code" type="search" placeholder="Search"/>
                                    <input type="submit" class="btn-search" value="">
                                </label>
                            </div>
                        </div><!--end: .mod-search -->
                        <div class="mod-list-store block">
                            <h3 class="title-block">Popular store</h3>
                            <div class="block-content">
                                <div class="wrap-list-store clearfix">
                                    <a class="brand-logo" href="#" >
                                        <span class="wrap-logo">
                                            <span class="center-img">
                                                <span class="ver_hold"></span>
                                                <span class="ver_container"><img src="<?php echo base_url();?>images/ex/04-07.jpg" alt="$BRAND_NAME"></span>
                                            </span>
                                        </span>
                                    </a>

                                    <a class="brand-logo" href="#" >
                                        <span class="wrap-logo">
                                            <span class="center-img">
                                                <span class="ver_hold"></span>
                                                <span class="ver_container"><img src="<?php echo base_url();?>images/ex/04-12.jpg" alt="$BRAND_NAME"></span>
                                            </span>
                                        </span>
                                    </a>

                                    <a class="brand-logo" href="#" >
                                        <span class="wrap-logo">
                                            <span class="center-img">
                                                <span class="ver_hold"></span>
                                                <span class="ver_container"><img src="<?php echo base_url();?>images/ex/04-11.jpg" alt="$BRAND_NAME"></span>
                                            </span>
                                        </span>
                                    </a>

                                    <a class="brand-logo" href="#" >
                                        <span class="wrap-logo">
                                            <span class="center-img">
                                                <span class="ver_hold"></span>
                                                <span class="ver_container"><img src="<?php echo base_url();?>images/ex/04-10.jpg" alt="$BRAND_NAME"></span>
                                            </span>
                                        </span>
                                    </a>

                                    <a class="brand-logo" href="#" >
                                        <span class="wrap-logo">
                                            <span class="center-img">
                                                <span class="ver_hold"></span>
                                                <span class="ver_container"><img src="<?php echo base_url();?>images/ex/04-09.jpg" alt="$BRAND_NAME"></span>
                                            </span>
                                        </span>
                                    </a>

                                    <a class="brand-logo" href="#" >
                                        <span class="wrap-logo">
                                            <span class="center-img">
                                                <span class="ver_hold"></span>
                                                <span class="ver_container"><img src="<?php echo base_url();?>images/ex/04-08.jpg" alt="$BRAND_NAME"></span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div><!--end: .mod-list-store -->
                        <div class="mod-simple-coupon block">
                            <h3 class="title-block">Latest coupon</h3>
                            <div class="block-content">
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/04-13.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/04-14.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/04-15.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/04-16.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/04-13.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                            </div>
                        </div><!--end: .mod-simple-coupon -->
                        <div class="mod-ads"><a href="#"><img src="<?php echo base_url();?>images/ex/04-17.jpg" alt="$NAME"/></a></div>
                        <div class="mod-popular-tag block">
                            <h3 class="title-block">Popular Tag</h3>
                            <div class="block-content">
                                <a class="btn btn-gray type-tag" href="#">Sweet</a>
                                <a class="btn btn-gray type-tag" href="#">Lindor</a>
                                <a class="btn btn-gray type-tag" href="#">Food</a>
                                <a class="btn btn-gray type-tag" href="#">Lindt</a>
                                <a class="btn btn-gray type-tag" href="#">Walmart</a>
                                <a class="btn btn-gray type-tag" href="#">Chocolate</a>
                            </div>
                        </div>
                    </div>
                </div>
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
                                            <img src="<?php echo base_url();?>images/ex/04-13.jpg" alt="$TITLE"/>
                                        </a>
                                        <div class="flex-body"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing eli</a></div>
                                    </div>
                                    <div class="entry-item flex">
                                        <a class="thumb-left" href="#">
                                            <img src="<?php echo base_url();?>images/ex/04-15.jpg" alt="$TITLE"/>
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