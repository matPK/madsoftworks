@extends('layouts.app')

@section('content')
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div id="company-logo">
					<img src="{{asset('img/MAD.jpg')}}" alt="Logo MAD SoftWorks">
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div id="greeting">
					<h1 id="introduction">{{ __('home.web_artisan') }}</h1>
					<div class="know-more">
						<a href="{{ route('about') }}">{{ __('home.know_more') }}</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection