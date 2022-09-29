@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
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
				<h2>{{languageName($blog_detail->title)}}</h2>
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
				{{-- <strong itemprop="name">{{languageName($blog_detail->title)}}</strong> --}}
				<a itemprop="item" href="{{route('listCateBlog', ['slug'=>$blog_detail->category])}}" title="{{languageName($blog_detail->cate->name)}}">
					<span itemprop="name">{{languageName($blog_detail->cate->name)}}</span>
				</a>
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
				<h1 class="title-head">{{languageName($blog_detail->title)}}</h1>
			</div>
			<section class="list-blogs blog-main">
				{!!languageName($blog_detail->content)!!}
			</section>
		</section>
		@include('layouts.main.rightnav-page')
	</div>
	</div>
</div>
@endsection