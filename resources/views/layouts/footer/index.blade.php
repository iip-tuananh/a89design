<footer class="footer">
   <div class="top-footer hidden-sm hidde-xs">
      <div class="container">
         <div class="top-footer-bg">
            <div class="row">
               <div class="col-md-3">
                  <img src="{{$setting->logo}}" alt="{{$setting->company}}" loading="lazy">
               </div>
               <div class="col-md-9">
                     <div class="row text-center">
                        <h3>GỬI YÊU CẦU TƯ VẤN</h3>
                     </div>
                     <form action="{{route('postcontact')}}" method="POST">
                     @csrf
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group input-group">
                              <span class="input-group-addon"><i class="fa fa-user"></i></span>
                              <input name="name" type="text" class="form-control" placeholder="Họ tên" required>
                           </div>
                           <div class="form-group input-group">
                              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                              <input name="email" type="email" class="form-control" placeholder="Địa chỉ Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group input-group">
                              <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                              <input name="phone" type="text" class="form-control" placeholder="Số điện thoại" required>
                           </div>
                           <div class="form-group input-group">
                              <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                              <textarea name="mess" cols="30" rows="1" class="form-control" placeholder="Nội dung yêu cầu tư vấn" required></textarea>
                           </div>
                        </div>
                     </div>
                     <div class="row text-center">
                        <button type="submit" class="btn footer-submit">GỬI ĐI</button>
                     </div>
                     </form>
                        {{-- <div class="row">
                        <div class="col-md-4">
                           <div class="top-footer-address">
                              <i class="fa fa-phone"></i>
                              <span class="title">Điện thoại</span>
                              <a href="tel:19006750">1900 6750</a>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="top-footer-address">
                              <i class="fa fa-location-arrow"></i>
                              <span class="title">Địa chỉ</span>
                              70 Lu Gia, Ward 15, District 11, Ho Chi Minh City
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="top-footer-address">
                              <i class="fa fa-envelope"></i>
                              <span class="title">Email</span>
                              <a href="mailto:support@sapo.vn">support@sapo.vn</a>
                           </div>
                        </div>
                        </div> --}}
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="site-footer">
         <div class="container">
         <div class="footer-inner padding-top-25 padding-bottom-10">
            <div class="row text-uppercase">
               <div class="col-xs-12 col-sm-6 col-md-4">
                     <div class="footer-widget has-click">
                     <h3>Thông tin công ty</h3>
                     <ul class="list-menu">
                        <li><i class="fa fa-map-marker"></i> {{$setting->address1}}</li>
                        @if ($setting->address2)
                        <li><i class="fa fa-map-marker"></i> {{$setting->address2}}</li>
                        @endif
                        <li><i class="fa fa-phone"></i> <a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a></li>
                        @if ($setting->phone2)
                        <li><i class="fa fa-phone"></i> <a href="tel:{{$setting->phone2}}">{{$setting->phone2}}</a></li>
                        @endif
                        <li><i class="fa fa-envelope"></i> {{$setting->email}}</li>
                        <li>
                           <p>Kết nối với chúng tôi:</p>
                           <p>
                              <a href="{{$setting->facebook}}"><img src="{{url('frontend/images/facebook.png')}}" alt="" loading="lazy"></a>
                              <a href="https://youtube.com/"><img src="{{url('frontend/images/youtube.png')}}" alt="" loading="lazy"></a>
                              <a href="https://www.instagram.com/"><img src="{{url('frontend/images/instagram.png')}}" alt="" loading="lazy"></a>
                           </p>
                        </li>
                     </ul>
                     </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-2">
                     <div class="footer-widget has-click">
                     <h3><span>Về Chúng Tôi</span></h3>
                     <ul class="list-menu">
                        <li><a href="{{route('aboutUs')}}">Giới thiệu</a></li>
                        @foreach ($categoryhome as $cate)
                        <li><a href="{{route('allListProCate', ['cate'=>$cate->slug])}}">{{languageName($cate->name)}}</a></li>
                        @endforeach
                        <li><a href="{{route('listService')}}">Dịch vụ</a></li>
                        <li><a href="{{route('lienHe')}}">Liên hệ</a></li>
                     </ul>
                     </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3">
                     <div class="footer-widget has-click">
                     <h3><span>Fanpage</span></h3>
                     <div class="fb-page" 
                     data-href="{{$setting->facebook}}"
                     data-width="380" 
                     data-hide-cover="false"
                     data-show-facepile="false"></div>
                     </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3">
                     <div class="footer-widget has-click">
                     <h3><span>Google Map</span></h3>
                     {!!$setting->iframe_map!!}
                     </div>
               </div>
            </div>
         </div>
         </div>
   </div>
   <div class="copyright clearfix">
         <div class="container">
         <div class="inner clearfix">
            <div class="row">
               <div class="col-sm-12 text-center">
                     <span>© Bản quyền thuộc về <b>{{$setting->company}}</b> <span class="s480-f">|</span> Cung cấp bởi <a href="https://sbtsoftware.vn/" title="SBT" target="_blank" rel="nofollow">SBT</a></span>
               </div>
            </div>
         </div>
         <div class="back-to-top"><i class="fa fa-angle-double-up"></i></div>
         <div class="popup-register">Đăng kí tư vấn</div>
         </div>
   </div>
</footer>