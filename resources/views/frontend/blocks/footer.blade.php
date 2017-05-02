 <?php $st = DB::table('ts_caidat')->where('id',5)->first(); ?>
 <div class="footer" style="background: {{ $st->color_footer }};">
   <div class="container">
     <div class="col-md-3">
       <h4>HỖ TRỢ KHÁCH HÀNG</h4>
       <p>Hotline: {{ $st->sdt }}</p>
       <ul>
         <li><small>(1000đ/phút, 8-21h cả T7, CN)</small></li>
         <li><a href=""><small>Các câu hỏi thường gặp</small></a></li>
         <li><a href=""><small>Gửi yêu cầu hỗ trợ</small></a></li>
         <li><a href=""><small>Hướng dẫn đặt hàng</small></a></li>
         <li><a href=""><small>Phương thức vận chuyển</small></a></li>
         <li><a href=""><small>Chính sách đổi giá</small></a></li>
         <li><a href=""><small>Hướng dẫn mua trả góp</small></a></li>
       </ul>
     </div>
     <div class="col-md-3">
       <h4>Về TM TechStore</h4>
       <ul>
         <li><a href=""><small>Giới thiệu về tmtechstore.com</small></a></li>
         <li><a href=""><small>Tuyển dụng</small></a></li>
         <li><a href=""><small>Chính sách bảo mật</small></a></li>
         <li><a href=""><small>Điều khoản sử dụng</small></a></li>
         <li><a href=""><small>TechStore tư vấn</small></a></li>
         <li><a href=""><small>Ưu đãi doanh nghiệp</small></a></li>
       </ul>
     </div>
     <div class="col-md-3">
       <h4>HỢP TÁC VÀ LIÊN KIẾT</h4>
       <ul>
         <li><a href=""><small>Quy chế hoạt động của sàn TMDT</small></a></li>
         <li><a href=""><small>Foody.vn - Ăn gì ở đâu</small></a></li>
         <li><a href=""><small>iViVu.com - Đặt khách sạn giá rẻ</small></a></li>
         <li><a href=""><small>godady.com - Tên miền giá rẻ</small></a></li>
         <li><a href=""><small>Thỏa sức mua sắm cùng tmtechstore.com</small></a></li>
       </ul>
     </div>
     <div class="col-md-3">
       <h4>Phương thức thanh toán</h4>
       <div class="row">
         <a href="" class="col-md-6"><img src="{{ asset('public/frontend/img/donga.png') }}"></a>
         <a href="" class="col-md-6"><img src="{{ asset('public/frontend/img/vietcombank.png') }}"></a>
       </div>
       <div class="row">
         <a href="" class="col-md-6"><img src="{{ asset('public/frontend/img/techcombank.png') }}"></a>
         <a href="" class="col-md-6"><img src="{{ asset('public/frontend/img/sacobank.png') }}"></a>
         
       </div>
       <div class="row">
         <a href="" class="col-md-6"><img src="{{ asset('public/frontend/img/vtbank.png') }}"></a>
         <a href="" class="col-md-6"><img src="{{ asset('public/frontend/img/vpbank.png') }}"></a>
       </div>
     </div>
   </div>
 </div>
