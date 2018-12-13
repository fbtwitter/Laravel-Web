<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Indonesia Creative - Member List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="member-list.php"> <i class="menu-icon fa fa-users"></i>Member List </a>
                    </li>
                    <li>
                        <a href="master-list.php"> <i class="menu-icon fa fa-user"></i>Master List </a>
                    </li>
                    <li>
                        <a href="course.php"> <i class="menu-icon fa fa-tasks"></i>Courses </a>
                    </li>
                    <li>
                        <a href="event.php"> <i class="menu-icon fa fa-calendar-o"></i>Events </a>
                    </li>
                    <li>
                        <a href="announce.php"> <i class="menu-icon fa fa-bullhorn"></i>Announcements </a>
                    </li>
                    <li>
                        <a href="library.php"> <i class="menu-icon fa fa-book"></i>Library </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                      <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/lucas.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="index.php">Dashboard</a></li>
                                    <li><a href="member-list.php">Member List</a></li>
                                    <li class="active">Update Member</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                              <div class="float-left">
                                  <strong class="card-title">Update Member</strong>
                              </div>
                            </div>
                            <div class="card-body">
                              <form action="member-list.php" class="form-horizontal" method="post">
                        				  <div class="form-group">
                            					<label class="col-md-2 control-label">First Name</label>
                            					<div class="col-md-10">
                            					  <input name="fname" type="text" id="fname" class="form-control" value="">
                            					</div>
                        				  </div>
                        				  <div class="form-group">
                                    <label class="col-md-2 control-label">Last Name</label>
                                    <div class="col-md-10">
                                      <input name="lname" type="text" id="lname"  class="form-control" value="">
                                    </div>
                        				  </div>
                        				  <div class="form-group">
                                    <label class="col-md-2 control-label">Gender</label>
                                    <div class="col-md-10">
                                      <input name="gender" type="text" id="gender"  class="form-control" value="">
                                    </div>
                        				  </div>
                        				  <div class="form-group">
                                    <label class="col-md-2 control-label">Email</label>
                                    <div class="col-md-10">
                                      <input name="temail" type="text" id="temail"  class="form-control" value="">
                                    </div>
                        				  </div>
                        				  <div class="form-group">
                                    <label class="col-md-2 control-label">Phone</label>
                                    <div class="col-md-10">
                                      <input name="tphone" type="text" id="tphone" class="form-control" value="">
                                    </div>
                        				  </div>
                                  <div class="form-group">
                                    <label class="col-md-2 control-label">Domicile</label>
                                    <div class="col-md-10">
                                      <input name="tdomisili" type="text" id="tdomisili"  class="form-control" value="">
                                    </div>
                        				  </div>
                        				  <div class="form-group float-right">
                          					  <input type="submit" class="btn btn-outline-info" value="Save Change" name="btnUpdate" id="btnUpdate">
                          					  <span></span>
                          					  <a href="member-list.php"><button type="button" class="btn btn-outline-danger">Cancel</button></a>
                        				  </div>
                        			</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">

                </div>
            </div>
        </footer>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>