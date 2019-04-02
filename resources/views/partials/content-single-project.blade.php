@php
$theme_options = get_option('svdp_theme_options');
$background_color = $theme_options['svdp_sidebar_background_color'];
$gallery_text_color = $theme_options['svdp_gallery_text_color'];
@endphp

<div class="loupe">
  <span class="icon-loupe_moins icon" style="font-size:1.5rem; color:{{ $gallery_text_color }};"></span>
  {{-- <a href="{{ home_url('/') }}home-zoom-out">
    <img src="@asset('images/loupe_moins.svg')" width="30">
  </a> --}}
</div>

<article @php post_class() @endphp>
  @include('partials.sticky-header')

  @php
  $gallery = get_post_meta(get_the_ID(),'svdp_photo_gallery');
  @endphp
  <div class="gallery tc">
    @foreach ($gallery as $img)
      <img src="{{ wp_get_attachment_url($img) }}" alt="" class="img-fluid w-100">
    @endforeach
  </div>
</article>
