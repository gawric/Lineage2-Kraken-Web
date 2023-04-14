@extends('layouts.l2templatefolder.l2templatepages')

<meta name="csrf-token" content="{{ csrf_token() }}">
@section("title" , "Kraken-Web Скачать иру Lineage 2")
@section("page-title" , "Скачать игру")
@section('inside_info')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
  text-align: left;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}

</style>


	<h1 style="margin: auto; padding-left:0px" class="page-title"><p style="color:black;">{{ __('messages.download_title') }}</p></h1>
	<div style="margin: auto;"class="contentHomeReg">
	<div>
		<p style="color:black; float:left;">Скачать игру через торрент клиент самый лучший вариант!</p>
		<button class="btn" style="width:100%"><i class="fa fa-download"></i>  {{ __('messages.download_torrent') }}</button>
	</div>
	
		<div style="margin-top:3%;">
			<div style="display: inline; float:left;"><button class="btn"><i class="fa fa-download"></i> {{ __('messages.download_path') }}</button></div>
				<div style="display: inline;"><button class="btn"><i class="fa fa-download"></i> {{ __('messages.download_updater') }}</button></div>
			</div>
		</div>
		
	</div>
@endsection