{{--
Template Name: Homepage
--}}
@extends('layouts.svdp')

@php
// WP_Query arguments
$args = array(
  'post_type'       => array( 'project' ),
  'orderby'         => 'rand',
  'posts_per_page'  => 75,
);
// The Query
$query = new WP_Query( $args );

$theme_options = get_option('svdp_theme_options');
$background_color = $theme_options['svdp_sidebar_background_color'];
$gallery_text_color = $theme_options['svdp_gallery_text_color'];
@endphp

@section('content')
  <div class="homepage" style="background:#{{$background_color}}">
    @if ($query->have_posts())
      <div class="loupe dim">
        <span class="icon-loupe_moins icon pt-4" style="font-size:1.5rem; color:{{ $gallery_text_color }};"></span>
        {{-- <img src="@asset('images/loupe_moins.svg')" width="30"> --}}
      </div>
      <div class="portfolio" >
        @while ($query->have_posts())
          @php $query->the_post();@endphp
          <div class="project">
            @include('partials.sticky-header')
            @php
            $gallery = get_post_meta(get_the_ID(),'svdp_photo_gallery');
            @endphp
            <div class="gallery tc">
              @foreach ($gallery as $img)
                <img src="{{ wp_get_attachment_url($img) }}" alt="" class="img-fluid w-100">
              @endforeach
            </div>
          </div>
        @endwhile
      </div>
    @else
      // no posts found
    @endif

    @php
    // Restore original Post Data
    wp_reset_postdata();
    @endphp
  </div>
@endsection
