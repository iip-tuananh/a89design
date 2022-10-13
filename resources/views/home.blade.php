@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<section class="awe-section-1">
   <div class="home-slider owl-carousel not-dqowl">
      @foreach ($banners as $banner)
         <div class="item">
         <a href="{{$banner->link}}" class="clearfix">
         <img src="{{$banner->image}}" class="img-responsive center-block" loading="lazy" />
         </a>	
         </div>
      @endforeach
   </div>
</section>
<section class="awe-section-4">
   <div class="section_about">
         <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-12 col-xs-12">
               <div class="welcome-title">
                     <h2>Chào mừng đến CÔNG TY CỔ PHẦN KIẾN TRÚC VÀ NỘI THẤT <span style="color: #c96808">A89</span></h2>
               </div>
               <div class="welcome-content">
                     {!!$aboutUs->description!!}
               </div>
               <div class="welcome-services">
                     {{-- <div class="row">
                     <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="w-single-services">
                           <div class="services-img img-1">
                                 <img src="//bizweb.dktcdn.net/100/328/080/themes/679625/assets/loader.svg?1650598682225" data-lazyload="//bizweb.dktcdn.net/100/328/080/themes/679625/assets/sec_about_child_image_1.png?1650598682225" width="32" alt="Mua bất động sản">
                           </div>
                           <div class="services-desc">
                                 <h6>Mua bất động sản</h6>
                                 <p>Bạn đang tìm một căn hộ sang trọng đẳng cấp và hơn hết gắn bó với thiên nhiên?</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="w-single-services">
                           <div class="services-img img-1">
                                 <img src="//bizweb.dktcdn.net/100/328/080/themes/679625/assets/loader.svg?1650598682225" data-lazyload="//bizweb.dktcdn.net/100/328/080/themes/679625/assets/sec_about_child_image_2.png?1650598682225" width="32" alt="Thuê bất động sản">
                           </div>
                           <div class="services-desc">
                                 <h6>Thuê bất động sản</h6>
                                 <p>Bạn đang tìm một căn hộ sang trọng đẳng cấp và hơn hết gắn bó với thiên nhiên?</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="w-single-services">
                           <div class="services-img img-1">
                                 <img src="//bizweb.dktcdn.net/100/328/080/themes/679625/assets/loader.svg?1650598682225" data-lazyload="//bizweb.dktcdn.net/100/328/080/themes/679625/assets/sec_about_child_image_3.png?1650598682225" width="32" alt="Tư vấn Bất động sản">
                           </div>
                           <div class="services-desc">
                                 <h6>Tư vấn Bất động sản</h6>
                                 <p>Bạn đang tìm một căn hộ sang trọng đẳng cấp và hơn hết gắn bó với thiên nhiên?</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="w-single-services">
                           <div class="services-img img-1">
                                 <img src="//bizweb.dktcdn.net/100/328/080/themes/679625/assets/loader.svg?1650598682225" data-lazyload="//bizweb.dktcdn.net/100/328/080/themes/679625/assets/sec_about_child_image_4.png?1650598682225" width="32" alt="Môi giới nhà đất">
                           </div>
                           <div class="services-desc">
                                 <h6>Môi giới nhà đất</h6>
                                 <p>Bạn đang tìm một căn hộ sang trọng đẳng cấp và hơn hết gắn bó với thiên nhiên?</p>
                           </div>
                        </div>
                     </div>
                     </div> --}}
                     <div class="row">
                     <div class="col-md-12">
                        <div class="more text-center">
                           <a href="{{route('aboutUs')}}" title="Xem chi tiết">Xem chi tiết</a>
                        </div>
                     </div>
                     </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
               <div class="about-us-slide owl-carousel">
                  @foreach ($prizes as $banner)
                     <div class="item">
                     <a href="{{$banner->link}}" data-src="{{$banner->image}}" class="clearfix" data-fancybox="gallery">
                     <img src="{{$banner->image}}" class="img-responsive center-block" loading="lazy" />
                     </a>	
                     </div>
                  @endforeach
               </div>
            </div>
         </div>
         </div>
   </div>
</section>
@foreach ($categoryhome as $key=>$cate)
@if (count($cate->product) > 0)
   @if ($key % 2 == 0)
      <section class="awe-section-3">
         <div class="section_real_news">
               <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="real-title">
                           <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}" title="{{languageName($cate->name)}}">
                           {{-- <h3>Nổi bật</h3> --}}
                           <h2>{{languageName($cate->name)}}</h2>
                           </a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="products-view-grid clearfix">
                     @foreach ($cate->product as $product)
                     <div class="col-md-4 col-sm-6 col-xs-6 col-100">
                        @include('layouts.product.item', ['product'=>$product])
                     </div>
                     @endforeach
                  </div>
               </div>
               <div class="row margin-top-15">
                  <div class="col-md-12">
                     <div class="ant-more text-center">
                           <a class="btn" href="{{route('allListProCate', ['cate'=>$cate->slug])}}">Xem thêm</a>
                     </div>
                  </div>
               </div>
               </div>
         </div>
      </section>
   @else
      <section class="awe-section-5">
         <div class="section_real_news" style="background-color: #ffffff">
               <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="real-title">
                           <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}" title="{{languageName($cate->name)}}">
                           {{-- <h3>Tiêu biểu</h3> --}}
                           <h2>{{languageName($cate->name)}}</h2>
                           </a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="products-view-grid clearfix">
                     @foreach ($cate->product as $product)
                        <div class="col-md-4 col-sm-6 col-xs-6 col-100">
                           @include('layouts.product.item', ['product'=>$product])
                        </div>
                     @endforeach
                  </div>
               </div>
               <div class="row margin-top-15">
                  <div class="col-md-12">
                     <div class="ant-more text-center">
                           <a class="btn" href="{{route('allListProCate', ['cate'=>$cate->slug])}}">Xem thêm</a>
                     </div>
                  </div>
               </div>
               </div>
         </div>
      </section>
   @endif
