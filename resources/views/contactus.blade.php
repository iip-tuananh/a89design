@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
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
				<h2>Liên hệ</h2>
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
				<strong itemprop="name">Liên hệ</strong>
				</li>
			</ul>
		</div>
	</div>
	</div>
</section>
<div class="main-content">
	<div class="container contact margin-bottom-20 margin-top-30">
		<div class="row">
		<div class="col-md-12">
			<div class="box-maps margin-bottom-20">
				{!!$setting->iframe_map!!}
			</div>
		</div>
		<div class="col-md-4 col-md-push-8">
			<div class="widget-item info-contact in-fo-page-content">
				<h1 class="title-head">Thông tin liên hệ</h1>
				<span class="text-center block"></span>
				<!-- End .widget-title -->
				<ul class="widget-menu contact-info-page">
					<li><i class="fa fa-map-marker" aria-hidden="true"></i> {{$setting->address1}}</li>
					@if ($setting->address2)
					<li><i class="fa fa-map-marker" aria-hidden="true"></i> {{$setting->address2}}</li>
					@endif
					<li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a></li>
					@if ($setting->phone2)
					<li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:{{$setting->phone2}}">{{$setting->phone2}}</a></li>
					@endif
					<li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:{{$setting->email}}">{{$setting->email}}</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-8 col-md-pull-4">
			<div class="page-contact">
				<div id="login">
					<h3 class="title-head">Gửi thông tin</h3>
					<span class="text-center margin-bottom-10 block">Bạn hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn sau khi nhận được.</span>
					<form accept-charset="utf-8" action="/contact" id="contact" method="post">
						@csrf
					<div class="form-signup clearfix">
						<div class="row">
							<div class="col-sm-6 col-xs-12">
								<fieldset class="form-group">
								<label>Họ tên<span class="required">*</span></label>
								<input type="text" name="name" id="name" class="form-control  form-control-lg" data-validation-error-msg= "Không được để trống" data-validation="required" required />
								</fieldset>
							</div>
							<div class="col-sm-6 col-xs-12">
								<fieldset class="form-group">
								<label>Email<span class="required">*</span></label>
								<input type="email" name="email" data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation-error-msg= "Email sai định dạng" id="email" class="form-control form-control-lg" required />
								</fieldset>
							</div>
							<div class="col-sm-12 col-xs-12">
								<fieldset class="form-group">
								<label>Điện thoại<span class="required">*</span></label>
								<input type="tel" name="phone" data-validation="tel" data-validation-error-msg= "Không được để trống" id="tel" class="number-sidebar form-control form-control-lg" required />
								</fieldset>
							</div>
							<div class="col-sm-12 col-xs-12">
								<fieldset class="form-group">
								<label>Nội dung<span class="required">*</span></label>
								<textarea name="mess" id="comment" class="form-control form-control-lg" rows="5" data-validation-error-msg= "Không được để trống" data-validation="required" required></textarea>
								</fieldset>
								<div class="pull-xs-left" style="margin-top:20px;">
								<button type="submit" class="btn btn-blues btn-style btn-style-active">Gửi tin nhắn</button>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
<style>
	.box-maps{height: 350px;overflow: hidden;}
	.box-maps iframe{height:350px;width:100%;}
	footer.footer-other{margin-top:0;}
	.search-more{margin-top:0;}
</style>
@endsection