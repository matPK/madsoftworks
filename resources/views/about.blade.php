@extends('layouts.app')

@section('content')
<div id="about" class="container">
	<article class="m-auto">
		<h2>{{ __('about.what_is_it') }}</h2>
		<p>{{ __('about.answer') }}</p>
		<span>- Matheus A. Dardenne</span>
	</article>
</div>
@endsection