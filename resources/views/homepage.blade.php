{{--
Template Name: Homepage
--}}
@extends('layouts.fullimage')

@php
// WP_Query arguments
$args = array(
  'post_type'              => array( 'project' ),
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
        <a href="#">
          <img src="@asset('images/loupe_moins.svg')" width="30" class="ml-3 mt-3 position-fixed">
        </a>
      </div>
      @while ($query->have_posts())
        @php $query->the_post();@endphp
        <article class="">
          <header class="position-sticky ml-5 pl-5">
            {{ get_the_title() }}
            {!! get_the_content() !!}
          </header>

          @php
          $gallery = get_post_meta(get_the_ID(),'svdp_photo_gallery');
          @endphp

          @foreach ($gallery as $img)
            <img src="{{ wp_get_attachment_url($img) }}" alt="" class="img-fluid d-block" width="100%">
          @endforeach
        </article>

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
