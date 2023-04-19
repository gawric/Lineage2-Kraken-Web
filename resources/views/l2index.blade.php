@extends('layouts.l2templatefolder.l2template')

@section("title" , "Главная")
@section('content')
<!--
<main class="content">
			<div class="flex-s block">
				<div class="newsBlock">
					<h2 class="content-title white-title">News <a href="#" class="more"><span></span><span></span></a></h2>
					<div class="newsFeed flex-s">
						<a href="#" class="news" style="background-image: url(images/news-img_1.jpg)">
							<div class="news-info">
								<h3><span>[Hot]</span> Upcoming 22.10 x50 Nightmare</h3>
								<div class="date">10.09</div>
							</div>	
						</a>
						<a href="#" class="news" style="background-image: url(images/news-img_2.jpg)">
							<div class="news-info">
								<h3><span>[Update]</span> New Fafurion Boss
									update</h3>
								<div class="date">10.09</div>
							</div>	
						</a>
						<a href="#" class="news" style="background-image: url(images/news-img_3.jpg)">
							<div class="news-info">
								<h3><span>[Event]</span> Social Media Events</h3>
								<div class="date">10.09</div>
							</div>	
						</a>
					</div>
				</div>
				<div class="eventsBlock">
					<h2 class="content-title white-title">Events <a href="#" class="more"><span></span><span></span></a></h2>
	
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<a href="" class="swiper-link">
									<img src="images/slider-img.jpg" alt="">
									<p>Gift for news players</p>
								</a>
							</div>
							<div class="swiper-slide">
								<a href="" class="swiper-link">
									<img src="images/slider-img.jpg" alt="">
									<p>Gift for news players</p>
								</a>
							</div>
							<div class="swiper-slide">
								<a href="" class="swiper-link">
									<img src="images/slider-img.jpg" alt="">
									<p>Gift for news players</p>
								</a>
							</div>
							<div class="swiper-slide">
								<a href="" class="swiper-link">
									<img src="images/slider-img.jpg" alt="">
									<p>Gift for news players</p>
								</a>
							</div>
						</div>
			
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>
			<div class="block blockBorder">
				<h2 class="content-title dark-title">Find out our streamers</h2>
				<div class="flex streamBlock">
					<a href="" class="twitchBlock">
						<img src="images/twitch-icon.png" alt="Twitch">
					</a>
					<a href="" class="youtubeBlock">
						<img src="images/youtube-icon.png" alt="Youtube">
					</a>
				</div>
			</div>
			<div class="contentHome">
				<h1>Content</h1>
				<h3>Check out what makes "Giran" special</h3>
				<a href="" class="block-a blockPvp">
					<div class="buttonPlay"><span></span></div>
					Intense PvP
				</a>
				<div class="flex">
					<div class="blockExp">
						<a href="" class="block-a blockSolo">
							<div class="buttonPlay buttonPlay-small"><span></span></div>
							Good  for solo players
						</a>
						<a href="" class="block-a blockRaids">
							<div class="buttonPlay buttonPlay-small"><span></span></div>
							Best Raid Bosses
						</a>
					</div>
					<a href="" class="block-a blockUpdate">
						<div class="buttonPlay"><span></span></div>
						Best Updates
					</a>
				</div>
				<div class="allContent">
					<a href="" class="button button-not-bg">See all content</a>
				</div>
			</div>
		</main>-->

		<main class="content">
			<div class="main-content">
			<h1 style="margin: auto; padding-left:0px" class="page-title"><p style="color:black;">{{ __('messages.home_title') }}</p></h1>
			<div style="margin: auto;"class="contentHomeReg">
				<div>
					<p style="color:black; float:left;">{{ __('messages.home_description') }}</p>
					<p style="color:black; float:left;">{{ __('messages.home_description1') }}</p>

					<button class="btn" onclick="location.href='https://github.com/gawric/Lineage2-Kraken-Web'" style="width:100%"><i class="fa fa-download"></i>  {{ __('messages.home_button') }}</button>
				</div>
			</div>
		</main><!-- .content -->
@endsection
