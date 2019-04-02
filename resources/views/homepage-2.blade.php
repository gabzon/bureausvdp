{{--
Template Name: Homepage 2
--}}
@extends('layouts.svdp')

@php
// WP_Query arguments
$args = array(
  'post_type'      => array( 'project' ),
  'orderby'        => 'rand',
);
// The Query
$query = new WP_Query( $args );
$theme_options = get_option('svdp_theme_options');
$background_color = $theme_options['svdp_sidebar_background_color'];
@endphp

@section('content')
  <div class="homepage" style="background:#{{$background_color}}">
    @if ($query->have_posts())
      <div class="loupe">
        <a href="{{ home_url('/') }}">
          <span class="icon-loupe_plus icon" style="font-size:1.5rem; color:{{ $gallery_text_color }};"></span>
        </a>
      </div>
      <div class="portfolio">
        @while ($query->have_posts())
          @php $query->the_post();@endphp
          <article class="project">
            @include('partials.sticky-header')
            @php
            $gallery = get_post_meta(get_the_ID(),'svdp_photo_gallery');
            @endphp
            <div class="gallery tc">
              @foreach ($gallery as $img)
                <img src="{{ wp_get_attachment_url($img) }}" alt="" class="img-fluid w-60 my-5">
              @endforeach
            </div>
          </article>
      </div>
      @endwhile
    @else
      // no posts found
    @endif

    @php
    // Restore original Post Data
    wp_reset_postdata();
    @endphp
  </div>
@endsection
