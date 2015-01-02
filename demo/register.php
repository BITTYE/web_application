<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
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
<body class="">

<div class="container-page">
    <div class="mp-pusher" id="mp-pusher">
        <?php include 'includes/header.php' ?>
        <?php include 'includes/mobile-nav.php' ?>
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-register">
                    <h3 class="rs title-mod">Hello pretty! Welcome to Bittye.com</h3>
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
                        <a href="login.php" class="link-back">
                            <i class="pick-r"></i>
                            Back to login
                        </a>
                    </p>
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