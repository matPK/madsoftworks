@extends('layouts.app')

@section('content')
<div id="about" class="container">
	<article class="dark-card">
		<h2>{{ __('about.what_is_it') }}</h2>
		<p>{{ __('about.answer') }}</p>
		<span>- Matheus A. Dardenne</span>
	</article>
	<section class="dark-card">
		<h2>{{ __('about.what_technologies') }}</h2>
		<div class="row justify-content-center">
			<div class="text-center col-12 col-sm-6 col-md-3 my-3">
				<div class="technology-card">
					<a href="https://laravel.com/">
						<img src="{{ asset('img/about/logo-laravel.png') }}" alt="Laravel Logotype">
						{{ __('Laravel') }}
					</a>
				</div>
			</div>
			<div class="text-center col-12 col-sm-6 col-md-3 my-3">
				<div class="technology-card">
					<a href="https://vuejs.org/">
						<img src="{{ asset('img/about/logo-vue.png') }}" alt="Vue.js Logotype">
						{{ __('Vue.js') }}
					</a>
				</div>
			</div>
			<div class="text-center col-12 col-sm-6 col-md-3 my-3">
				<div class="technology-card">
					<a href="https://reactjs.org/">
						<img src="{{ asset('img/about/logo-react.png') }}" alt="ReactJS Logotype">
						{{ __('ReactJS') }}
					</a>
				</div>
			</div>
			<div class="text-center col-12 col-sm-6 col-md-3 my-3">
				<div class="technology-card">
					<a href="https://angularjs.org/">
						<img src="{{ asset('img/about/logo-angular.png') }}" alt="AngularJS Logotype">
						{{ __('AngularJS') }}
					</a>
				</div>
			</div>
		</div>
		
	</section>
</div>
@endsection