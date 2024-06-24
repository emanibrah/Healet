<header class="header_section">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <span>{{ __('messages.Healet')}}</span>
        </a>
        <div class="" id="">
            <div class="custom_menu-btn">
                <button onclick = "openNav()">
                    <span class="s-1"> </span>
                    <span class="s-2"> </span>
                    <span class="s-3"> </span>
                </button>
                <div id="myNav" class="overlay">
                    <div class="overlay-content">
                        <a href="{{ url('/') }}">{{ __('messages.Home')}}</a>
                        <a href="{{ url('/about') }}">{{ __('messages.About')}}</a>
                        <a href="{{ url('/shop') }}">{{ __('messages.shop')}}</a>
                        <a href="{{ url('/blog') }}">{{ __('messages.Blog')}}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="language-switcher">
            <a href="{{ url('/ar') }}">العربية</a> |
            <a href="{{ url('/en') }}">English</a>
        </div>
    </div>
</header>