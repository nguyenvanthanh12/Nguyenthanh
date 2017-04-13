<div class="container">

    <div id="categorymenu">
      <nav class="subnav">
        <ul class="nav-pills categorymenu">
          <li><a class="active" href="{!! url('/') !!}">Trang chủ</a></li>
          <?php
            $menu_level_1 = DB::table('ts_loaisanpham')->where('parent_id',0)->get();
          ?>
          @foreach($menu_level_1 as $item1) 
          <li><a  href="">{!! $item1->Ten !!}</a>
            <div>
              <ul>
                <?php
                  $menu_level_2 = DB::table('ts_loaisanpham')->where('parent_id',$item1->id)->get();
                ?>
                @foreach($menu_level_2 as $item2)
                <li><a href="{!! URL('loai-san-pham/'.$item2->id.'/'.$item2->TenKhongDau) !!}">{!! $item2->Ten !!}</a></li>
                @endforeach
              </ul>
            </div>
          </li>
          @endforeach
          <li><a href="contact.html">Liên hệ</a></li>         
        </ul>
      </nav>
    </div>
  </div>