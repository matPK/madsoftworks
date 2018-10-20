<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials._head')
<body>
    <div id="app">
        @include('partials._navbar')

        <main>
        	@include('partials._messages')
            @yield('content')
        </main>

        @include('partials._footer')
    </div>
</body>
</html>
