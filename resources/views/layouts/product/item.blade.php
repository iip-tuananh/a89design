
@php
$img = json_decode($product['images']);
@endphp
{{-- <div class="col-md-4 col-sm-6 col-xs-6 col-100"> --}}
   <div class="sunhouse-item clearfix">
   <div class="ant-image">
      <a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" class="wrapper-image">
         @if (count($img) > 1)
            <img src="{{$img[0]}}" data-lazyload="{{$img[0]}}" alt="{{languageName($product->name)}}" class="img-responsive layout-1" loading="lazy">
            <img src="{{$img[1]}}" data-lazyload="{{$img[1]}}" alt="{{languageName($product->name)}}" class="img-responsive layout-2" loading="lazy">
         @else
            <img src="{{$img[0]}}" data-lazyload="{{$img[0]}}" alt="{{languageName($product->name)}}" class="img-responsive layout-1" loading="lazy">
            <img src="{{$img[0]}}" data-lazyload="{{$img[0]}}" alt="{{languageName($product->name)}}" class="img-responsive layout-2" loading="lazy">
         @endif
      </a>
      <div class="button-effect">
         <a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" class="btn" title="Xem chi tiết"><i class="fa fa-link"></i></a>
         <a class="btn" data-fancybox="group0s" href="{{$img[0]}}" title="Thư viện ảnh"><i class="fa fa-photo"></i></a>
      </div>
   </div>
   <div class="wrapper-content">
      <div class="about-house">
         <h3 class="title" style="margin-bottom: 0;">
               <a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}">{{languageName($product->name)}}</a>
         </h3>
      </div>
      <div class="more-info-house">
         <div class="place-house">
               <div class="place-houses">
               <i class="fa fa-user"></i>
               Chủ đầu tư: {{$product->sku}}
               </div>
               <div class="place-houses">
               <i class="fa fa-map-marker"></i>
               Địa chỉ: {{$product->origin}}
               </div>
               <div class="place-houses">
               <i class="fa fa-map"></i>
               Diện tích: {{$product->thickness}}
               </div>
               <div class="place-houses">
               <i class="fa fa-building"></i>
               Số tầng: {{$product->species}}
               </div>
         </div>
      </div>
   </div>
   </div>
{{-- </div> --}}
