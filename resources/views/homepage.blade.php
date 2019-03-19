{{--
Template Name: Homepage
--}}
@extends('layouts.app')

@php
// WP_Query arguments
$args = array(
  'post_type'              => array( 'project' ),
);
// The Query
$query = new WP_Query( $args );
@endphp

@section('content')
  @if ($query->have_posts())
    @while ($query->have_posts())
      @php $query->the_post();@endphp
      {{ get_the_title() }}      
    @endwhile
  @else
    // no posts found
  @endif

  @php
  // Restore original Post Data
  wp_reset_postdata();
  @endphp
@endsection
