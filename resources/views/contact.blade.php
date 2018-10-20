@extends('layouts.app')

@section('content')
<div id="contact" class="container">
	<div class="row">
		<div class="col-12">
			<form method="POST" action="{{ route('contact.post') }}">
				
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
					<textarea name="text" class="form-control"></textarea>

                    @if ($errors->has('text'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('text') }}</strong>
                        </span>
                    @endif
				</div>

				<button class="btn btn-primary">{{ __('contact.submit') }}</button>
			</form>
		</div>
	</div>
</div>
@endsection