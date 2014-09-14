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
        <h1 class="page-header">All categories</h1>
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
    <th>Category name</th>
    <th>Shops list</th>
    <th>Edit</th>
</tr>
</thead>
<tbody>
<tr class="odd gradeX">
    <td>Restarunt</td>
    <td>
        <button class="btn btn-link" type="button" data-toggle="modal"
                data-target="#grabbed-users-list-deal1">82 shops
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
    <td>
        <button class="btn btn-info btn-circle" type="button" data-toggle="modal"
                data-target="#editShopDetails"><i class="fa fa-pencil"></i>
        </button>
        <div class="modal fade" id="editShopDetails" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Shop Title</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-lg-12">
                                <form role="form">
                                    <div class="form-group">
                                        <label>Shop name</label>
                                        <input class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Shop Category</label>
                                        <select class="form-control" multiple="">
                                            <option>Restarunt</option>
                                            <option>Salon</option>
                                            <option>Cafe</option>
                                            <option>Cinema</option>
                                            <option>Sports / games</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Shop description</label>
                                        <textarea rows="3" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Address
                                            <button class="btn btn-link" type="button">[+] Add
                                                another address
                                            </button>
                                        </label>
                                        <input class="form-control" placeholder="Line 1">
                                        <input class="form-control" placeholder="Line 2">
                                        <input class="form-control" placeholder="Landmark">
                                        <input class="form-control" placeholder="Pincode">
                                        <input class="form-control" placeholder="City">
                                        <label>Address
                                            <button class="btn btn-link" type="button">[+] Add
                                                another telephone
                                            </button>
                                        </label>
                                        <input class="form-control" placeholder="Telephone">
                                    </div>
                                    <button type="submit" class="btn btn-default btn-success">
                                        Add
                                    </button>
                                    <button type="reset" class="btn btn-default btn-danger">
                                        Reset
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <button class="btn btn-danger btn-circle" type="button"><i class="fa fa-trash-o"></i>
        </button>
    </td>
</tr>
<tr class="even gradeC">
    <td>Restarunt</td>
    <td>
        <button class="btn btn-link" type="button" data-toggle="modal"
                data-target="#grabbed-users-list-deal1">82 shops
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
    <td>
        <button class="btn btn-info btn-circle" type="button"><i class="fa fa-pencil"></i>
        </button>
        <div class="modal fade" id="editShopDetails" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Shop Title</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-lg-12">
                                <form role="form">
                                    <div class="form-group">
                                        <label>Shop name</label>
                                        <input class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Shop Category</label>
                                        <select class="form-control" multiple="">
                                            <option>Restarunt</option>
                                            <option>Salon</option>
                                            <option>Cafe</option>
                                            <option>Cinema</option>
                                            <option>Sports / games</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Shop description</label>
                                        <textarea rows="3" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Address
                                            <button class="btn btn-link" type="button">[+] Add
                                                another address
                                            </button>
                                        </label>
                                        <input class="form-control" placeholder="Line 1">
                                        <input class="form-control" placeholder="Line 2">
                                        <input class="form-control" placeholder="Landmark">
                                        <input class="form-control" placeholder="Pincode">
                                        <input class="form-control" placeholder="City">
                                        <label>Address
                                            <button class="btn btn-link" type="button">[+] Add
                                                another telephone
                                            </button>
                                        </label>
                                        <input class="form-control" placeholder="Telephone">
                                    </div>
                                    <button type="submit" class="btn btn-default btn-success">
                                        Add
                                    </button>
                                    <button type="reset" class="btn btn-default btn-danger">
                                        Reset
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <button class="btn btn-danger btn-circle" type="button"><i class="fa fa-trash-o"></i>
        </button>
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
