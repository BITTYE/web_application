<!DOCTYPE html>
<html>

<head>
    <title>Coupon Detail</title>
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
    <script type="text/javascript" src="../js/html5.js"></script>
        <![endif]--><script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-53961033-1', 'auto');
        ga('send', 'pageview');
        
        function like(buyerid,couponid)
        {
          if(buyerid=='')
              {
                  alert('please login to like');
              }
        $.ajax({
           url:'<?php echo base_url();?>home/addlike',
           type:'post',
           async:false,
           data:{buyerid:buyerid,
                 couponid:couponid},
           success:function(data){
               document.getElementById("likevalue"+couponid).innerHTML = data;
           },
        });
        }
        function unlike(buyerid,couponid)
        {
            if(buyerid=='')
              {
                  alert('please login to unlike');
              }
           $.ajax({
            url:'<?php echo base_url();?>home/unlike',
            type:'post',
            async:false,
            data:{
              buyerid:buyerid,
              couponid:couponid
            },
            success:function(data){
       
                document.getElementById("unlikevalue"+couponid).innerHTML = data;
               document.getElementById("likevalue"+couponid).innerHTML = data;
            },
             });
        }
    </script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  <script>
     document.getElementById('dataurlid').setAttribute('data-url',window.location);
     
      document.getElementById('fbshareid').setAttribute('data-href',window.location);
      
      (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=749598121719779&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
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
                        <a href="<?php echo base_url();?>home">Home</a>
                        <span>></span>
                        <a href="<?php echo base_url();?>home/coupons">Coupons</a>
                        <span>></span>
                        <a href="#">Lindt - Save 10% off</a>
                    </div>
                </div><!--end: .mod-breadcrumb -->
                <div class="mod-coupon-detail clearfix">
                       <?php  foreach ($coupons as $data) {
           $id=$this->session->userdata('userlevel');
           $couponid=$data->id;
         $val   =  json_decode($data->coupon_images);
            $couponpicname =  array_pop($val);
            $couponurl= base_url()."couponimages/$couponpicname";
             $startdate=$data->startdate;
            $enddate=$data->enddate;
            $date1 = new DateTime("$startdate");
           $date2 = new DateTime("$enddate");
           $interval = $date1->diff($date2); 
           $likecount=$data->count;?>
                    <div class="grid_4">
                        <div class="wrap-thumb">
                            <div class="img-thumb-center">
                                <div class="wrap-img-thumb">
                                    <span class="ver_hold"></span>
                                    <a href="#" class="ver_container"><img src="<?php echo $couponurl;?>" alt="$COUPON_TITLE"></a>
                                </div>
                            </div>
                            <i class="stick-lbl hot-deal"></i>
                        </div>
                    </div>
        
                    <div class="grid_5">
                        <div class="save-price">Save 10% Off</div>
                        <a href="#" class="brand-name"><?php echo $data->coupon_title;?></a>
                        <div class="coupon-desc"><?php echo $data->coupon_description;?></div>
                        <div class="wrap-btn clearfix">
                            <div class="day-left"><?php echo $interval->days;?> days left</div>
                            <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                        </div>
                        <div class="wrap-action clearfix">
                            <div class="left-vote">
                                <span class="lbl-work">100% work</span>
                                <span class="lbl-vote"><span id="likevalue<?php echo $couponid;?>"><?php echo $likecount;?></span><i class="icon iAddVote" onclick="like('<?php echo $id;?>','<?php echo $couponid;?>');"></i></span>
                                <span class="lbl-vote"><span id="unlikevalue<?php echo $couponid;?>"><?php echo $likecount;?></span> <i class="icon iSubVote" onclick="unlike('<?php echo $id;?>','<?php echo $couponid;?>');"></i></span>
                            </div>
                            <div class="right-social">
                                Share now
                                <div id="fbshareid" class="fb-share-button" data-href="" data-type="button" ></div>
                                <!--<a><i class="fa fa-facebook-square fa-2x"></i></a>-->
                                <a href="https://twitter.com/share"  id="dataurlid" data-url="" data-via="" data-lang="en"><i class="fa fa-twitter-square fa-2x"></i></a>
                                <a href="#"><i class="fa fa-pinterest-square fa-2x"></i></a>
                                <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                            </div>
                        </div>
                        <div class="wrap-tag">
                            <span class="btn btn-gray type-tag tag-lbl">Tag</span>
                            <a class="btn btn-gray type-tag" href="#">Sweet</a>
                            <a class="btn btn-gray type-tag" href="#">Lindor</a>
                            <a class="btn btn-gray type-tag" href="#">Food</a>
                            <a class="btn btn-gray type-tag" href="#">Lindt</a>
                            <a class="btn btn-gray type-tag" href="#">Walmart</a>
                            <a class="btn btn-gray type-tag" href="#">Chocolate</a>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="grid_3">
                        <div class="brand-info ta-c">
                            <div class="brand-logo"><img src="<?php echo base_url();?>images/ex/03-03.jpg" alt="$NAME"/></div>
                            <span class="star-rate"><span style="width: 91%"></span></span>
                            <div class="rated-number">289.876 Followers</div>
                            <div class="brand-desc ta-l">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vestibulum interdum ipsum, eu gravida massa cursus id. Pellentesque feugiat ante eu scelerisque porta. In quis velit ligula. </div>
                            <a class="link-brand" href="#">View Brand</a>
                        </div>
                    </div>
                </div><!--end: .mod-coupon-detail -->
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
                                        <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$2.00 Off</div>
                                <div class="coupon-brand">Wallmart</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                            <i class="stick-lbl hot-deal"></i>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">Save $1.50 on two</div>
                                <div class="coupon-brand">Lindt Chocolate</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                            <i class="stick-lbl hot-deal"></i>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$5.00 Off</div>
                                <div class="coupon-brand">Lindt Chocolate</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">2 days 14 hours left</div>
                                <a class="btn btn-blue btn-take-coupon untake" href="#">Un Take Coupon</a>
                            </div>
                            <i class="stick-lbl hot-deal"></i>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$7.00 Off</div>
                                <div class="coupon-brand">Wallmart</div>
                                <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                                <div class="time-left">12 days 1 hour left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                            <i class="stick-lbl hot-deal"></i>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
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
                                        <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
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
                                        <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
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
                                        <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
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
                                        <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
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
                                        <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
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
                                        <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
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
                                        <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
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
                 </div><!--end block: Related coupons-->
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
                                        <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url();?>images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
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
                                <img src="<?php echo base_url();?>images/logo-gray.png" alt="bittye"/>
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
                                            <img src="<?php echo base_url();?>images/ex/04-14.jpg" alt="$TITLE"/>
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
                            Copyright © 2014 by BITTYE. Designed by MegaDrupal
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