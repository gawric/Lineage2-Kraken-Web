<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
	<title>@yield('title')</title>
	<meta name="keywords" content="" />
	<meta name="enot" content={{ config('enotio.enot_head_id') }}>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link href="{{ asset('css/swiper.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/mobile_style.css') }}" rel="stylesheet">
</head>

<body>
	<div class="socBlock">
		<a href="" class="fb"></a>
		<a href="" class="dc"></a>
	</div>
	<div class="toTop buttonTop">

	</div>

	<div class="topPanel flex-c">
		<div class="topButton menuButton" data-class="nav">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<a href="{{ route('home') }}" class="topPanel-logo"><img src="images/logo-white.png" alt="Logo"></a>
		<nav class="nav flex-c">
			<div class="topPanel-menu flex-c">
				<ul class="menu flex">
					<li><a href="{{ route('home') }}">{{ __('messages.home') }}</a></li>
					<li><a href="/statistic">{{ __('messages.static') }}</a></li>
					<li><a href="/registration">{{ __('messages.reg') }}</a></li>
					<li>
					<!--	<a data-class="m_4" class="menu-a">Community</a>
						<ul class="dropDown-menu m_4">
							<li><a href="">Statistic</a></li>
							<li><a href="">Guides</a></li>
							<li><a href="">Support</a></li>
							<li><a href="">Characters & Races</a></li>
						</ul>-->
					</li>
					<div class="container">
				</ul>
			</div>
			<div class="topPanel-button flex-c">

			@if(session()->get('locale') == 'ru')
				<img id="count" src="{{ asset('/images/rus.svg') }}" width="50" height="60">
			@else
				<img id="count" src="{{ asset('/images/eng.svg') }}" width="50" height="60">
			@endif

		  	<select class="loginButton bright changeLang">
			  	<option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>Russia</option>
			  	<option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
		  	</select>
				<a href="/login" class="loginButton bright">{{ __('messages.enter_lk') }}</a>
				<a href="{{ route('download') }}" class="downloadButton bright">{{ __('messages.download_game') }}</a>
			</div>
		</nav>
		<div class="topSocBlock socBlock">
			<a href="" class="fb"></a>
			<a href="" class="dc"></a>
		</div>
	</div><!--topPanel-->
	<div class="wrapper">
		<header class="header">
			<div class="logo"><a href="{{ route('home') }}"><img src="images/logo-dark.png" alt="Logo"></a></div>
			<div class="serverBlock flex">
				<div id="loadStatus" class="server">
					<div id="loading"></div>
					<div><h10 id="loadingText">Загрузка статуса!</h10></div>

				</div>
			</div>
			<div class="stars">
				<span class="star_1"></span>
				<span class="star_2"></span>
				<span class="star_3"></span>
				<span class="star_4"></span>
				<span class="star_5"></span>
				<span class="star_6"></span>
				<span class="star_7"></span>
				<span class="star_8"></span>
			</div>
		</header><!-- .header-->
	@yield('content')
	</div><!-- .wrapper -->
	<footer class="footer">
		<div class="footerTopBlock">
			<div class="container">
				<div class="footerLogo">
					<a href="{{ route('home') }}"><img src="images/logo-white.png" alt="Logo"></a>
				</div>
				<ul class="flex-c-c">
					<li><a href="{{ route('privacypolicy') }}">{{ __('messages.privacy_policy_title') }}</a></li>
					<li><a href="{{ route('useragreement') }}">{{ __('messages.useragreement_title') }}</a></li>
				</ul>
			</div>
		</div><!--footerTopBlock-->
		<div class="footerBottomBlock">
			<p><span>© 2019</span> Giran: Lineage 2</p>
			<p>This server is a test option of the game lineage 2 and is intended only for the acquaintance of players.</p>
			<p>All rights owned by NCSOFT</p>
		</div><!--footerBottomBlock-->
	</footer><!-- .footer -->

	<div id="modal-login" class="modal_div t-center">
		<div class="modal_close">
			<span></span>
			<span></span>
		</div><!--modal_close-->
		<h1>Login</h1>
		<a href="#"><img src="images/facebook-button.png" alt=""></a>
		<div class="or">Or</div>
		<form class="form-width">
			<p><input type="text" placeholder="Login"></p>
			<p><input type="password" placeholder="Password"></p>
			<p><button>ok</button></p>
		</form>
		<div class="formlinks">
			<p><a href="">Forgot your password ?</a></p>
			<p>Dont`t have an account ? <a href="" class="reg">Register</a></p>
		</div>
	</div>
	<div id="overlay"></div>

	<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
	<script src="{{ asset('js/swiper.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>

	<script type="text/javascript">
    		var url = "{{ route('changeLang') }}";
    		$(".changeLang").change(function(){
				change($(this).val())
        		window.location.href = url + "?lang="+ $(this).val();
    		});

			function change(val){
				//console.log(val);
				if(val == "en"){
					changeImg("{{asset('/images/eng.svg') }}");
				}
				else{
					changeImg("{{asset('/images/rus.svg') }}")
				}
			}
			function changeImg(imagePath){
				document.getElementById("count").src=imagePath;
			}

	</script>
	<script>
  			$(document).ready(function () {
    			$.ajaxSetup({
        		headers: {
            		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        		},
				dataType: "json",
				error: function (request, status, statusError) {
					//console.log(status)
					//console.log(statusError)
        			textError(request.responseText , statusError);
    			}
    		});

      		$.get('status/server', function (data) {
				//console.log(Object.keys(data).length);
				var index2 = 0;
				if(!isEmpty(data)){
						$.each(data, function(index, value) {
							updateDiv(index, value , index2);
							index2++;
						});
				}
				else{
					console.log('нет данных status/server')
				}

				hideLoad(index2);

      		});
  });



   function isEmpty(data){
	return jQuery.isEmptyObject(data);
   }

  	function textError(textError , statusError){
		$("#loadingText").text("Ошибка загрузки");
	}
    function hideLoad(index2){
		if(index2 > 0){
			$('#loadStatus').hide();
		}
	}
  	function updateDiv(index, value , index2){
		if(index2 == 0){
			addChild(value.id , "server" , "server_1" , value.name , value.count_online , value.status);
		}
		else if(index2 == 1){
			addChild(value.id , "server" , "server_2" , value.name , value.count_online , value.status);
		}
		else if(index2 == 2){
			addChild(value.id , "server" , "server_3" , value.name , value.count_online , value.status);
		}

  	}

  function addChild(server_id , server , serverindex , servername , countusers , status_server){
	var id_value = $('.serverBlock').append( "<div id="+server_id+" class="+server+"><p>"+servername+"</p><span>"+countusers+"</span><br><br><p>"+status_server+"</p></div>" );
	$("#"+server_id).addClass(serverindex);
  }
	</script>
</body>
</html>
