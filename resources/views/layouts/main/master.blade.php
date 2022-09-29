<!DOCTYPE html>
<html lang="vi">
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <title>@yield('title')</title>
   <meta name="description" content="">
   <meta name="keywords" content="@yield('title')"/>
   <meta name="robots" content="noodp,index,follow" />
   <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
   <meta name="csrf-token" content="{{ csrf_token() }}" />
   <meta name="description" content="@yield('description')" />
   <link rel="canonical" href="{{url()->current()}}" />
   <meta property="og:locale" content="vi_VN" />
   <meta property="og:type" content="article" />
   <meta property="og:title" content="@yield('title')" />
   <meta property="og:description" content="@yield('description')" />
   <meta property="og:url" content="{{url()->current()}}" />
   <meta property="og:site_name" content="ahometh.vn" />
   <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
   <meta property="og:image" content="@yield('image')" />
   <meta property="og:image:secure_url" content="@yield('image')" />
   <meta property="og:image:width" content="598" />
   <meta property="og:image:height" content="333" />
   <meta property="og:image:alt" content="ahome-noi-that" />
   <meta property="og:image:type" content="image/jpeg" />
   <meta name="twitter:card" content="summary_large_image" />
   <meta name="twitter:title" content="@yield('title')" />
   <meta name="twitter:description" content="@yield('description')" />
   <meta name="twitter:image" content="@yield('image')" />
   <!-- Fav Icon -->
   <link rel="icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon">
   <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
   <link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/plugin.scss.css')}}" onload="this.rel='stylesheet'" />
   <link href="{{asset('frontend/css/plugin.scss.css')}}" rel="stylesheet" type="text/css" />
   <link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/base.scss.css')}}" onload="this.rel='stylesheet'" />
   <link href="{{asset('frontend/css/base.scss.css')}}" rel="stylesheet" type="text/css" />
   <link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/ant-land.scss.css')}}" onload="this.rel='stylesheet'" />
   <link href="{{asset('frontend/css/ant-land.scss.css')}}" rel="stylesheet" type="text/css" />
   <link rel="preload" as="script" href="{{asset('frontend/js/jquery-2.2.3.min.js')}}" />
   <script src="{{asset('frontend/js/jquery-2.2.3.min.js')}}" type="text/javascript"></script>
