@extends('layouts.l2templatefolder.l2template')


@section('content')
<main class="content">
			<h1 class="page-title">@yield('page-title')</h1>
			<div class="main-content">
				@yield('inside_info')
			</div>
		</main><!-- .content -->
@endsection