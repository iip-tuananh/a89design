@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
@endphp
{{url(''.$imgs[0])}}
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
               <h2>{{languageName($product->name)}}</h2>
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
                  <a itemprop="item" href="{{route('allListProCate', ['cate'=>$product->cate_slug])}}" title="Căn hộ, Chung cư">
                     <span itemprop="name">{{languageName($product->cate->name)}}</span>
                  </a>
                  <span><i class="fa fa-angle-right"></i></span>
               </li>
               <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                  <span itemprop="name">{{languageName($product->name)}}</span>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
<div class="main-content">
   <section class="product margin-top-30" itemscope itemtype="http://schema.org/Product">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 details-product">
               <div class="row margin-bottom-10 margin-bottom-20">
                  <div class="col-md-6">
                     <a data-src="{{$imgs[0]}}" data-fancybox="gallery">
                        <img class="big-image" src="{{$imgs[0]}}" alt="{{languageName($product->name)}}" loading="lazy" >
                     </a>
                     {{-- <div class="relative product-image-block no-thum">
                        <div class="large-image">
                           <a href="//bizweb.dktcdn.net/thumb/1024x1024/100/328/080/products/a2-1492339382965-18c46877-8258-4b5d-9fe5-335884e044f1-3440699f-5633-4f3a-8e4a-e0b9123de6bb.jpg?v=1537172615573" data-rel="prettyPhoto[product-gallery]" class="large_image_url">
                           <img id="zoom_01" src="//bizweb.dktcdn.net/thumb/1024x1024/100/328/080/products/a2-1492339382965-18c46877-8258-4b5d-9fe5-335884e044f1-3440699f-5633-4f3a-8e4a-e0b9123de6bb.jpg?v=1537172615573" alt="Demo" class="img-responsive center-block">
                           </a>							
                           <div class="hidden">
                              <div class="item">
                                 <a href="https://bizweb.dktcdn.net/100/328/080/products/a2-1492339382965-18c46877-8258-4b5d-9fe5-335884e044f1-3440699f-5633-4f3a-8e4a-e0b9123de6bb.jpg?v=1537172615573" data-image="https://bizweb.dktcdn.net/100/328/080/products/a2-1492339382965-18c46877-8258-4b5d-9fe5-335884e044f1-3440699f-5633-4f3a-8e4a-e0b9123de6bb.jpg?v=1537172615573" data-zoom-image="https://bizweb.dktcdn.net/100/328/080/products/a2-1492339382965-18c46877-8258-4b5d-9fe5-335884e044f1-3440699f-5633-4f3a-8e4a-e0b9123de6bb.jpg?v=1537172615573" data-rel="prettyPhoto[product-gallery]">										
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div> --}}
                  </div>
                  <div class="col-md-6">
                     @if (count($imgs) > 5)
                        <div class="row">
                           @for ($i = 1; $i <= 4; $i++)
                              @if ($i == 4)
                              <div class="col-md-6 col-xs-6 show-image">
                                 <a data-src="{{$imgs[$i]}}" data-fancybox="gallery">
                                    <img class="small-image" src="{{$imgs[$i]}}" alt="{{languageName($product->name)}}" loading="lazy">
                                    <p>XEM THÊM +{{count($imgs)-5}} ẢNH</p>
                                 </a>
                              </div>
                              @else
                              <div class="col-md-6 col-xs-6 show-image">
                                 <a data-src="{{$imgs[$i]}}" data-fancybox="gallery">
                                    <img class="small-image" src="{{$imgs[$i]}}" alt="{{languageName($product->name)}}" loading="lazy">
                                 </a>
                              </div>
                              @endif
                           @endfor
                           @for ($i = 5; $i < count($imgs); $i++)
                              <div class="col-md-6 col-xs-6 hidden">
                                 <a data-src="{{$imgs[$i]}}" data-fancybox="gallery">
                                    <img class="small-image" src="{{$imgs[$i]}}" alt="{{languageName($product->name)}}" loading="lazy">
                                 </a>
                              </div>
                           @endfor
                        </div>
                     @else
                        <div class="row">
                           @for ($i = 1; $i < count($imgs) ; $i++)
                              <div class="col-md-6 col-xs-6">
                                 <a data-src="{{$imgs[$i]}}" data-fancybox="gallery">
                                    <img class="small-image" src="{{$imgs[$i]}}" alt="{{languageName($product->name)}}" loading="lazy">
                                 </a>
                              </div>
                           @endfor
                        </div>
                     @endif
                     {{-- <div class="details-pro">
                        <h1 class="title-head">Demo</h1>
                        <div class="journey">
                           <span><i class="fa fa-map-marker" aria-hidden="true"></i> Địa điểm:</span> Hồ Chí Minh
                        </div>
                        <div class="product-summary product_description margin-bottom-10 margin-top-5">
                           <div class="rte description">
                              Chủ nhà cần cho thuê căn hộ 108m2, 3PN/2wc. Căn góc số 11, tháp P1, tầng cao view thoáng 
                              Căn góc view kênh Nhiêu Lộc và view Quận 1. Tuyệt đẹp về đêm 
                              Nội thất đầy đủ, chỉ xách vali vô ở.  Giá cho thuê 32 triệu/tháng  
                              Anh chị có nhu cầu liên hệ...
                           </div>
                        </div>
                        <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                           <link itemprop="url" href="https://ant-landmark.mysapo.net/demo" />
                           <meta itemprop="priceValidUntil" content="2030-11-05" />
                           <div class="price-box clearfix">
                              <div class="special-price">
                                 <span class="price product-price">32.000.000₫</span>
                                 <meta itemprop="price" content="32000000">
                                 <meta itemprop="priceCurrency" content="VND">
                              </div>
                              <!-- Giá -->
                           </div>
                           <div class="inve_brand hidden">
                              <span class="stock-brand-title"><strong>Thương hiệu:</strong></span>
                              <span class="a-brand">Hồ Chí Minh</span>
                           </div>
                           <div class="inventory_quantity hidden">
                              <span class="stock-brand-title"><strong>Tình trạng:</strong></span>
                              <span class="a-stock">
                                 <link itemprop="availability" href="http://schema.org/InStock" />
                                 Chỉ còn 1 sản phẩm
                              </span>
                           </div>
                        </div>
                        <div class="form-product">
                           <form enctype="multipart/form-data" id="add-to-cart-form" action="/cart/add" method="post" class="form-inline">
                              <div class="box-variant clearfix  hidden ">
                                 <input type="hidden" name="variantId" value="20603475" />
                              </div>
                           </form>
                        </div>
                        <div class="call-me-back">
                           <ul class="row">
                              <li class="col-md-6 col-sm-6 col-xs-6 col-100">
                                 <a href="tel:19006750" title="Gọi HOTLINE" class="icon-mouse-scroll">
                                 <i class="fa fa-phone" aria-hidden="true"></i> Gọi HOTLINE
                                 </a>
                              </li>
                              <li class="col-md-6 col-sm-6 col-xs-6 col-100">
                                 <button class="btn-callmeback" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-paper-plane" aria-hidden="true"></i> Đặt lịch tham quan</button>
                              </li>
                           </ul>
                        </div>
                        <div class="social-sharing margin-top-20">
                           <!-- Go to www.addthis.com/dashboard to customize your tools -->
                           <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a099baca270babc"></script>
                           <!-- Go to www.addthis.com/dashboard to customize your tools -->
                           <div class="addthis_inline_share_toolbox_uu9r"></div>
                        </div>
                     </div> --}}
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 margin-top-15 margin-bottom-10">
                     <div class="product-tab e-tabs">
                        <div class="text-center border-ghghg margin-bottom-20">
                           <ul class="tabs tabs-title clearfix">
                              <li class="tab-link" data-tab="tab-1">
                                 <h3><span>Mô tả</span></h3>
                              </li>
                              <li class="tab-link" data-tab="tab-2">
                                 <h3><span>Thông tin chi tiết</span></h3>
                              </li>
                           </ul>
                        </div>
                        <div id="tab-1" class="tab-content">
                           {!!languageName($product->description)!!}
                        </div>
                        <div id="tab-2" class="tab-content">
                           {!!languageName($product->content)!!}	
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  @if (count($productlq) > 1)
                  <div class="col-xs-12 col-sm-12 col-md-12 margin-top-20 margin-bottom-10">
                     <div class="related-product">
                        <div class="home-title">
                           <h2><a href="{{route('allListProCate', ['cate'=>$product->cate_slug])}}" class="text-uppercase">Dự án liên quan</a></h2>
                        </div>
                        <div class="section-tour-owl owl-carousel not-dqowl products-view-grid margin-top-10" data-md-items="5" data-sm-items="4" data-xs-items="2" data-margin="10">
                           @foreach ($productlq as $pro)
                           @if ($pro->id != $product->id)
                           <div class="item">
                              @include('layouts.product.item', ['product'=>$pro])
                           </div>
                           @endif
                           @endforeach
                        </div>
                     </div>
                  </div>
                  @endif
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection