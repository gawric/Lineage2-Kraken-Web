@extends('layouts.l2templatefolder.l2templatepages')

@section("title" , "Регистрация пользователя")
@section("page-title" , "Регистрация")
@section('inside_info')
<script src="{{ asset('js/registration.js') }}"></script>
<script src="{{ asset('js/alertsMessages.js') }}"></script>
<script>
	function getInfo(){
		var login = $('#login').val();
    	var email = $('#email').val();
    	var pass = $('#pass').val();
		var pass_confirmed = $('#pass_confirmed').val();
    	var select = document.querySelector('#selectServer');
		var server_id = select.value;
		reg(login , email , pass  , pass_confirmed, server_id)
	}
</script>

<style>
a {
  color: dodgerblue;
}

</style>



	<h1 style="margin: auto;padding-left:0px;" class="page-title"><p style="color:black;">{{ __('messages.reg') }}</p></h1>
	<div style="margin: auto;"class="contentHomeReg">

	<div class="message"></div>

	<div id="show_alert">
  		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  		<strong id="text_alert"></strong>
	</div>
	<div style="float: left;" id="loading_reg"></div>
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
				<p style="color:black;float:left; font-size:12px;">{{ __('validation.text_policy_agree') }} <a href="{{ route('privacypolicy') }}">{{ __('messages.privacy_policy_reg_title') }}</a>.&  <a href="{{ route('useragreement') }}">{{ __('messages.useragreement_reg_title') }}</a>.</p>
					<button onclick="getInfo()">{{ __('messages.reg') }}</button>
				<div>
		</div>

	</div>

@endsection
