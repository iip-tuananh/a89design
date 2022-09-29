@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
@endsection
@section('content')
<section class="bread-crumb">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <div class="bread-h3">
               <h2>{{$title}}</h2>
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
                  <strong itemprop="name">{{$title}}</strong>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
<div class="main-content">
   <div class="container margin-top-20">
      <div class="row">
         <section class="main_container collection col-md-12">
            <h1 class="hidden title-head margin-top-0">{{$title}}</h1>
            <div class="category-products products">
               <section class="products-view products-view-grid">
                  <div class="row">
                     @foreach ($list as $product)
                     <div class="col-md-4 col-sm-6 col-xs-6 col-100">
                        @include('layouts.product.item', ['product'=>$product])
                     </div>
                     @endforeach
                  </div>
                  <div class="text-xs-right">
                     <nav class="text-center">
                        {{$list->links()}}
                     </nav>
                  </div>
               </section>
            </div>
         </section>
      </div>
   </div>
</div>
@endsection