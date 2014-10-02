<!DOCTYPE html>
<html>

<head>
    <title>Coupon Detail</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="css/font.css"/>
    <link rel="stylesheet" href="css/font-awesome.css"/>
    <link rel="stylesheet" href="css/normalize.css"/>
    <!--css plugin-->
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link rel="stylesheet" href="css/jquery.nouislider.css"/>
    <link rel="stylesheet" href="css/jquery.popupcommon.css"/>

    <link rel="stylesheet" href="css/style.css"/>


    <!--[if IE 9]>
    <link rel="stylesheet" href="../css/ie9.css"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="../css/ie8.css"/>
    <![endif]-->

    <link rel="stylesheet" href="css/res-menu.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>
    <!--[if lte IE 8]>
    <script type="text/javascript" src="../js/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="../js/html5.js"></script>
    <![endif]-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-53961033-1', 'auto');
        ga('send', 'pageview');
    </script>

</head>
<body class=""><!--<div class="alert_w_p_u"></div>-->

<div class="container-page">
<div class="mp-pusher" id="mp-pusher">
<?php include 'includes/header.php';?>
<?php include 'includes/mobile-nav.php';?>
<div class="top-area">
    <div class="grid_frame">
        <div class="container_grid clearfix">
            <div class="grid_12">
                <h2 class="page-title">Coupons</h2>
            </div>
        </div>
    </div>
</div>
<div class="grid_frame page-content">
<div class="container_grid">
<div class="mod-breadcrumb clearfix">
    <div class="grid_12">
        <a href="#">Home</a>
        <span>></span>
        <a href="#">Coupons</a>
        <span>></span>
        <a href="#">Lindt - Save 10% off</a>
    </div>
</div>
<!--end: .mod-breadcrumb -->
<div class="mod-coupon-detail clearfix">
    <div class="grid_4">
        <div class="wrap-thumb">
            <div class="img-thumb-center">
                <div class="wrap-img-thumb">
                    <span class="ver_hold"></span>
                    <a href="#" class="ver_container"><img src="images/coupons/dosa-small.jpg" alt="$COUPON_TITLE"></a>
                </div>
            </div>
            <i class="stick-lbl hot-deal"></i>
        </div>
    </div>
    <div class="grid_5">
        <div class="save-price">Dosa meal for 2</div>
        <a href="#" class="brand-name">Empire</a>

        <div class="coupon-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vestibulum interdum
            ipsum, eu gravida massa <a href="#">cursus id</a>. Pellentesque feugiat ante eu scelerisque porta. In quis
            velit ligula. Cum sociis natoque <a href="#">penatibus et</a> magnis dis parturient montes, nascetur
            ridiculus mus. Donec ac dignissim nulla.
        </div>
        <div class="wrap-btn clearfix">
            <div class="day-left">9 days 4 hours left</div>
            <a class="btn btn-blue btn-take-coupon" href="#">Grab it!</a>
        </div>
        <div class="wrap-action clearfix">
            <div class="left-vote">
                <span class="lbl-work">100% work</span>
                <span class="lbl-vote">12 <i class="icon iAddVote"></i></span>
                <span class="lbl-vote">2 <i class="icon iSubVote"></i></span>
            </div>
            <div class="right-social">
                Share now
                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-pinterest-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
            </div>
        </div>
        <div class="wrap-tag">
            <span class="btn btn-gray type-tag tag-lbl">Tag</span>
            <a class="btn btn-gray type-tag" href="#">South Indian</a>
            <a class="btn btn-gray type-tag" href="#">Dosa</a>
            <a class="btn btn-gray type-tag" href="#">Chicken</a>
            <a class="btn btn-gray type-tag" href="#">Food</a>
            <a class="btn btn-gray type-tag" href="#">Empire</a>
            <a class="btn btn-gray type-tag" href="#">Restarunt</a>
        </div>
    </div>
    <div class="grid_3">
        <div class="brand-info ta-c">
            <div class="brand-logo"><img src="images/brands/empire.jpg" alt="$NAME"/></div>
            <span class="star-rate"><span style="width: 91%"></span></span>

            <div class="rated-number">2896 Followers</div>
            <div class="brand-desc ta-l">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vestibulum
                interdum ipsum, eu gravida massa cursus id. Pellentesque feugiat ante eu scelerisque porta. In quis
                velit ligula.
            </div>
            <a class="link-brand" href="#">View Brand</a>
        </div>
    </div>
