<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>SimpleAdmin - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">

    </head>


    <body>
        <?php
            include 'PHP/islogin.php';
            if(!$log)
            {
                header("location:index.php");
            }
        ?>
        <div id="page-wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.png" alt="logo" class="logo-lg" />
                            <img src="assets/images/logo_sm.png" alt="logo" class="logo-sm hidden" />
                        </a>
                    </div>
                </div>

                <!-- Top navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">

                            <!-- Mobile menu button -->
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile visible-xs visible-sm">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <!-- Top nav left menu -->
                            <ul class="nav navbar-nav hidden-sm hidden-xs top-navbar-items">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>

                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                                <li class="hidden-xs">
                                    <form role="search" class="navbar-left app-search pull-left">
                                         <input type="text" placeholder="Search..." class="form-control">
                                         <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                                        <i class="mdi mdi-bell"></i> <span class="label label-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu p-0 dropdown-menu-lg">
                                        <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                                        <li class="list-group notification-list" style="height: 267px;">
                                           <div class="slimscroll">
                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-cog bg-warning"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New settings</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-bell-o bg-custom"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">Updates</h5>
                                                        <p class="m-0">
                                                            <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-user-plus bg-danger"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New user registered</h5>
                                                        <p class="m-0">
                                                            <small>You have 10 unread messages</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                                <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-cog bg-warning"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New settings</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>
                                           </div>
                                        </li>
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);" class="list-group-item text-right">-->
                                                <!--<small class="font-600">See all notifications</small>-->
                                            <!--</a>-->
                                        <!--</li>-->
                                    </ul>
                                </li>

                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="perfil.php"><i class="ti-user m-r-10"></i> Perfil</a></li>
                                        <li><a href="PHP/logout.php"><i class="ti-power-off m-r-10"></i>Cerrar Sesion</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end container -->
                </div> <!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <aside class="sidebar-navigation">
                    <div class="scrollbar-wrapper">
                        <div>
                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <!-- User Detail box -->
                            <div class="user-details">
                                <div class="pull-left">
                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                                </div>
                                <div class="user-info">
                                    <a href="#">Stanley Jones</a>
                                    <p class="text-muted m-0">Administrator</p>
                                </div>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                             <?php
                                include 'PHP/menu.php';
                             ?>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
                <!--left navigation end-->

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">
                        <div class="m-b-20 table-responsive">

                                    <h5>Responsive Example</h5>
                                    <p class="text-muted font-13 m-b-30">
                                        Responsive is an extension for DataTables that resolves that problem by optimising the
                                        table's layout for different screen sizes through the dynamic insertion and removal of
                                        columns from the table.
                                    </p>

                                    <div id="datatable-responsive_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="datatable-responsive_length"><label>Show <select name="datatable-responsive_length" aria-controls="datatable-responsive" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="datatable-responsive_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-responsive"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed" cellspacing="0" width="100%" role="grid" aria-describedby="datatable-responsive_info" style="width: 100%;">
                                        <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First name: activate to sort column descending" style="width: 75px;">First name</th><th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-label="Last name: activate to sort column ascending" style="width: 73px;">Last name</th><th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 161px; display: none;">Position</th><th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 68px; display: none;">Office</th><th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 27px; display: none;">Age</th><th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 70px; display: none;">Start date</th><th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px; display: none;">Salary</th><th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending" style="width: 35px; display: none;">Extn.</th><th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-label="E-mail: activate to sort column ascending" style="width: 44px; display: none;">E-mail</th></tr>
                                        </thead>
                                        <tbody>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <tr role="row" class="odd">
                                            <td class="sorting_1" tabindex="0">Airi</td>
                                            <td>Satou</td>
                                            <td style="display: none;">Accountant</td>
                                            <td style="display: none;">Tokyo</td>
                                            <td style="display: none;">33</td>
                                            <td style="display: none;">2008/11/28</td>
                                            <td style="display: none;">$162,700</td>
                                            <td style="display: none;">5407</td>
                                            <td style="display: none;">a.satou@datatables.net</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1" tabindex="0">Angelica</td>
                                            <td>Ramos</td>
                                            <td style="display: none;">Chief Executive Officer (CEO)</td>
                                            <td style="display: none;">London</td>
                                            <td style="display: none;">47</td>
                                            <td style="display: none;">2009/10/09</td>
                                            <td style="display: none;">$1,200,000</td>
                                            <td style="display: none;">5797</td>
                                            <td style="display: none;">a.ramos@datatables.net</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1" tabindex="0">Ashton</td>
                                            <td>Cox</td>
                                            <td style="display: none;">Junior Technical Author</td>
                                            <td style="display: none;">San Francisco</td>
                                            <td style="display: none;">66</td>
                                            <td style="display: none;">2009/01/12</td>
                                            <td style="display: none;">$86,000</td>
                                            <td style="display: none;">1562</td>
                                            <td style="display: none;">a.cox@datatables.net</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1" tabindex="0">Bradley</td>
                                            <td>Greer</td>
                                            <td style="display: none;">Software Engineer</td>
                                            <td style="display: none;">London</td>
                                            <td style="display: none;">41</td>
                                            <td style="display: none;">2012/10/13</td>
                                            <td style="display: none;">$132,000</td>
                                            <td style="display: none;">2558</td>
                                            <td style="display: none;">b.greer@datatables.net</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1" tabindex="0">Brenden</td>
                                            <td>Wagner</td>
                                            <td style="display: none;">Software Engineer</td>
                                            <td style="display: none;">San Francisco</td>
                                            <td style="display: none;">28</td>
                                            <td style="display: none;">2011/06/07</td>
                                            <td style="display: none;">$206,850</td>
                                            <td style="display: none;">1314</td>
                                            <td style="display: none;">b.wagner@datatables.net</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1" tabindex="0">Brielle</td>
                                            <td>Williamson</td>
                                            <td style="display: none;">Integration Specialist</td>
                                            <td style="display: none;">New York</td>
                                            <td style="display: none;">61</td>
                                            <td style="display: none;">2012/12/02</td>
                                            <td style="display: none;">$372,000</td>
                                            <td style="display: none;">4804</td>
                                            <td style="display: none;">b.williamson@datatables.net</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1" tabindex="0">Caesar</td>
                                            <td>Vance</td>
                                            <td style="display: none;">Pre-Sales Support</td>
                                            <td style="display: none;">New York</td>
                                            <td style="display: none;">21</td>
                                            <td style="display: none;">2011/12/12</td>
                                            <td style="display: none;">$106,450</td>
                                            <td style="display: none;">8330</td>
                                            <td style="display: none;">c.vance@datatables.net</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1" tabindex="0">Cedric</td>
                                            <td>Kelly</td>
                                            <td style="display: none;">Senior Javascript Developer</td>
                                            <td style="display: none;">Edinburgh</td>
                                            <td style="display: none;">22</td>
                                            <td style="display: none;">2012/03/29</td>
                                            <td style="display: none;">$433,060</td>
                                            <td style="display: none;">6224</td>
                                            <td style="display: none;">c.kelly@datatables.net</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1" tabindex="0">Charde</td>
                                            <td>Marshall</td>
                                            <td style="display: none;">Regional Director</td>
                                            <td style="display: none;">San Francisco</td>
                                            <td style="display: none;">36</td>
                                            <td style="display: none;">2008/10/16</td>
                                            <td style="display: none;">$470,600</td>
                                            <td style="display: none;">6741</td>
                                            <td style="display: none;">c.marshall@datatables.net</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1" tabindex="0">Colleen</td>
                                            <td>Hurst</td>
                                            <td style="display: none;">Javascript Developer</td>
                                            <td style="display: none;">San Francisco</td>
                                            <td style="display: none;">39</td>
                                            <td style="display: none;">2009/09/15</td>
                                            <td style="display: none;">$205,500</td>
                                            <td style="display: none;">2360</td>
                                            <td style="display: none;">c.hurst@datatables.net</td>
                                        </tr></tbody>
                                    </table></div></div><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="datatable-responsive_info" role="status" aria-live="polite">Showing 1 to 10 of 30 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="datatable-responsive_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="datatable-responsive" tabindex="0" id="datatable-responsive_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="datatable-responsive" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="datatable-responsive" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="datatable-responsive" tabindex="0"><a href="#">3</a></li><li class="paginate_button next" aria-controls="datatable-responsive" tabindex="0" id="datatable-responsive_next"><a href="#">Next</a></li></ul></div></div></div></div>
                                </div>
                        <!-- end row -->

                    </div>
                    <!-- end container -->

                    <div class="footer">
                        <div class="pull-right hidden-xs">
                            Project Completed <strong class="text-custom">39%</strong>.
                        </div>
                        <div>
                            <strong>Simple Admin</strong> - Copyright &copy; 2017
                        </div>
                    </div> <!-- end footer -->

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- Datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.colVis.js"></script>
        <script src="assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <!-- init -->
        <script src="assets/pages/jquery.datatables.init.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>    
