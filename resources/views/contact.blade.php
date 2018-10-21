@extends('layouts.app')

@section('content')
<div id="contact" class="container">
	<div class="row justify-content-center">
		<div class="col-sm-10 col-md-8 col-lg-6">
			<form class="dark-card" method="POST" action="{{ route('contact.post') }}">
				
				{{ csrf_field() }}

				<div class="form-group">
					<label for="name">{{ __('contact.name') }}</label>
					<input type="text" class="form-control" name="name">

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
				</div>

				<div class="form-group">
					<label for="email">{{ __('contact.email') }}</label>
					<input type="email" class="form-control" name="email">

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
				</div>

				<div class="form-group">
					<label for="text">{{ __('contact.text') }}</label>
					<textarea name="text" class="form-control" rows="5"></textarea>

                    @if ($errors->has('text'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('text') }}</strong>
                        </span>
                    @endif
				</div>
				
				<div class="row justify-content-apart">
					<div class="col-4">
						<button class="btn btn-primary">{{ __('contact.submit') }}</button>
						
					</div>
					<div class="col-8 text-right">
						<div id="social-links" class="bg-white">
							<a href="https://www.facebook.com/matheus.dardenne">
								<i class="fab fa-facebook-square"></i>
							</a>
							<a href="https://linkedin.com/in/matheusdardenne/">
								<i class="fab fa-linkedin"></i>
							</a>
							<a href="https://twitter.com/MatheusDardenne">
								<i class="fab fa-twitter-square"></i>
							</a>
							<a href="https://github.com/matPK/">
								<i class="fab fa-github-square"></i>
							</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection