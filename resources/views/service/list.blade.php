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
            <h1 class="hidden title-head margin-top-0">{{$title_page}}</h1>
            <div class="list-service hidden-xs" >
                @foreach ($services as $key=>$service)
                @if ($key % 2 ==0)
                    <div class="row" >
                        <div class="col-md-6 col-sm-6 ">
                            <div class="service-info">
                                <h4>{{$service->name}}</h4>
                                {!!languageName($service->description)!!}
                                <a href="{{route('serviceDetail', ['slug'=>$service->slug])}}">Xem chi tiết <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 ">
                            <img src="{{$service->image}}" alt="{{$service->name}}">
                        </div>
                    </div>
                @else
                    <div class="row" >
                        <div class="col-md-6 col-sm-6 ">
                            <img src="{{$service->image}}" alt="{{$service->name}}">
                        </div>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="service-info">
                                <h4>{{$service->name}}</h4>
                                {!!languageName($service->description)!!}
                                <a href="{{route('serviceDetail', ['slug'=>$service->slug])}}">Xem chi tiết <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endif
                @endforeach
            </div>
            <div class="list-service hidden-md hidden-lg hidden-sm" >
                @foreach ($services as $key=>$service)
                    <div class="row" >
                        <div class="col-md-6 col-sm-6 ">
                            <img src="{{$service->image}}" alt="{{$service->name}}">
                        </div>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="service-info">
                                <h4>{{$service->name}}</h4>
                                {!!languageName($service->description)!!}
                                <a href="{{route('serviceDetail', ['slug'=>$service->slug])}}">Xem chi tiết <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
    </div>
</div>
@endsection