<div class="menu-ct col-md-12">
      <div class="col-md-3 menu navbar-header">
        <div class="categories" onmousemove="hover()" onmouseleave="poiterout()">
          <div class="categories_show">
            <h5 style="padding-top: 12px;">
              <span class="glyphicon glyphicon-tasks" style="padding-right: 5px;"></span>
              DANH MỤC SẢN PHẨM
            </h5>
            <script type="text/javascript">
              function hover(){
                document.getElementById("bimo").style.opacity = "0.2";
              }
            </script>
          </div>
          <div class="categories_hide">
            <ul class="menu-dropdown" >
              <?php
                $menu_level_1 = DB::table('ts_loaisanpham')->where('parent_id',0)->get();
              ?>
              @foreach($menu_level_1 as $item1)
              <li >
                <a href="" title="{!! $item1->Ten !!}">
                  <i class="fa fa-angle-double-right" style="float: right;"></i>
                  {!! $item1->Ten !!}
                </a>
                <div class="sub-menu" style=" width: 620px">
                  <ul>
                    <li>
                      <a href="#" style="font-size: 130%;line-height: 28px;">
                        Nhà sản xuất
                        
                      </a>
                      <div class="effect-text">
                        <?php
                          $menu_level_2 = DB::table('ts_loaisanpham')->where('parent_id',$item1->id)->get();
                        ?>
                        @foreach($menu_level_2 as $item2)
                        <a href="{!! URL('loai-san-pham/'.$item2->id.'/'.$item2->TenKhongDau) !!}" style="padding: 6px"><span class="glyphicon glyphicon-chevron-right"></span> {!! $item2->Ten !!}</a>
                        @endforeach
                      </div>
                    </li>
                    
                    
                    <script type="text/javascript">
                      function poiterout(){
                        document.getElementById("bimo").style.opacity = "1";
                      }
                    </script>
                  </ul>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 navbar-collapse collapse" id="menu">
        <ul class="nav navbar-nav">
          <li><a href="">Giới thiệu</a></li>
          <li><a href="{!! url('lien-he') !!}">Thông tin liên hệ</a></li>
          <li><a href="">Khuyến mại</a></li>
          <li><a href="">Chăm sóc khách hàng</a></li>
        </ul>
        
      </div>
      @if(Auth::check())
      <div class="col-md-3" style="color: #fff; padding-top: 15px; padding-left: 40px;">
        <span>Xin chào: </span><small><i style="color: red;">{!! Auth::user()->HoTen !!} - <a href="{!! url('dang-xuat') !!}" style="color: #fff;">Thoát</a></i></small>
      </div>
      @else
      <div class="col-md-3 login" style="color: #fff; padding-top: 5px;">
        <a href="{!! url('dang-ky') !!}">Đăng ký</a> |
        <a href="{!! url('dang-nhap') !!}">Đăng nhập</a>
      </div>
      @endif
    </div>