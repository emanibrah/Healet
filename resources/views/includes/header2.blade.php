<!-- header section strats -->
<header class="header_section innerpage_header">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <span>
          {{ __('messages.Healet')}}
          </span>
        </a>
        <div class="" id="">

          <div class="custom_menu-btn">
            <button onclick= "openNav ()">
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
      </nav>
    </div>
  </header>
  <!-- end header section -->