</div>
<!--end: .mod-coupon-detail -->
<div class="mod-grp-coupon block clearfix">
    <div class="grid_12">
        <h3 class="title-block">
            Coupon Details
        </h3>
    </div>
    <div class="block-content list-coupon clearfix">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id ligula vel mauris imperdiet ultrices. Donec
            commodo posuere nulla, eget faucibus justo rhoncus et. Nunc massa justo, gravida at metus ac, suscipit
            laoreet tortor. Nam vel tincidunt lorem. Nullam finibus placerat sapien ac luctus. Aenean iaculis et libero
            et condimentum. Ut porta sapien at libero gravida, ut facilisis lectus dapibus. Vivamus blandit dui nibh,
            non aliquam ex tempor et. Aliquam et blandit sapien. Morbi pellentesque metus ut urna faucibus, nec suscipit
            justo porttitor. Vivamus placerat, magna in elementum cursus, risus nibh egestas quam, vitae viverra dui
            ligula et dolor. Praesent vitae aliquam odio. In hac habitasse platea dictumst.</p>

        <p> Proin cursus odio vel turpis porttitor, nec lacinia lorem consequat. Proin sit amet felis enim. Nulla
            pulvinar nibh lorem, vitae rutrum tortor venenatis eu. Morbi dignissim pretium turpis in cursus. Proin
            auctor massa mauris, a suscipit ex vestibulum vel. Quisque varius molestie facilisis. Cras pulvinar vehicula
            egestas. Maecenas quis leo ut nibh placerat hendrerit. Morbi vel purus sit amet massa rutrum dictum vitae at
            ligula.</p>

        <p> Phasellus viverra sed nisl eu aliquet. Vivamus auctor molestie ante, fermentum porta odio scelerisque vel.
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc in elit
            accumsan, sagittis nibh a, ornare turpis. Phasellus ornare rhoncus ipsum eu tristique. Nam commodo velit ac
            justo egestas finibus. Duis quis lacus vulputate, mollis augue ac, viverra neque. Maecenas rutrum felis vel
            tincidunt varius.</p>

        <p>
            Integer sem ante, condimentum sit amet dictum sed, pellentesque vitae ipsum. Donec bibendum nec tortor
            dictum scelerisque. Mauris eleifend finibus lacinia. Curabitur quis risus quis neque feugiat viverra eu sit
            amet erat. Duis lacinia consectetur lorem at sagittis. Sed faucibus euismod lectus aliquam laoreet. Quisque
            interdum urna ac dolor pulvinar sodales.</p>

        <p>Donec et elementum sem. Mauris tincidunt volutpat sapien fringilla ullamcorper. Nulla posuere tellus a lorem
            suscipit, et luctus nulla auctor. Aenean condimentum vulputate viverra. Ut dolor nulla, iaculis a est vitae,
            sollicitudin hendrerit nisl. Sed quam ante, aliquam vitae sollicitudin ac, dapibus quis quam. Vestibulum sit
            amet vehicula libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus tristique orci. Sed
            blandit ut quam ac lobortis. Phasellus eu pharetra arcu, sit amet tristique arcu. Vestibulum vitae sodales
            lacus. Integer facilisis lobortis malesuada. Nam ac ex diam. In non felis enim. Nullam placerat sagittis
            tortor.</p>
    </div>
