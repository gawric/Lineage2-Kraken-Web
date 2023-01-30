@extends('layouts.l2templatefolder.l2templatepages')

@section("title" , "Страница описания!")
@section("page-title" , "Регистрация")
@section('inside_info')
	<div class="contentHomeReg">
		<div class="formGroup">
						<p>Field content:</p>
						<input type="text" placeholder="{{ __('messages.login') }}">
						<p>Field content:</p>
						<input type="text" placeholder="{{ __('messages.email') }}">
						<p>Field content:</p>
						<input type="password" placeholder="{{ __('messages.pass') }}">
						
						<div class="allContent"><button>{{ __('messages.reg') }}</button><div>
		</div>
		
	</div>
	<a href="#" class="news" style="background-image: url(images/news-img_2.jpg)">
							<div class="news-info">
								<h3><span>[Update]</span> New Fafurion Boss
									update</h3>
								<div class="date">10.09</div>
							</div>	
						</a>
@endsection