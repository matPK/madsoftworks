@extends('layouts.app')

@section('content')
<div id="home" class="container">
	<section id="intro" class="p-3">
		<div class="row">
			<div class="col-sm-5 m-auto pt-3">
				<div id="home-logo">
					<img src="{{asset('img/MAD.jpg')}}" alt="Logo MAD SoftWorks">
				</div>
			</div>
			<div class="col-sm-7 m-auto pt-3">
				<article id="home-text" class="p-3 m-auto">
					<h2>{{ __('home.question') }}</h2>
					<p>{{ __('home.text') }}</p>
					<span>- Matheus A. Dardenne</span>
				</article>
			</div>
			
		</div>
	</section>
</div>
@endsection