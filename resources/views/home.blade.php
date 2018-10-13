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
			<div class="col-sm-6 m-auto pt-3">
				<article id="home-text" class="p-3 m-auto">
					<h2>O que é um artesão web?</h2>
					<p>
						Artesão é um profissional que fabrica produtos através de um processo manual ou com auxílio de ferramentas. Sua profissão usualmente requer algum tipo de habilidade ou conhecimento especializado na sua prática. O artesão web usa seu conhecimento especializado, sua habilidade e as mais modernas ferramentas para criar aplicações web inspiradoras que se destacam na multidão.
					</p>
					<span>- Matheus A. Dardenne</span>
				</article>
			</div>
			
		</div>
	</section>
</div>
@endsection