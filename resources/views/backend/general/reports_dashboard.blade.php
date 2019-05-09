@extends('layout.master') 
@section('title') DPR Access | Reports
@endsection
 
@section('pagestyles')
@endsection
 
@section('content')
<div class="wrapper">
	@include('partials.backend_top_nav_all')
	@include('partials.backend_aside_all')

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1 id="caps">
				REPORTS DASHBOARD
			</h1>
		</section>

		<reports-controller></reports-controller>

	</div>
	<!-- /.content-wrapper -->
	@include('partials.base_footer')
</div>
@endsection
 
@section('pagescript')
@endsection
 {{-- permit and consent --}}
