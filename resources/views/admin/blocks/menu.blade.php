<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{!! url('thql_admin') !!}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
            <?php 
                $lienhe = DB::table('ts_lienhe')->select('id','trangthai')->where('trangthai',0)->get();
            ?>
                <a href="{!! route('getContactList') !!}" ><i class="fa fa-phone fa-fw"></i> Liên hệ 
                    @if(count($lienhe) > 0)
                    <span class="badge" style="background: red;">{{ count($lienhe) }}</span>
                    @endif
                </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Loại sản phẩm<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('getCateList') }}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{!! route('getCateAdd') !!}">Thêm</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-cube fa-fw"></i> Sản phẩm<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{!! route('getProductList') !!}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{ route('getProductAdd') }}">Thêm</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-cog fa-fw"></i> Thông số sản phẩm<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{!! route('getParaList') !!}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{!! route('getparaadd') !!}">Thêm thông số</a>
                    </li>
                    
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-gift fa-fw"></i> Khuyến mại loại 1<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('getEvent1List') }}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{!! route('getEvent1Add') !!}">Thêm</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> Thành viên<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('getUserList') }}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{ route('getUserAdd') }}">Thêm</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>