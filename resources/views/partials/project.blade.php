@php $query->the_post();@endphp
@include('partials.sticky-header')
@php
$gallery = get_post_meta(get_the_ID(),'svdp_photo_gallery');
@endphp
<div class="gallery tc">
  @foreach ($gallery as $img)
    <img src="{{ wp_get_attachment_url($img) }}" alt="" class="img-fluid w-100">
  @endforeach
</div>
