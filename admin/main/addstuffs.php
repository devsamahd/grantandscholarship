<!DOCTYPE html>
<html lang="en">

<style type="text/css">
    .form-control{
        height: 50px !important;
       
    }
    .boom .white-box{
        height: 500px !important;
    }
</style>
<!-- Mirrored from www.wrappixel.com/demos/admin-templates/ampleadmin/ample-admin-lite/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jun 2020 19:38:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/logo.png">
    <title>Your admin panel</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
       <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="dashboard.php">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b>
                            <!--This is dark logo icon-->
                            <img src="../plugins/images/logo.jpg" alt="home" class="dark-logo" />
                            <!--This is light logo icon-->
                            <img src="../plugins/images/logo.jpg" alt="home" class="light-logo" />
                        </b>
                       
                        
                    </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                   
                    <li>
                        <a class="profile-pic" href="#"> <img src="../plugins/images/logo.jpg" alt="user-img" width="36" height="36" class="img-circle"><b class="hidden-xs">Samahd</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span
                            class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="dashboard.php" class="waves-effect"><i class="fa fa-clock-o fa-fw"
                                aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <!-- <li>
                        <a href="profile.php" class="waves-effect"><i class="fa fa-user fa-fw"
                                aria-hidden="true"></i>Profile</a>
                    </li> -->
                    <li>
                        <a href="basic-table.html" class="waves-effect"><i class="fa fa-table fa-fw"
                                aria-hidden="true"></i>Insert data</a>
                    </li>
                    
                </ul>
                
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">start a grant or scholarship</h4>
                    </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Grant</h3>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-12 boom">
                        <div class="white-box">
                            <h3 class="box-title">Scholarship</h3>
                            <form method="post">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label>
                                            Title
                                        </label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                            Amount
                                        </label>
                                        <input type="text" name="amount" class="form-control">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label>
                                            Title
                                        </label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                            Amount
                                        </label>
                                        <input type="text" name="amount" class="form-control">
                                    </div>
                                </div>

                                <div class="form-row">
                                    
                                        <label>
                                            Requirements
                                        </label>
                                        <textarea rows="5" class="form-control" name="Requirements">
                                            
                                        </textarea>
                                    
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label>
                                            Description
                                        </label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                            Deadline
                                        </label>
                                        <input type="date" name="amount" class="form-control">
                                    </div>

                                </div>
                                <div class="form-row">
                                    
                                        <label>
                                           Attach file
                                        </label>
                                        <input type="file" name="file">
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2020 &copy; EON Admin panel </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/ampleadmin/ample-admin-lite/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jun 2020 19:38:18 GMT -->
</html>