@extends('layouts.email')

@section('content')
<p>Você recebeu uma mensagem de {{ $name }}:</p>
<p>{{ $text }}</p>
@endsection