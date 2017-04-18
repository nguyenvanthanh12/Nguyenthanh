<div class="menu-ct col-md-12">
      <div class="col-md-3 menu navbar-header">
        <div class="categories" onmousemove="hover()" onmouseleave="poiterout()">
          <div class="categories_show">
            <h5 >
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
                      <div class="effect-text" style="border-right: 1px solid #ccc">
                        <?php
                          $menu_level_2 = DB::table('ts_loaisanpham')->where('parent_id',$item1->id)->get();
                        ?>
                        @foreach($menu_level_2 as $item2)
                        <a href="{!! URL('loai-san-pham/'.$item2->id.'/'.$item2->TenKhongDau) !!}" style="padding: 6px"><span class="glyphicon glyphicon-chevron-right"></span> {!! $item2->Ten !!}</a>
                        @endforeach
                      </div>
                    </li>
                    <li style="height: auto;">
                      <a href="#" style="font-size: 130%;line-height: 28px;">
                        Hệ điều hành
                        
                      </a>
                      <div class="effect-text">
                        <a href="" style="padding: 6px"><span class="glyphicon glyphicon-chevron-right"></span> Windowns</a>
                        <a href="" style="padding: 6px"><span class="glyphicon glyphicon-chevron-right"></span> MacOS</a>
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
      
      <div class="col-md-9 navbar-collapse collapse" id="menu">
        <ul class="nav navbar-nav">
          <li><a href="">Giới thiệu</a></li>
          <li><a href="{!! url('lien-he') !!}">Thông tin liên hệ</a></li>
          <li><a href="">Khuyến mại</a></li>
          <li><a href="">Chăm sóc khách hàng</a></li>
          <li><a href="">Đăng ký</a></li>
          <li><a href="">Đăng nhập</a></li>
        </ul>
      </div>
    </div>