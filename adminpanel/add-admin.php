<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bittye - admin panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php include "include/header.php"?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">New Administrator registration</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form">
                                <div class="form-group">
                                    <label>Full name</label>
                                    <input class="form-control">

                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                </div>
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input class="form-control">

                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                </div>
                                <!--<table class="table table-striped table-bordered table-hover add-admin"
                                       id="dataTables-example">
                                    <tr>
                                        <td>All Users</td>
                                        <td>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1"
                                                       value="option1"
                                                       checked>No
                                                Access
                                            </label></td>
                                        <td>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1"
                                                       value="option1"
                                                       checked>Read
                                            </label></td>
                                        <td>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1"
                                                       value="option1"
                                                       checked>Write
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>All Shops</td>
                                        <td>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1"
                                                       value="option1"
                                                       checked>No
                                                Access
                                            </label></td>
                                        <td>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1"
                                                       value="option1"
                                                       checked>Read
                                            </label></td>
                                        <td>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1"
                                                       value="option1"
                                                       checked>Write
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>All Coupons</td>
                                        <td>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1"
                                                       value="option1"
                                                       checked>No
                                                Access
                                            </label></td>
                                        <td>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1"
                                                       value="option1"
                                                       checked>Read
                                            </label></td>
                                        <td>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1"
                                                       value="option1"
                                                       checked>Write
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>All Administrators</td>
                                        <td>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1"
                                                       value="option1"
                                                       checked>No
                                                Access
                                            </label></td>
                                        <td>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1"
                                                       value="option1"
                                                       checked>Read
                                            </label></td>
                                        <td>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1"
                                                       value="option1"
                                                       checked>Write
                                            </label>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>-->
                                <button type="submit" class="btn btn-default btn-success">Add</button>
                                <button type="reset" class="btn btn-default btn-danger">Reset</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/plugins/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/sb-admin-2.js"></script>

</body>

</html>
