<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Quản trị TechStore</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('public/ts_admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- MetisMenu CSS -->
    <link href="{!! asset('public/ts_admin/bower_components/metisMenu/dist/metisMenu.min.css') !!}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{!! asset('public/ts_admin/dist/css/sb-admin-2.css') !!}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{!! asset('public/ts_admin/bower_components/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{!! asset('public/ts_admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') !!}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{!! asset('public/ts_admin/bower_components/datatables-responsive/css/dataTables.responsive.css') !!}" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Đăng Nhập</h3>
                    </div>
                    <div class="panel-body">
                    <div class="">
                        @if (Session::has('flash_message'))
                            <div class="alert alert-{!! Session::get('flash_level') !!}">
                                {!! Session::get('flash_message') !!}
                            </div>
                        @endif
                    </div>
                    @include('admin.blocks.error')
                        <form role="form" action="" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Tên đăng nhập" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Đăng nhập</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{!! asset('public/ts_admin/bower_components/jquery/dist/jquery.min.js') !!}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{!! asset('public/ts_admin/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{!! asset('public/ts_admin/bower_components/metisMenu/dist/metisMenu.min.js') !!}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{!! asset('public/ts_admin/dist/js/sb-admin-2.js') !!}"></script>

    <!-- DataTables JavaScript -->
    <script src="{!! asset('public/ts_admin/bower_components/DataTables/media/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! asset('public/ts_admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') !!}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('div.alert').delay(3000).slideUp();
        });
    </script>

</body>

</html>
