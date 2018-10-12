@extends('layouts.app')

@section('content')
<section id="home" class="m-4">
	<div class="row">
		<div class="col-md-5">
			<div class="home-image">
				<img src="{{asset('img/mat_foto.jpg')}}" alt="Matheus Adorni Dardenne">
			</div>
		</div>
		<div class="col-md-7">
			<h2>O que é um artesão web?</h2>
			<p>
				Artesão é um profissional que fabrica produtos através de um processo manual ou com auxílio de ferramentas. Sua profissão usualmente requer algum tipo de habilidade ou conhecimento especializado na sua prática. O artesão web usa seu conhecimento especializado, sua habilidade e as mais modernas ferramentas para criar aplicações web inspiradores que se destacam na multidão.
			</p>
		</div>
	</div>
</div>
@endsection