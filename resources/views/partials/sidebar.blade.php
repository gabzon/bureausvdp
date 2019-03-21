@php
$page = get_page_by_path( 'a-propos' );
$theme_options = get_option('svdp_theme_options');
$background_color = $theme_options['svdp_sidebar_background_color'];
$text_color = $theme_options['svdp_sidebar_text_color'];
@endphp


<div class="" id="sideNav" style="background:#{{ $background_color }}">

  <div class="mobile">
    <nav class="navbar navbar-light fixed-top" style="background:#{{ $background_color }}">
      <a class="navbar-brand" href="#">{{ get_bloginfo('name', 'display') }}</a>

      <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">
        <img src="@asset('images/information_phone.svg')" width="30">
      </button>
    </nav>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" style="background:#{{ $background_color }}">
        <div class="modal-content" style="background:lightblue">
          <div class="modal-header" style="border-bottom: 0;">
            <h5 class="modal-title" id="exampleModalScrollableTitle">
              {{ get_bloginfo('name', 'display') }}
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <img src="@asset('images/close_phone.svg')" width="30">
            </button>
          </div>


          <div class="modal-body" style="color:#{{ $text_color }}">
            {!! get_the_content($page) !!}
          </div>
        </div>
      </div>
    </div>


  </div>

  <div class="desktop p-3">
    <a class="navbar-brand brand js-scroll-trigger text-white d-block" href="{{ home_url('/') }}">
      <span class="svdp-title">{{ get_bloginfo('name', 'display') }}</span>
      <span class="svdp-title" style="display: none;">bureau sacha von der potter</span>
    </a>
    <div class="about f6" style="color:#{{ $text_color }}">
      {!! get_the_content($page) !!}
    </div>
  </div>

</div>