</head>
<body>
   @include('layouts.header.index')
   @yield('content')
   @include('layouts.footer.index')
   <div class="modal-combo">
      <span class="close-combo">&times;</span>
      <div class="modal-combo-content">
         <div class="footer">
            <div class="row text-center">
               <h3>Đăng kí nhận tư vấn</h3>
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
         </div>
      </div>
   </div>
   <!-- <link rel="preload" as="script" href="//bizweb.dktcdn.net/100/328/080/themes/679625/assets/api-jquery.js?1650598682225" />
   <script src="//bizweb.dktcdn.net/100/328/080/themes/679625/assets/api-jquery.js?1650598682225" type="text/javascript"></script> -->
   <script>
      window.Bizweb||(window.Bizweb={}),Bizweb.mediaDomainName="//bizweb.dktcdn.net/",Bizweb.each=function(a,b){for(var c=0;c<a.length;c++)b(a[c],c)},Bizweb.getClass=function(a){return Object.prototype.toString.call(a).slice(8,-1)},Bizweb.map=function(a,b){for(var c=[],d=0;d<a.length;d++)c.push(b(a[d],d));return c},Bizweb.arrayContains=function(a,b){for(var c=0;c<a.length;c++)if(a[c]==b)return!0;return!1},Bizweb.distinct=function(a){for(var b=[],c=0;c<a.length;c++)Bizweb.arrayContains(b,a[c])||b.push(a[c]);return b},Bizweb.getUrlParameter=function(a){var b=RegExp("[?&]"+a+"=([^&]*)").exec(window.location.search);return b&&decodeURIComponent(b[1].replace(/\+/g," "))},Bizweb.uniq=function(a){for(var b=[],c=0;c<a.length;c++)Bizweb.arrayIncludes(b,a[c])||b.push(a[c]);return b},Bizweb.arrayIncludes=function(a,b){for(var c=0;c<a.length;c++)if(a[c]==b)return!0;return!1},Bizweb.Product=function(){function a(a){if("undefined"!=typeof a)for(property in a)this[property]=a[property]}return a.prototype.optionNames=function(){return"Array"==Bizweb.getClass(this.options)?this.options:[]},a.prototype.optionValues=function(a){if("undefined"==typeof this.variants)return null;var b=Bizweb.map(this.variants,function(b){var c="option"+(a+1);return"undefined"==typeof b[c]?null:b[c]});return null==b[0]?null:Bizweb.distinct(b)},a.prototype.getVariant=function(a){var b=null;return a.length!=this.options.length?null:(Bizweb.each(this.variants,function(c){for(var d=!0,e=0;e<a.length;e++){var f="option"+(e+1);c[f]!=a[e]&&(d=!1)}if(d)return void(b=c)}),b)},a.prototype.getVariantById=function(a){for(var b=0;b<this.variants.length;b++){var c=this.variants[b];if(c.id==a)return c}return null},a.name="Product",a}(),Bizweb.money_format=" VND",Bizweb.formatMoney=function(a,b){function f(a,b,c,d){if("undefined"==typeof b&&(b=2),"undefined"==typeof c&&(c="."),"undefined"==typeof d&&(d=","),"undefined"==typeof a||null==a)return 0;a=a.toFixed(b);var e=a.split("."),f=e[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g,"$1"+c),g=e[1]?d+e[1]:"";return f+g}"string"==typeof a&&(a=a.replace(/\./g,""),a=a.replace(/\,/g,""));var c="",d=/\{\{\s*(\w+)\s*\}\}/,e=b||this.money_format;switch(e.match(d)[1]){case"amount":c=f(a,2);break;case"amount_no_decimals":c=f(a,0);break;case"amount_with_comma_separator":c=f(a,2,".",",");break;case"amount_no_decimals_with_comma_separator":c=f(a,0,".",",")}return e.replace(d,c)},Bizweb.OptionSelectors=function(){function a(a,b){return this.selectorDivClass="selector-wrapper",this.selectorClass="single-option-selector",this.variantIdFieldIdSuffix="-variant-id",this.variantIdField=null,this.selectors=[],this.domIdPrefix=a,this.product=new Bizweb.Product(b.product),"undefined"!=typeof b.onVariantSelected?this.onVariantSelected=b.onVariantSelected:this.onVariantSelected=function(){},this.replaceSelector(a),this.initDropdown(),!0}return a.prototype.replaceSelector=function(a){var b=document.getElementById(a),c=b.parentNode;Bizweb.each(this.buildSelectors(),function(a){c.insertBefore(a,b)}),b.style.display="none",this.variantIdField=b},a.prototype.buildSelectors=function(){for(var a=0;a<this.product.optionNames().length;a++){var b=new Bizweb.SingleOptionSelector(this,a,this.product.optionNames()[a],this.product.optionValues(a));b.element.disabled=!1,this.selectors.push(b)}var c=this.selectorDivClass,d=this.product.optionNames(),e=Bizweb.map(this.selectors,function(a){var b=document.createElement("div");if(b.setAttribute("class",c),d.length>1){var e=document.createElement("label");e.htmlFor=a.element.id,e.innerHTML=a.name,b.appendChild(e)}return b.appendChild(a.element),b});return e},a.prototype.initDropdown=function(){var a={initialLoad:!0},b=this.selectVariantFromDropdown(a);if(!b){var c=this;setTimeout(function(){c.selectVariantFromParams(a)||c.selectors[0].element.onchange(a)})}},a.prototype.selectVariantFromDropdown=function(a){var b=document.getElementById(this.domIdPrefix).querySelector("[selected]");return!!b&&this.selectVariant(b.value,a)},a.prototype.selectVariantFromParams=function(a){var b=Bizweb.getUrlParameter("variantid");return null==b&&(b=Bizweb.getUrlParameter("variantId")),this.selectVariant(b,a)},a.prototype.selectVariant=function(a,b){var c=this.product.getVariantById(a);if(null==c)return!1;for(var d=0;d<this.selectors.length;d++){var e=this.selectors[d].element,f=e.getAttribute("data-option"),g=c[f];null!=g&&this.optionExistInSelect(e,g)&&(e.value=g)}return"undefined"!=typeof jQuery?jQuery(this.selectors[0].element).trigger("change",b):this.selectors[0].element.onchange(b),!0},a.prototype.optionExistInSelect=function(a,b){for(var c=0;c<a.options.length;c++)if(a.options[c].value==b)return!0},a.prototype.updateSelectors=function(a,b){var c=this.selectedValues(),d=this.product.getVariant(c);d?(this.variantIdField.disabled=!1,this.variantIdField.value=d.id):this.variantIdField.disabled=!0,this.onVariantSelected(d,this,b),null!=this.historyState&&this.historyState.onVariantChange(d,this,b)},a.prototype.selectedValues=function(){for(var a=[],b=0;b<this.selectors.length;b++){var c=this.selectors[b].element.value;a.push(c)}return a},a.name="OptionSelectors",a}(),Bizweb.SingleOptionSelector=function(a,b,c,d){this.multiSelector=a,this.values=d,this.index=b,this.name=c,this.element=document.createElement("select");for(var e=0;e<d.length;e++){var f=document.createElement("option");f.value=d[e],f.innerHTML=d[e],this.element.appendChild(f)}return this.element.setAttribute("class",this.multiSelector.selectorClass),this.element.setAttribute("data-option","option"+(b+1)),this.element.id=a.domIdPrefix+"-option-"+b,this.element.onchange=function(c,d){d=d||{},a.updateSelectors(b,d)},!0},Bizweb.Image={preload:function(a,b){for(var c=0;c<a.length;c++){var d=a[c];this.loadImage(this.getSizedImageUrl(d,b))}},loadImage:function(a){(new Image).src=a},switchImage:function(a,b,c){if(a&&b){var d=this.imageSize(b.src),e=this.getSizedImageUrl(a.src,d);c?c(e,a,b):b.src=e}},imageSize:function(a){var b=a.match(/thumb\/(1024x1024|2048x2048|pico|icon|thumb|small|compact|medium|large|grande)\//);return null!=b?b[1]:null},getSizedImageUrl:function(a,b){if(null==b)return a;if("master"==b)return this.removeProtocol(a);var c=a.match(/\.(jpg|jpeg|gif|png|bmp|bitmap|tiff|tif)(\?v=\d+)?$/i);if(null!=c){var d=Bizweb.mediaDomainName+"thumb/"+b+"/";return this.removeProtocol(a).replace(Bizweb.mediaDomainName,d).split("?")[0]}return null},removeProtocol:function(a){return a.replace(/http(s)?:/,"")}};
   </script>	
   <link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/jquery.fancybox.min.css')}}" onload="this.rel='stylesheet'" />
   <link rel="stylesheet" href="{{asset('frontend/css/jquery.fancybox.min.css')}}" />
   <link rel="preload" as="script" href="{{asset('frontend/js/jquery.fancybox.min.js')}}" />
   <script src="{{asset('frontend/js/jquery.fancybox.min.js')}}"></script>
   <div class="ajax-load">
      <span class="loading-icon">
            <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
            <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
               <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
            </rect>
            <rect x="8" y="10" width="4" height="10" fill="#333"  opacity="0.2">
               <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
            </rect>
            <rect x="16" y="10" width="4" height="10" fill="#333"  opacity="0.2">
               <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
            </rect>
            </svg>
      </span>
   </div>
   <div class="loading awe-popup">
      <div class="overlay"></div>
      <div class="loader" title="2">
            <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
            <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
               <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
            </rect>
            <rect x="8" y="10" width="4" height="10" fill="#333"  opacity="0.2">
               <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
            </rect>
            <rect x="16" y="10" width="4" height="10" fill="#333"  opacity="0.2">
               <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
            </rect>
            </svg>
      </div>
   </div>
   <link rel="preload" as="script" href="{{asset('frontend/js/appear.js')}}" />
   <script src="{{asset('frontend/js/appear.js')}}" type="text/javascript"></script>
   <link rel="preload" as="script" href="{{asset('frontend/js/main.js')}}" />
   <script src="{{asset('frontend/js/main.js')}}" type="text/javascript"></script>
   <script>
      $(document).ready(function () {
         var modal = $('.modal-combo');
         var btn = $('.popup-register');
         var span = $('.close-combo');

         $('.popup-register').click(function () {
            modal.show();
         });
         span.click(function () {
            modal.hide();
         });
         $(window).on('click', function (e) {
            if ($(e.target).is('.modal-combo')) {
               modal.hide();
            }
         });
         });
   </script>
   <div id="fb-root"></div>
   <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="b5lB7MM3"></script>				
   <div class="support-online">
      <div class="support-content" style="display: none;">
            <a href="tel:{{$setting->phone1}}" class="call-now" rel="nofollow">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <div class="animated infinite zoomIn kenit-alo-circle"></div>
            <div class="animated infinite pulse kenit-alo-circle-fill"></div>
            <span>Gọi ngay: {{$setting->phone1}}</span>
            </a>
            <a class="mes" href="{{$setting->google}}" target="_blank">
            <i class="fa fa-facebook-official" aria-hidden="true"></i>
            <span>Chat qua Messenger</span>
            </a>
            <a class="zalo" href="mailto:{{$setting->email}}" target="_blank">
            <i class="fa fa-envelope"></i>
            <span>{{$setting->email}}</span>
            </a>
            <a class="sms" href="sms:{{$setting->phone1}}">
            <i class="fa fa-comments" aria-hidden="true"></i>
            <span>SMS: {{$setting->phone1}}</span>
            </a>
      </div>
      <a class="btn-support">
            <i class="fa fa-bell"></i>
            <div class="animated infinite zoomIn kenit-alo-circle"></div>
            <div class="animated infinite pulse kenit-alo-circle-fill"></div>
      </a>
   </div>
</body>
</html>