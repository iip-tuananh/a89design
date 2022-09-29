@extends('layouts.main.master')
@section('title')
Giới thiệu về {{$setting->company}}
@endsection
@section('description')
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<section class="bread-crumb">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <div class="bread-h3">
               <h2>Giới thiệu</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xs-12 text-center">
            <ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
               <li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                  <a itemprop="item" href="{{route('home')}}" title="Trang chủ">
                     <span itemprop="name">Trang chủ</span>
                  </a>
                  <span><i class="fa fa-angle-right"></i></span>
               </li>
               <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                  <strong itemprop="name">Giới thiệu</strong>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="page about-us-page">
   <h1 class="title-head hidden">Giới thiệu</h1>
   <div class="section-about-1">
      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <div class="faq">
                  {!!$pageContent->content!!}
               </div>
            </div>
            <div class="col-md-5">
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
      <span class="skew"></span>
   </div>
   <div class="box_noiDung" id="box_noiDung">
      <div class="right">
         <div class="box_content">
            <img src="{{$pageContent->image}}" alt="" loading="lazy">
         </div>
      </div>
      <div class="left">
            <div class="item">
               <div class="key key_1 key_2"><img alt="" src="{{url('frontend/images/icon-2.png')}}"></div>
               <div class="value text-center title">TẦM NHÌN </div>
            </div>
            <div class="item">
               <div class="key key_1"></div>
               <div class="value value_2">
                  <p>Với những kinh nghiệm lâu năm trong lĩnh vực tư vấn thi công kiến trúc, Vking luôn tâm niệm mang đến cho Khách Hàng chất lượng sản phẩm tốt nhất.</p>
               </div>
            </div>
            <div class="item">
               <div class="key"><img alt="" src="{{url('frontend/images/icon-3.png')}}"></div>
               <div class="value value_1 text-center title">XỨ MỆNH</div>
            </div>
            <div class="item">
               <div class="key key_1"></div>
               <div class="value value_2">
                  <p>Với những kinh nghiệm lâu năm trong lĩnh vực tư vấn thi công kiến trúc, Vking luôn tâm niệm mang đến cho Khách Hàng chất lượng sản phẩm tốt nhất.</p>
               </div>
            </div>
            <div class="item">
               <div class="key"><img alt="" src="{{url('frontend/images/icon-5.png')}}"></div>
               <div class="value text-center title">TRIẾT LÝ</div>
            </div>
            <div class="item">
               <div class="key key_1"></div>
               <div class="value value_2">
                  <p>Với những kinh nghiệm lâu năm trong lĩnh vực tư vấn thi công kiến trúc, Vking luôn tâm niệm mang đến cho Khách Hàng chất lượng sản phẩm tốt nhất.</p>
               </div>
            </div>
         {{-- <div class="item">
            <div class="key"><img alt="" src="{{url('frontend/images/icon-6.png')}}"></div>
            <div class="value value_1">Buổi 4: THẤU HIỂU &amp; THỰC HÀNH CÁC MÔ HÌNH RA QUYẾT ĐỊNH CHIẾN LƯỢC TRONG KỶ NGUYÊN 4.0</div>
         </div>
         <div class="item">
            <div class="key key_1"></div>
            <div class="value value_2">
               <p> - Thấu hiểu các mô hình ra quyết định chiến lược</p>
               <p> - Phân tích &amp; thực hành các case studies chiến lược thực tế.</p>
               <p> - Ứng dụng công nghệ để xây dựng hệ thống &amp; mô hình kinh doanh online trong kỷ nguyên số.</p>
               <p> - Đồng bộ hệ thống &amp; mô hình kinh doanh online.</p>
               <p> - Giải đáp các vấn đề thực tế của doanh nghiệp.</p>
            </div>
         </div> --}}
      </div>
   </div>
</section>
@endsection