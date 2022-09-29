@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
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
               <h2>{{$title_page}}</h2>
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
                  <strong itemprop="name">{{$title_page}}</strong>
                  <meta itemprop="position" content="2" />
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
<div class="main-content">
   <div class="container margin-top-30" itemscope itemtype="http://schema.org/Blog">
      <div class="row">
         <section class="right-content col-md-9 col-md-push-3 list-blog-page">
            <div class="box-heading hidden">
               <h1 class="title-head">{{$title_page}}</h1>
            </div>
            <section class="list-blogs blog-main">
               <div class="row">
                  @foreach ($blogs as $blog)
                     <div class="col-md-12 col-sm-12 col-xs-12 clearfix blog-color">
                        <div class="blog-item">
                           <div class="blog-featured">
                              <div class="content-featured">
                                 <a class="content-thumb" href="{{route('detailBlog', ['slug'=>$blog->slug])}}">
                                 <img src="{{$blog->image}}" data-lazyload="{{$blog->image}}" alt="{{languageName($blog->title)}}" class="img-responsive center-block" loading="lazy" />
                                 </a>
                                 <span class="tag-date">
                                 <span>{{date('d', strtotime($blog->created_at))}}</span>
                                 <span>Tháng {{date('m', strtotime($blog->created_at))}}</span>
                                 </span>
                              </div>
                           </div>
                           <div class="wrap-entry">
                              <div class="entry-header">
                                 <h2>
                                    <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">
                                    {{languageName($blog->title)}}
                                    </a>
                                 </h2>
                              </div>
                              <div class="entry-content">
                                 <p class="desc">   
                                    {{languageName($blog->description)}}
                                 </p>
                              </div>
                              <div class="entry-footer">
                                 <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" class="button">Xem thêm</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  @endforeach
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="paginate">
                        {{$blogs->links()}}
                     </div>
                  </div>
               </div>
            </section>
         </section>
         @include('layouts.main.rightnav-page')
      </div>
   </div>
</div>
@endsection