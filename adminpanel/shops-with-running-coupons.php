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

    <!-- DataTables CSS -->
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

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
        <h1 class="page-header">Coupons running in shops</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr>
                    <th>Shop name</th>
                    <th>Category</th>
                    <th>Coupon title</th>
                    <th>Expiry date</th>
                    <th>Grabbed users</th>
                </tr>
                </thead>
                <tbody>
                <tr class="odd gradeX">
                    <td><a href="all-shops.php/#empire">empire</a></td>
                    <td><a href="#">Restarunt</a>, <a href="#">Hotel</a></td>
                    <td><a href="#">Link to respective deal details page in admin panel</a></td>
                    <td>10 Nov 2014</td>
                    <td>
                        <button class="btn btn-link" type="button" data-toggle="modal"
                                data-target="#grabbed-users-list-deal1">56 users
                        </button>
                        <div class="modal fade" id="grabbed-users-list-deal1" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Shop Title</h4>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-striped table-bordered table-hover"
                                               id="dataTables-example">
                                            <thead>
                                            <tr>
                                                <th>User name (link to his user details on admin panel)</th>
                                                <th>Users list</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    </td>
                </tr>
                <tr class="odd gradeX">
                    <td><a href="all-shops.php/#empire">empire</a></td>
                    <td><a href="#">Restarunt</a>, <a href="#">Hotel</a></td>
                    <td><a href="#">Link to respective deal details page in admin panel</a></td>
                    <td>10 Nov 2014</td>
                    <td>
                        <button class="btn btn-link" type="button" data-toggle="modal"
                                data-target="#grabbed-users-list-deal1">82 users
                        </button>
                        <div class="modal fade" id="grabbed-users-list-deal1" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Shop Title</h4>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-striped table-bordered table-hover"
                                               id="dataTables-example">
                                            <thead>
                                            <tr>
                                                <th>User name (link to his user details on admin panel)</th>
                                                <th>Users list</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><a href="all-users.php/#pavan">Pavan</a></td>
                                                <td>10 Nov 2014</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
    <!-- /.col-lg-12 -->
</div>
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

<!-- DataTables JavaScript -->
<script src="js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>

</body>

</html>
