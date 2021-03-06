<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>QCC - Contibution System</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>QCC System</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Username</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />


            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Options</h3>
                <ul class="nav side-menu">
                  <li><a href="udashboard.php"><i class="fa fa-home"></i> Home</a> </li>
                  <li><a href="requests.php"><i class="fa fa-question-circle"></i> Requests </a> </li>
                  <li><a href="withdrawals.php"><i class="fa fa-edit"></i> Withdrawals </a> </li>
                  <li><a href="messages.php"><i class="fa fa-reply"></i> Messages </a> </li>
                  <li><a href="uprofile.php"><i class="fa fa-user"></i> Profile </a> </li>

                  <li><a href="#"><i class="fa fa-power-off"></i> Logout </a> </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
                  <div class="sidebar-footer hidden-small">
              <!--  -->
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
 <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Welcome Username
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="#"> Profile</a></li>
                    <li><a href="#"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <!--  -->
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>

               <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Request Details Table <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a href="make-request.php" class="btn btn-primary btn-lg"><i class="fa fa-plus"></i> Make A Request</a>
                      </li>
                    
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      <!-- Employee Details Table. -->
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Status</th>
                          <th>Reply</th>
                          <th>Status</th>
                          <th>Requested On</th>
                          <th>Approved On</th>
                          <th>Approved By</th>
                          <th>Amount</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>IT Department </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>2009/09/15</td>
                          <td>2009/09/15</td>
                          <td> Mr. X</td>
                          <td>GHC 205,500</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>IT Department </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>2009/09/15</td>
                          <td>2009/09/15</td>
                          <td> Mr. X</td>
                          <td>GHC 205,500</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>IT Department </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>2009/09/15</td>
                          <td>2009/09/15</td>
                          <td> Mr. X</td>
                          <td>GHC 205,500</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>IT Department </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>2009/09/15</td>
                          <td>2009/09/15</td>
                          <td> Mr. X</td>
                          <td>GHC 205,500</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>IT Department </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>2009/09/15</td>
                          <td>2009/09/15</td>
                          <td> Mr. X</td>
                          <td>GHC 205,500</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>IT Department </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>2009/09/15</td>
                          <td>2009/09/15</td>
                          <td> Mr. X</td>
                          <td>GHC 205,500</td>
                        </tr>
                      
                        <tr>
                          <td>1</td>
                          <td>IT Department </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>2009/09/15</td>
                          <td>2009/09/15</td>
                          <td> Mr. X</td>
                          <td>GHC 205,500</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>IT Department </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>2009/09/15</td>
                          <td>2009/09/15</td>
                          <td> Mr. X</td>
                          <td>GHC 205,500</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>IT Department </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>2009/09/15</td>
                          <td>2009/09/15</td>
                          <td> Mr. X</td>
                          <td>GHC 205,500</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>IT Department </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>2009/09/15</td>
                          <td>2009/09/15</td>
                          <td> Mr. X</td>
                          <td>GHC 205,500</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>IT Department </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>2009/09/15</td>
                          <td>2009/09/15</td>
                          <td> Mr. X</td>
                          <td>GHC 205,500</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>IT Department </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>2009/09/15</td>
                          <td>2009/09/15</td>
                          <td> Mr. X</td>
                          <td>GHC 205,500</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>IT Department </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>2009/09/15</td>
                          <td>2009/09/15</td>
                          <td> Mr. X</td>
                          <td>GHC 205,500</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>IT Department </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>2009/09/15</td>
                          <td>2009/09/15</td>
                          <td> Mr. X</td>
                          <td>GHC 205,500</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>IT Department </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>2009/09/15</td>
                          <td>2009/09/15</td>
                          <td> Mr. X</td>
                          <td>GHC 205,500</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>IT Department </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>2009/09/15</td>
                          <td>2009/09/15</td>
                          <td> Mr. X</td>
                          <td>GHC 205,500</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>IT Department </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>2009/09/15</td>
                          <td>2009/09/15</td>
                          <td> Mr. X</td>
                          <td>GHC 205,500</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>IT Department </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>2009/09/15</td>
                          <td>2009/09/15</td>
                          <td> Mr. X</td>
                          <td>GHC 205,500</td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            QCC - Contribution System <a href="#"></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

  </body>
</html>