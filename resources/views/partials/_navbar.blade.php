<nav class="navbar navbar-expand">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="_nav-link{{ (Request::is('/') ? ' active' : '') }}">{{ __('navbar.home') }}</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('about') }}" class="_nav-link{{ (Request::is('about*') ? ' active' : '') }}">{{ __('navbar.about') }}</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('contact') }}" class="_nav-link{{ (Request::is('contact*') ? ' active' : '') }}">{{ __('navbar.contact') }}</a>
        </li>
    </ul>
</nav>

<script>
    $(document).ready(function(){

        const links = $('._nav-link');

        links.click(function(){
            links.removeClass('active');
        });

    });
</script>