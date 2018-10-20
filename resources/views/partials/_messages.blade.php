@if(Session::has('message'))
	<div>
		{{ Session::flash('message') }}
	</div>
@endif