@extends('layouts.app')

@section('content')
<div id="home" class="container">
	<section id="intro" class="block row">
		<div class="col-md-6 m-auto">
			<div class="home-image">
				<img src="{{asset('img/MAD.jpg')}}" alt="Logo MAD SoftWorks">
			</div>
		</div>
		<div class="col-md-6 m-auto">
			<h2>O que é um artesão web?</h2>
			<p>
				Artesão é um profissional que fabrica produtos através de um processo manual ou com auxílio de ferramentas. Sua profissão usualmente requer algum tipo de habilidade ou conhecimento especializado na sua prática. O artesão web usa seu conhecimento especializado, sua habilidade e as mais modernas ferramentas para criar aplicações web inspiradoras que se destacam na multidão.
			</p>
			<span>- Matheus A. Dardenne</span>
		</div>
	</section>
	
</div>
@endsection