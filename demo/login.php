<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
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
    
</head>
<body class=""><!--<div class="alert_w_p_u"></div>-->

<div class="container-page login">
    <div class="mp-pusher" id="mp-pusher">
        <?php include 'includes/header.php';?>
        <?php include 'includes/mobile-nav.php';?>
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-register">
                    <h3 class="rs title-mod">Hello pretty! Welcome to Bittye.com</h3>
                    <div class="wrap-form-reg clearfix">
                        <form action="#">
                            <?php include 'login-form.php';?>
                            <div class="right-create-acc">
                                <img class="account" src="images/null.gif" alt="Bittye.com"/>
                                <p class="lbl-dung-lo rs">Not a member? Don’t worry</p>
                                <a href="register.php" class="btn-flat yellow btn-submit-reg">Create an account</a>
                                <div id="sys_warning_sms" class="warning-sms" data-warning-txt="No spam guarantee,No disturb,Promotion News"></div>
                            </div>
                        </form>
                        <i class="line-sep"></i>
                    </div>
                </div><!--end: .mod-register -->
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
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