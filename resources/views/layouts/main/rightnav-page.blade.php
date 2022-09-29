<aside class="left left-content col-md-3 col-md-pull-9">
   <aside class="aside-item collection-category blog-category">
      <div class="heading">
         <h2 class="title-head"><span><i class="ion ion-ios-list"></i> Danh mục bài viết</span></h2>
      </div>
      <div class="aside-content">
         <nav class="nav-category  navbar-toggleable-md" >
            <ul class="nav navbar-pills">
               <li class="nav-item "><a class="nav-link" href="{{route('home')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Trang chủ</a></li>
               <li class="nav-item "><a class="nav-link" href="{{route('aboutUs')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Giới thiệu</a></li>
               @foreach ($categoryhome as $cate)
                  <li class="nav-item ">
                     <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}" class="nav-link"><i class="fa fa-caret-right" aria-hidden="true"></i> {{languageName($cate->name)}}</a>
                     @if (count($cate->typeCate) > 0)
                        <i class="fa fa-angle-down" ></i>
                        <ul class="dropdown-menu">
                           @foreach ($cate->typeCate as $typeCate)
                           <li class="dropdown-submenu nav-item ">
                              <a class="nav-link" href="{{route('allListProType',['cate'=>$typeCate->cate_slug, 'type'=>$typeCate->slug])}}">{{languageName($typeCate->name)}}</a>
                              @if (count($typeCate->typetwo) > 0)
                              <i class="fa fa-angle-down" ></i>
                              <ul class="dropdown-menu">
                                 @foreach ($typeCate->typetwo as $type)
                                 <li class="dropdown-submenu nav-item ">
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
               <li class="nav-item "><a class="nav-link" href="{{route('listService')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Dịch vụ</a></li>
               <li class="nav-item">
                  <a href="{{route('allListBlog')}}" class="nav-link"><i class="fa fa-caret-right" aria-hidden="true"></i> Tin tức</a>
                  <i class="fa fa-angle-down" ></i>
                  <ul class="dropdown-menu">
                     @foreach ($blogCate as $cate)
                     <li class="nav-item ">
                        <a class="nav-link" href="{{route('listCateBlog', ['slug'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
                     </li>
                     @endforeach
                  </ul>
               </li>
               <li class="nav-item "><a class="nav-link" href="{{route('lienHe')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Liên hệ</a></li>
            </ul>
         </nav>
      </div>
   </aside>
   <div class="aside-item">
      <div class="heading">
         <h2 class="title-head"><a href="#"><i class="ion ion-ios-images"></i> Tin nổi bật</a></h2>
      </div>
      <div class="list-blogs">
         @foreach ($hotBlogs as $blog)
            <article class="blog-item blog-item-list clearfix">
               <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" class="panel-box-media">
               <img src="{{$blog->image}}" data-lazyload="{{$blog->image}}" width="70" height="70" alt="{{languageName($blog->title)}}" loading="lazy" />
               </a>
               <div class="blogs-rights">
                  <h3 class="blog-item-name"><a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a></h3>
                  <div class="post-time">{{date('d/m/Y', strtotime($blog->created_at))}}</div>
               </div>
            </article>
         @endforeach
      </div>
   </div>
</aside>