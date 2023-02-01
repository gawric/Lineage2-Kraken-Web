@extends('layouts.l2templatefolder.l2templatepages')

<meta name="csrf-token" content="{{ csrf_token() }}">
@section("title" , "Страница описания!")
@section("page-title" , "Регистрация")
@section('inside_info')
<script src="{{asset('/js/registration.js') }}"></script>
<script src="{{asset('/js/alertsMessages.js') }}"></script>
<script>
	function getInfo(){
		var login = $('#login').val();
    	var email = $('#email').val();
    	var pass = $('#pass').val();
		var pass_confirmed = $('#pass_confirmed').val();
    	var select = document.querySelector('#selectServer');
		var server_id = select.selectedIndex ;
		reg(login , email , pass  , pass_confirmed, server_id)
	}
</script>
	<h1 class="page-title"><p style="color:black;">{{ __('messages.reg') }}</p></h1>
	<div style="margin: auto;"class="contentHomeReg">

	<div class="message">


	</div>
	<div id="show_alert">
  		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  		<strong id="text_alert"></strong>
	</div>
		<div class="formGroup">
			<p style="color:black;float: left;">{{ __('messages.login') }}</p>
				<input type="text" id="login" placeholder="{{ __('messages.login') }}" required>
			<p style="color:black;float: left;    margin-top: 2%;">{{ __('messages.email') }}</p>
				<input type="text" id="email" placeholder="{{ __('messages.email') }}" required>
			<p style="color:black;float: left;    margin-top: 2%;">{{ __('messages.pass') }}</p>
				<input type="password" id="pass" placeholder="{{ __('messages.pass') }}" required>
				<p style="color:black;float: left;    margin-top: 2%;">{{ __('messages.pass_confirm') }}</p>
				<input type="password" id="pass_confirmed" placeholder="{{ __('messages.pass_confirm') }}" required>
			<p style="color:black;float: left;    margin-top: 2%;">{{ __('messages.listserver') }}</p>
				<select id="selectServer">
					@foreach ($listServerName as $user)
						<option value={{ $user['1'] }}>{{ $user['0'] }}</option>
					@endforeach
				</select>
				<div class="allContent">
					<button onclick="getInfo()">{{ __('messages.reg') }}</button>
				<div>
		</div>
		
	</div>

@endsection