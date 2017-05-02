<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản Trị TechStore</title>

    <!-- Select 2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

    <link href="{!! asset('public/css/select2.min.css') !!}" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="{!! asset('public/ts_admin/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">

    <!-- pick color -->
    <link href="{!! asset('public/ts_admin/pick_color/dist/css/bootstrap-colorpicker.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('public/ts_admin/pick_color/dist/css/bootstrap-colorpicker-plus.css') !!}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{!! asset('public/ts_admin/bower_components/metisMenu/dist/metisMenu.min.css') !!}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{!! asset('public/ts_admin/dist/css/sb-admin-2.css') !!}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{!! asset('public/ts_admin/bower_components/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{!! asset('public/ts_admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') !!}" rel="stylesheet">

    <!-- pickcolor -->
    <link rel="stylesheet" href="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_pickcolor/css/pick-a-color-1.2.3.min.css">

    <!-- DataTables Responsive CSS -->
    <link href="{!! asset('public/ts_admin/bower_components/datatables-responsive/css/dataTables.responsive.css') !!}" rel="stylesheet">

    <!-- my style -->
    <link href="{!! asset('public/css/style.css') !!}" rel="stylesheet">

    <!-- Nhúng trình soạn thảo -->
    <script type="text/javascript" src="{!! asset('public/ts_admin/js/ckeditor/ckeditor.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('public/ts_admin/js/ckfinder/ckfinder.js') !!}"></script>
</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{!! url('thql_admin') !!}">Xin chào - {!! Auth::user()->username !!}</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a   href="{!! url('logout') !!}">
                        <i class="fa fa-user fa-fw"></i>  Đăng xuất</i>
                    </a>
                    
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            @include('admin.blocks.menu')

            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">@yield('controller')
                            <small>@yield('action')</small>
                        </h1>
                    </div>
            <div class="col-lg-12">
                @if (Session::has('flash_message'))
                    <div class="alert alert-{!! Session::get('flash_level') !!}">
                        {!! Session::get('flash_message') !!}
                    </div>
                @endif
            </div>
<!-- Nội dung chích -->

        @yield('content')
    
<!-- end Nội dung chính -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{!! asset('public/ts_admin/bower_components/jquery/dist/jquery.min.js') !!}"></script>

    <!-- select color -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_pickcolor/js/pick-a-color-1.2.3.min.js"></script><script src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_pickcolor/js/tinycolor-0.9.15.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{!! asset('public/ts_admin/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>

    <!-- pick color -->
    <script src="{!! asset('public/ts_admin/pick_color/dist/js/bootstrap-colorpicker.min.js') !!}"></script>
    <script src="{!! asset('public/ts_admin/pick_color/dist/js/bootstrap-colorpicker-plus.js') !!}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{!! asset('public/ts_admin/bower_components/metisMenu/dist/metisMenu.min.js') !!}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{!! asset('public/ts_admin/dist/js/sb-admin-2.js') !!}"></script>

    <!-- Select 2 -->
    <script src="{!! asset('public/js/select2.min.js') !!}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <!-- my script -->
    <script src="{!! asset('public/js/myscript.js') !!}"></script>

    <!-- DataTables JavaScript -->
    <script src="{!! asset('public/ts_admin/bower_components/DataTables/media/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! asset('public/ts_admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') !!}"></script>


</body>

</html>

