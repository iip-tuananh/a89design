<header class="header">
   {{-- <div class="topbar">
         <div class="container">
         <div class="row">
            <div class="col-md-4 col-sm-4">
               <ul class="top-left-info">
                     <li><a target="_blank" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                     <li><a target="_blank" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                     <li><a target="_blank" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                     <li><a target="_blank" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     <li><a target="_blank" href=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
               </ul>
            </div>
            <div class="col-md-8 col-sm-8 hidden-xs">
               <ul class="top-right-info">
                     <li><i class="fa fa-phone" aria-hidden="true"></i> <a class="a-phone" href="tel:19006750">1900 6750</a></li>
                     <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:support@sapo.vn">support@sapo.vn</a></li>
               </ul>
            </div>
         </div>
         </div>
   </div> --}}
   {{-- @php
   dd(url()->current());
   @endphp --}}
   <div class="header-main">
      <div class="row">
         <div class="col-md-1 col-100-h">
            <button type="button" class="navbar-toggle collapsed visible-sm visible-xs" id="trigger-mobile">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo-wrapper" href="{{route('home')}}">
            <img src="{{$setting->logo}}" data-lazyload="{{$setting->logo}}" alt="{{$setting->company}}" loading="lazy" />	
            </a>
            <div class="mobile-contact visible-sm visible-xs hidden-sm hidden-xs">
                  <button class="btn-callmeback" type="button" onclick="window.location.href='{{route('lienHe')}}'">Liên hệ</button>
            </div>
         </div>
         <div class="col-md-10">
            <nav class="hidden-sm hidden-xs">
                  <ul id="nav" class="nav">
                  <li class="nav-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"><a class="nav-link" href="{{route('home')}}">Trang chủ</a></li>
                  <li class="nav-item {{ Route::currentRouteName() == 'aboutUs' ? 'active' : '' }}"><a class="nav-link" href="{{route('aboutUs')}}">Giới thiệu</a></li>
                  @foreach ($categoryhome as $cate)
                     <li class="nav-item {{url()->current() == route('allListProCate', ['cate'=>$cate->slug]) ? 'active' : ''}} has-mega">
                        <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}" class="nav-link">{{languageName($cate->name)}} <i class="{{count($cate->typeCate) > 0 ? 'fa fa-angle-down' : ''}}" data-toggle="dropdown"></i></a>	
                        @if (count($cate->typeCate) > 0)
                           <div class="mega-content">
                              <div class="level0-wrapper2">
                                    <div class="nav-block nav-block-center">
                                    <ul class="level0">
                                       @foreach ($cate->typeCate as $typeCate)
                                          <li class="level1 parent item">
                                             <h2 class="h4"><a href="{{route('allListProType',['cate'=>$typeCate->cate_slug, 'type'=>$typeCate->slug])}}"><span>{{languageName($typeCate->name)}}</span></a></h2>
                                             @if (count($typeCate->typetwo) > 0)
                                                <ul class="level1">
                                                   @foreach ($typeCate->typetwo as $type)
                                                      <li class="level2"> <a href="{{route('allListTypeTwo', ['cate'=>$type->cate_slug, 'typeCate'=>$type->type_slug, 'typeTwo'=>$type->slug])}}"><span>{{languageName($type->name)}}</span></a> </li>
                                                   @endforeach
                                                </ul>
                                             @endif
                                          </li>
                                       @endforeach
                                    </ul>
                                    </div>
                              </div>
                           </div>
                        @endif	
                     </li>
                  @endforeach
                  <li class="nav-item {{ Route::currentRouteName() == 'listService' ? 'active' : '' }}"><a class="nav-link" href="{{route('listService')}}">Dịch vụ</a></li>
                  <li class="nav-item {{ Route::currentRouteName() == 'allListBlog' || Route::currentRouteName() == 'listCateBlog' ? 'active' : '' }}">
                     <a href="{{route('allListBlog')}}" class="nav-link">Tin tức <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>
                     <ul class="dropdown-menu">
                        @foreach ($blogCate as $cate)
                        <li class="nav-item-lv2">
                              <a class="nav-link" href="{{route('listCateBlog', ['slug'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
                        </li>
                        @endforeach			
                     </ul>
                  </li>
                  <li class="nav-item {{ Route::currentRouteName() == 'lienHe' ? 'active' : '' }}"><a class="nav-link" href="{{route('lienHe')}}">Liên hệ</a></li>
                  </ul>
            </nav>
         </div>
         <div class="col-md-1 hidden-sm hidden-xs">
            <div class="my-2 my-lg-0">
                  <ul class="list-inline main-nav-right">
                  <li class="list-inline-item list-account list-search">
                     <div class="mobile-search">
                        <i class="fa fa-search"></i>
                     </div>
                     <div class="top-categories-search-main">
                        <div class="top-categories-search">
                              <div class="search_form">
                              <form class="input-group search-bar search_form" action="{{route('search_result')}}" method="post" role="search">	
                                 @csrf	
                                 <input type="search" name="keyword" value="" placeholder="Tìm kiếm..." class="input-group-field st-default-search-input search-text" autocomplete="off">
                                 <span class="input-group-btn">
                                 <button type="submit" class="btn icon-fallback-text">
                                 <i class="fa fa-search"></i>
                                 </button>
                                 </span>
                              </form>
                              </div>
                        </div>
                     </div>
                  </li>
                  {{-- <li class="header-contact">
                     <button class="btn-callmeback" type="button" onclick="window.location.href='/lien-he'">Liên hệ ngay</button>
                  </li> --}}
                  </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="menu_mobile max_991 hidden-md hidden-lg" style="display:none;">
         <ul class="ul_collections">
         <li class="level0 level-top parent">
            <a href="{{route('home')}}">Trang chủ</a>
         </li>
         <li class="level0 level-top parent">
            <a href="{{route('aboutUs')}}">Giới thiệu</a>
         </li>
         @foreach ($categoryhome as $cate)
         <li class="level0 level-top parent">
            <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
            @if (count($cate->typeCate) > 0)
               <i class="fa fa-angle-down"></i>
               <ul class="level0" style="display:none;">
                  @foreach ($cate->typeCate as $typeCate)
                     <li class="level1">
                           <a href="{{route('allListProType',['cate'=>$typeCate->cate_slug, 'type'=>$typeCate->slug])}}"><span>{{languageName($typeCate->name)}}</span></a>
                           @if (count($typeCate->typetwo) > 0)
                           <i class="fa fa-angle-down"></i>
                           <ul class="level2" style="display:none;">
                              @foreach ($typeCate->typetwo as $type)
                                 <li class="nav-item-lv3">
                                    <a class="nav-link" href="{{route('allListTypeTwo', ['cate'=>$type->cate_slug, 'typeCate'=>$type->type_slug, 'typeTwo'=>$type->slug])}}">{{languageName($type->name)}}</a>
                                 </li>
                              @endforeach
                           </ul>
                           @endif
                     </li>
                  @endforeach
               </ul>
            @endif
         </li>
         @endforeach
         <li class="level0 level-top parent">
            <a href="{{route('listService')}}">Dịch vụ</a>
         </li>
         <li class="level0 level-top parent">
            <a href="{{route('allListBlog')}}">Tin tức</a>
            <i class="fa fa-angle-down"></i>
            <ul class="level0" style="display:none;">
               @foreach ($blogCate as $cate)
               <li class="level1"> 
                     <a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}"><span>{{languageName($cate->name)}}</span></a>
               </li>
               @endforeach
            </ul>
         </li>
         <li class="level0 level-top parent">
            <a href="{{route('lienHe')}}">Liên hệ</a>
         </li>
         <li class="level0 level-top parent">
            <a href="/search"><i class="ion ion-ios-search"></i> Tìm kiếm</a>
         </li>
         </ul>
   </div>
</header>