</div>
<div class="mod-grp-coupon block clearfix">
    <div class="grid_12">
        <h3 class="title-block">
            Coupon Terms & conditions
        </h3>
    </div>
    <div class="block-content list-coupon clearfix">
        <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
            <li>Nunc id ligula vel mauris imperdiet ultrices. Donec commodo posuere nulla, eget faucibus justo rhoncus
                et. Nunc massa justo, gravida at metus ac, suscipit
                laoreet tortor. Nam vel tincidunt lorem. Nullam finibus placerat sapien ac luctus. Aenean iaculis et
                libero
            </li>
            <li>et condimentum. Ut porta sapien at libero gravida, ut facilisis lectus dapibus. Vivamus blandit dui
                nibh,
                non aliquam ex tempor et.
            </li>
            <li>Aliquam et blandit sapien. Morbi pellentesque metus ut urna faucibus, nec suscipit</li>
            <li>justo porttitor. Vivamus placerat, magna in elementum cursus, risus nibh egestas quam, vitae viverra dui
                ligula et dolor. Praesent vitae aliquam odio. In hac habitasse platea dictumst.
            </li>
        </ul>
    </div>
</div>
<div class="mod-grp-coupon block clearfix">
    <div class="grid_12">
        <h3 class="title-block">
            Related coupons
        </h3>
    </div>
    <div class="block-content list-coupon clearfix">
        <div class="coupon-item grid_3">
            <div class="coupon-content">
                <div class="img-thumb-center">
                    <div class="wrap-img-thumb">
                        <span class="ver_hold"></span>
                        <a href="#" class="ver_container"><img src="images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
                    </div>
                </div>
                <div class="coupon-price">$2.00 Off</div>
                <div class="coupon-brand">Wallmart</div>
                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect</div>
                <div class="time-left">9 days 4 hours left</div>
                <a class="btn btn-blue btn-take-coupon" href="#">Grab it!</a>
            </div>
            <i class="stick-lbl hot-deal"></i>
        </div>
        <!--end: .coupon-item -->
        <div class="coupon-item grid_3">
            <div class="coupon-content">
                <div class="img-thumb-center">
                    <div class="wrap-img-thumb">
                        <span class="ver_hold"></span>
                        <a href="#" class="ver_container"><img src="images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
                    </div>
                </div>
                <div class="coupon-price">Save $1.50 on two</div>
                <div class="coupon-brand">Lindt Chocolate</div>
                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect</div>
                <div class="time-left">9 days 4 hours left</div>
                <a class="btn btn-blue btn-take-coupon" href="#">Grab it!</a>
            </div>
            <i class="stick-lbl hot-deal"></i>
        </div>
        <!--end: .coupon-item -->
        <div class="coupon-item grid_3">
            <div class="coupon-content">
                <div class="img-thumb-center">
                    <div class="wrap-img-thumb">
                        <span class="ver_hold"></span>
                        <a href="#" class="ver_container"><img src="images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
                    </div>
                </div>
                <div class="coupon-price">$5.00 Off</div>
                <div class="coupon-brand">Lindt Chocolate</div>
                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect</div>
                <div class="time-left">2 days 14 hours left</div>
                <a class="btn btn-blue btn-take-coupon untake" href="#">Un Grab it!</a>
            </div>
            <i class="stick-lbl hot-deal"></i>
        </div>
        <!--end: .coupon-item -->
        <div class="coupon-item grid_3">
            <div class="coupon-content">
                <div class="img-thumb-center">
                    <div class="wrap-img-thumb">
                        <span class="ver_hold"></span>
                        <a href="#" class="ver_container"><img src="images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
                    </div>
                </div>
                <div class="coupon-price">$7.00 Off</div>
                <div class="coupon-brand">Wallmart</div>
                <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                <div class="time-left">12 days 1 hour left</div>
                <a class="btn btn-blue btn-take-coupon" href="#">Grab it!</a>
            </div>
            <i class="stick-lbl hot-deal"></i>
        </div>
        <!--end: .coupon-item -->
    </div>
