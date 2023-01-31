@extends('layouts.l2templatefolder.l2templatepages')

<meta name="csrf-token" content="{{ csrf_token() }}">
@section("title" , "Страница описания!")
@section("page-title" , "Регистрация")
@section('inside_info')
<script src="{{asset('/js/registration.js') }}"></script>
	<div style="margin: auto;"class="contentHomeReg">

	<div class="message">


	</div>
	<div class="alert">
  		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  		<strong>{{ __('messages.error') }} </strong> {{ __('messages.error_alert') }}
	</div>
		<div class="formGroup">
			<p style="color:black;float: left;">{{ __('messages.login') }}</p>
				<input type="text" id="login" placeholder="{{ __('messages.login') }}">
			<p style="color:black;float: left;    margin-top: 2%;">{{ __('messages.email') }}</p>
				<input type="text" id="email" placeholder="{{ __('messages.email') }}">
			<p style="color:black;float: left;    margin-top: 2%;">{{ __('messages.pass') }}</p>
				<input type="password" id="pass" placeholder="{{ __('messages.pass') }}">
			<p style="color:black;float: left;    margin-top: 2%;">{{ __('messages.listserver') }}</p>
				<select id="selectServer">
					@foreach ($listServerName as $user)
						<option value={{ $user['1'] }}>{{ $user['0'] }}</option>
					@endforeach
				</select>
				<div class="allContent">
					<button onclick="reg()">{{ __('messages.reg') }}</button>
				<div>
		</div>
		
	</div>

@endsection