<section class="info_section layout_padding2">
    <div class="container">
      <div class="row info_form_social_row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">

          <div class="social_box">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="row info_main_row">
        <div class="col-md-6 col-lg-3">
          <div class="info_links">
            <h4>
            {{ __('messages.Menu')}}  
            </h4>
            <div class="info_links_menu">
                        <a href="{{ url('/') }}">{{ __('messages.Home')}}</a>
                        <a href="{{ url('/about') }}">{{ __('messages.About')}}</a>
                        <a href="{{ url('/shop') }}">{{ __('messages.shop')}}</a>
                        <a href="{{ url('/blog') }}">{{ __('messages.Blog')}}</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_insta">
            <h4>
            {{ __('messages.Instagram')}}
            </h4>
            <div class="insta_box">
              <div class="img-box">
                <img src="{{ asset('asset/images/p1.png') }}" alt="">
              </div>
              <p>
                long established fact that a reader
              </p>
            </div>
            <div class="insta_box">
              <div class="img-box">
                <img src="{{ asset('asset/images/p2.png') }}" alt="">
              </div>
              <p>
                long established fact that a reader
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_detail">
            <h4>
            {{ __('messages.About Us')}}
            </h4>
            <p class="mb-0">
              when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <h4>
          {{ __('messages.Contact Us')}} 
          </h4>
          <div class="info_contact">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
              {{ __('messages.Location')}}  
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call +01 1234567890
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope"></i>
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>