@endif
@endforeach

{{-- <section class="awe-section-6">
   <div class="section_real_city">
         <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="real-title">
                     <h3>Thành phố</h3>
                     <h2>Nổi bật nhất</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6 col-100">
               <div class="ant-property-thumbnail">
                     <img src="//bizweb.dktcdn.net/100/328/080/themes/679625/assets/loader.svg?1650598682225" data-lazyload="//bizweb.dktcdn.net/100/328/080/themes/679625/assets/real_city_1.png?1650598682225" alt="Thành Phố Huế" class="img-responsive center-block" />
                     <div class="ant-property-overlay">
                     <div class="ant-property-content">
                        <h2 class="ant-property-title">
                           <a href="/collections/all" title="Thành Phố Huế">Thành Phố Huế</a>
                        </h2>
                        <p class="ant-property-total">25 Dự án</p>
                     </div>
                     </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-100">
               <div class="ant-property-thumbnail">
                     <img src="//bizweb.dktcdn.net/100/328/080/themes/679625/assets/loader.svg?1650598682225" data-lazyload="//bizweb.dktcdn.net/100/328/080/themes/679625/assets/real_city_2.png?1650598682225" alt="Đà Nẵng" class="img-responsive center-block" />
                     <div class="ant-property-overlay">
                     <div class="ant-property-content">
                        <h2 class="ant-property-title">
                           <a href="/collections/all" title="Đà Nẵng">Đà Nẵng</a>
                        </h2>
                        <p class="ant-property-total">30 Dự án</p>
                     </div>
                     </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-100">
               <div class="ant-property-thumbnail">
                     <img src="//bizweb.dktcdn.net/100/328/080/themes/679625/assets/loader.svg?1650598682225" data-lazyload="//bizweb.dktcdn.net/100/328/080/themes/679625/assets/real_city_3.png?1650598682225" alt="Nha Trang" class="img-responsive center-block" />
                     <div class="ant-property-overlay">
                     <div class="ant-property-content">
                        <h2 class="ant-property-title">
                           <a href="/collections/all" title="Nha Trang">Nha Trang</a>
                        </h2>
                        <p class="ant-property-total">15 Dự án</p>
                     </div>
                     </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-100">
               <div class="ant-property-thumbnail">
                     <img src="//bizweb.dktcdn.net/100/328/080/themes/679625/assets/loader.svg?1650598682225" data-lazyload="//bizweb.dktcdn.net/100/328/080/themes/679625/assets/real_city_4.png?1650598682225" alt="Hà Nội" class="img-responsive center-block" />
                     <div class="ant-property-overlay">
                     <div class="ant-property-content">
                        <h2 class="ant-property-title">
                           <a href="/collections/all" title="Hà Nội">Hà Nội</a>
                        </h2>
                        <p class="ant-property-total">25 Dự án</p>
                     </div>
                     </div>
               </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12 col-100">
               <div class="ant-property-thumbnail">
                     <img src="//bizweb.dktcdn.net/100/328/080/themes/679625/assets/loader.svg?1650598682225" data-lazyload="//bizweb.dktcdn.net/100/328/080/themes/679625/assets/real_city_5.png?1650598682225" alt="Hồ Chí Minh" class="img-responsive center-block" />
                     <div class="ant-property-overlay">
                     <div class="ant-property-content">
                        <h2 class="ant-property-title">
                           <a href="/collections/all" title="Hồ Chí Minh">Hồ Chí Minh</a>
                        </h2>
                        <p class="ant-property-total">25 Dự án</p>
                     </div>
                     </div>
               </div>
            </div>
         </div>
         </div>
   </div>
</section> --}}
<section class="awe-section-7">
   <section class="section-news">
         <div class="container">
         <div class="blogs-content">
            <div class="row">
               <div class="col-md-12">
                     <div class="real-title">
                     <a href="{{route('allListBlog')}}" title="Tin tức">
                        {{-- <h3>Thị trường</h3> --}}
                        <h2>Tin tức</h2>
                     </a>
                     </div>
               </div>
            </div>
            <div class="list-blogs-link">
               <div class="row">
                     <div class="col-md-12">
                     <div class="section-news-owl owl-carousel not-dqowl">
                        @foreach ($homeBlog as $blog)
                           <div class="item">
                              <article class="blog-item">
                                    <div class="blog-item-thumbnail">								
                                    <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}">
                                    <img src="{{$blog->image}}" data-lazyload="{{$blog->image}}" alt="{{languageName($blog->title)}}" >							
                                    </a>
                                    </div>
                                    <h3 class="blog-item-name margin-top-10"><a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a></h3>
                                    <p class="blog-item-summary margin-bottom-5 desc">   
                                    {{languageName($blog->description)}}
                                    </p>
                                    <div class="blog-date clearfix">
                                    <div class="post-time">
                                       <i class="ion ion-md-time"></i> {{date('d/m/Y', strtotime($blog->created_at))}}
                                    </div>
                                    @if ($blog->category)
                                       <div class="post-author">
                                          <i class="ion ion-md-brush"></i> {{languageName($blog->cate->name)}}
                                       </div>
                                    @endif
                                    </div>
                              </article>
                           </div>
                        @endforeach
                     </div>
                     </div>
               </div>
            </div>
         </div>
         </div>
   </section>
</section>
@endsection