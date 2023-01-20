<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
	<title>@yield('title')</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="{{asset('/css/swiper.min.css') }}" rel="stylesheet">
	<link href="{{asset('/css/style.css') }}" rel="stylesheet">
	<link href="{{asset('/css/mobile_style.css') }}" rel="stylesheet">
</head>

<body>
	<div class="socBlock">
		<a href="" class="fb"></a>
		<a href="" class="dc"></a>
	</div>
	<div class="toTop buttonTop">
		TOP
	</div>
	
	<div class="topPanel flex-c">
		<div class="topButton menuButton" data-class="nav">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<a href="/" class="topPanel-logo"><img src="images/logo-white.png" alt="Logo"></a>
		<nav class="nav flex-c">
			<div class="topPanel-menu flex-c">
				<ul class="menu flex">
					<li><a href="#">{{ __('messages.home') }}</a></li>
					<li><a href="#">{{ __('messages.static') }}</a></li>
					<li>
						<a data-class="m_3" class="menu-a">Game</a>
						<ul class="dropDown-menu m_3">
							<li><a href="">Statistic</a></li>
							<li><a href="">Guides</a></li>
							<li><a href="">Support</a></li>
							<li><a href="">Characters & Races</a></li>
						</ul>
					</li>
					<li>
						<a data-class="m_4" class="menu-a">Community</a>
						<ul class="dropDown-menu m_4">
							<li><a href="">Statistic</a></li>
							<li><a href="">Guides</a></li>
							<li><a href="">Support</a></li>
							<li><a href="">Characters & Races</a></li>
						</ul>
					</li>
					<div class="container">
				</ul>
			</div>
			<div class="topPanel-button flex-c">

			@if(session()->get('locale') == 'ru')         
				<img id="count" src="{{asset('/images/rus.svg') }}" width="50" height="60">    
			@else
				<img id="count" src="{{asset('/images/eng.svg') }}" width="50" height="60">
			@endif

		  	<select class="loginButton bright changeLang">
			  	<option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>Russia</option>
			  	<option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
		  	</select>
	
				<a href="#modal-login" class="loginButton bright open_modal">Log In</a>
				<a href="" class="downloadButton bright">Download</a>
			</div>
		</nav>
		<div class="topSocBlock socBlock">
			<a href="" class="fb"></a>
			<a href="" class="dc"></a>
		</div>
	</div><!--topPanel-->
	<div class="wrapper">
		<header class="header">
			<div class="logo"><a href="/"><img src="images/logo-dark.png" alt="Logo"></a></div>
			<div class="serverBlock flex">
				<div class="server server_1">
					<p>X50 Nightmare</p>
					<span>Upcoming 22.10</span>
				</div>
				<div class="server server_2">
					<p>X300 Paradise</p>
					<span>9864</span>
				</div>
				<div class="server server_3">
					<p>X1000 Warland</p>
					<span>7853</span>
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
					<a href="/"><img src="images/logo-white.png" alt="Logo"></a>
				</div>
				<ul class="flex-c-c">
					<li><a href="">Terms of service</a></li>
					<li><a href="">Privacy policy</a></li>
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

	<script src="{{asset('/js/jquery-2.1.4.min.js') }}"></script>
	<script src="{{asset('/js/swiper.min.js') }}"></script>
	<script src="{{asset('/js/main.js') }}"></script>

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
</body>
</html>