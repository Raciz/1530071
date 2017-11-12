<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Registro De Ventas - SuKarne</title>
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
                        <a href="dashboard.php" class="logo">
                            <img src="assets/images/SUKARNE.png" alt="logo" class="logo-lg" />
                            <img src="assets/images/SUKARNE.png" alt="logo" class="logo-sm hidden" />
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

                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                                <li class="hidden-xs">
                                    <form role="search" class="navbar-left app-search pull-left">
                                        <input type="text" placeholder="Buscar" class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                                        <i class="mdi mdi-bell"></i> <span class="label label-danger">1</span>
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
                                                            <h5 class="media-heading">Se Ha Registrado Una Nueva Compra</h5>
                                                            <p class="m-0">
                                                                <small>Clic Para Visualizarla</small>
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

                            <h3>Listado De Ventas</h3>
                            <br>
                        
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed" cellspacing="0" width="100%" role="grid" aria-describedby="datatable-responsive_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">

                                        <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First name: activate to sort column descending" style="width: 33%;">Nombre Del Cliente</th>

                                        <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-label="Last name: activate to sort column ascending" style="width: 33%;">Total A Pagar</th>

                                        <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 33%; display: none;">Tipo De Venta</th>

                                        <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 20%; display: none;">Direccion</th>
                                        
                                        <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-label="E-mail: activate to sort column ascending" style="width: 20px; display: none;">Descripcion de Compra</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1" tabindex="0">Jessica Arredondo Luna</td>
                                        <td>$ 750</td>
                                        <td style="display: none;">Local</td>
                                        <td style="display: none;">-</td>
                                    <td style="display: none;"><br>10   paquete de salchichas para asar     $70<br>1    Sazonador Con Ajo   $ 50</td>
                                    </tr>

                                    <tr role="row" class="even">

                                        <td class="sorting_1" tabindex="0">Angelica Garcia Perez</td>
                                        <td>$ 100</td>
                                        <td style="display: none;">Local</td>
                                        <td style="display: none;">-</td>

                                        <td style="display: none;"><br>2    paquete de pierna y muslo de pollo  $ 50</td>
                                    </tr>

                                    <tr role="row" class="odd">
                                        <td class="sorting_1" tabindex="0">Josue Sanches Torres</td>
                                        <td>$ 1000 </td>
                                        <td style="display: none;">A Domicilio</td>
                                        <td style="display: none;">Col. Las Americas, CP: 87000, Referencia: Enfrente de la Iglesia</td>
                                        <td style="display: none;"><br>5    Kilo de pollo para asar preparado   $ 150 <br>5 paquete de Salchichon   $ 50</td>
                                    </tr>

                                    <tr role="row" class="odd">
                                        <td class="sorting_1" tabindex="0">Ricardo Hernadez Garcia</td>
                                        <td>$ 1500</td>
                                        <td style="display: none;">A Domicilio</td>
                                        <td style="display: none;">Col La Moderna, CP: 87123, Referencia: Entre una vulcanizadora y una casa con porton negro</td>
                                        <td style="display: none;"><br>5     kilo de Carne comercial    $ 70 <br>3    Kilo de pollo para asar preparado   $ 150<br>5   paquete de salchichas para asar     $70<br>5     paquete de carne deshebrada     $ 60<br>1    Sazonador Con Ajo   $ 50</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container -->

                    <div class="footer">

                        <div>
                            <strong>Francisco Isaac Perasles Morales</strong> - Copyright &copy; 2017
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