</div>
<!--end block: Related coupons-->
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
</div>
<!--end: .mod-email-newsletter-->
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
                        <a href="#" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                    </div>
                </div>
            </div>
        </div>
        <!--end: .brand-item -->
        <div class="brand-item grid_4">
            <div class="brand-content">
                <div class="brand-logo">
                    <div class="wrap-img-logo">
                        <span class="ver_hold"></span>
                        <a href="#" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                    </div>
                </div>
            </div>
        </div>
        <!--end: .brand-item -->
        <div class="brand-item grid_4">
            <div class="brand-content">
                <div class="brand-logo">
                    <div class="wrap-img-logo">
                        <span class="ver_hold"></span>
                        <a href="#" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                    </div>
                </div>
            </div>
        </div>
        <!--end: .brand-item -->
        <div class="brand-item grid_4">
            <div class="brand-content">
                <div class="brand-logo">
                    <div class="wrap-img-logo">
                        <span class="ver_hold"></span>
                        <a href="#" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                    </div>
                </div>
            </div>
        </div>
        <!--end: .brand-item -->
        <div class="brand-item grid_4">
            <div class="brand-content">
                <div class="brand-logo">
                    <div class="wrap-img-logo">
                        <span class="ver_hold"></span>
                        <a href="#" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                    </div>
                </div>
            </div>
        </div>
        <!--end: .brand-item -->
        <div class="brand-item grid_4">
            <div class="brand-content">
                <div class="brand-logo">
                    <div class="wrap-img-logo">
                        <span class="ver_hold"></span>
                        <a href="#" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                    </div>
                </div>
            </div>
        </div>
        <!--end: .brand-item -->
    </div>
</div>
<!--end: .mod-brand -->
</div>
</div>
<footer class="mod-footer">
    <div class="footer-top">
        <div class="grid_frame">
            <div class="container_grid clearfix">
                <div class="grid_3">
                    <div class="company-info">
                        <img src="images/logo-gray.png" alt="bittye"/>

                        <p class="rs">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                            veniam, quis nostrud</p>

                        <p class="rs">
                            1200 Balh Blah Avenue <br/>
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
                </div>
                <!--end: Follow us -->
                <div class="grid_3">
                    <div class="block intro-video">
                        <h3 class="title-block">Intro Video</h3>

                        <div class="block-content">
                            <div class="block-content">
                                <div class="wrap-video" id="sys_wrap_video">
                                    <div class="lightbox-video">
                                        <a class="html5lightbox" href="http://player.vimeo.com/video/36932496" title=""><i
                                                class="btn-play"></i><img src="images/video-img.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end: Intro Video -->
                <div class="grid_3">
                    <div class="block blog-recent">
                        <h3 class="title-block">Latest blog</h3>

                        <div class="block-content">
                            <div class="entry-item flex">
                                <a class="thumb-left" href="#">
                                    <img src="images/ex/04-14.jpg" alt="$TITLE"/>
                                </a>

                                <div class="flex-body"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                    eli</a></div>
                            </div>
                            <div class="entry-item flex">
                                <a class="thumb-left" href="#">
                                    <img src="images/ex/04-14.jpg" alt="$TITLE"/>
                                </a>

                                <div class="flex-body"><a href="#">Ut wisi enim ad minim veniam, quis nostrud</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end: blog-recent -->
            </div>
        </div>
    </div>
    <!--end: .foot-top-->
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
                    Copyright © 2014 by BITTYE. Designed by MegaDrupal
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>

<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.nouislider.js"></script>
<script type="text/javascript" src="js/jquery.popupcommon.js"></script>
<script type="text/javascript" src="js/html5lightbox.js"></script>

<!--//js for responsive menu-->
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/mlpushmenu.js"></script>

<script type="text/javascript" src="js/script.js"></script>

<!--[if lte IE 9]>
<script type="text/javascript" src="../js/jquery.placeholder.js"></script>
<script type="text/javascript" src="../js/create.placeholder.js"></script>
<![endif]-->

<!--[if lte IE 8]>
<script type="text/javascript" src="../js/ie8.js"></script>
<![endif]-->
</body>

</html>