@php
$page = get_page_by_path( 'about' );
$theme_options = get_option('svdp_theme_options');
$background_color = $theme_options['svdp_sidebar_background_color'];
$text_color = $theme_options['svdp_sidebar_text_color'];
$title_color = $theme_options['svdp_sidebar_title_color'];
@endphp


<div class="" id="sideNav" style="background:{{ $background_color }}">

  <div class="mobile">
    <nav class="navbar navbar-light fixed-top" style="background:{{ $background_color }}; z-index: 300;">
      <a class="navbar-brand pl-3" style="color:{{ $title_color }}" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>

      <button class="btn btn-link pl-2" data-toggle="modal" data-target="#exampleModal">
        {{-- <img src="@asset('images/information_phone.svg')" width="30"> --}}
        <span class="icon-information_phone" style="color:{{$title_color}}; font-size: 1.4rem; text-decoration:none;"></span>
      </button>
    </nav>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="background:{{ $background_color }};">
          <div class="modal-header" style="border-bottom: 0;">
            <h5 class="modal-title" id="exampleModalScrollableTitle" style="color:{{$title_color}}">
              {{ get_bloginfo('name', 'display') }}
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              {{-- <img src="@asset('images/close_phone.svg')" width="30">               --}}
              <span class="icon-close_phone" style="color:{{$title_color}}; font-size: 1.4rem; text-decoration:none;"></span>
            </button>
          </div>

          <div class="modal-body" style="color:{{ $text_color }}">
            {!! $page->post_content !!}
          </div>
        </div>
      </div>
    </div>


  </div>

  <div class="desktop p-3">
    <a class="navbar-brand brand js-scroll-trigger d-block ph3" href="{{ home_url('/') }}" style="color:{{ $title_color }}">
      <span class="svdp-title">{{ get_bloginfo('name', 'display') }}</span>
      <span class="svdp-title" style="display: none;">bureau sacha von der potter</span>
    </a>
    <div class="about f6 ph3" style="color:{{ $text_color }}">
      {!! $page->post_content !!}
    </div>
  </div>

</div>
