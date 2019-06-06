@php
$theme_options = get_option('svdp_theme_options');
$gallery_text_color = $theme_options['svdp_gallery_text_color'];
@endphp
<div class="sticky ml-2 pl-2" style="color:{{ $gallery_text_color }}; position: sticky;">
  <div class="rotate">
    <div class="spacer"></div>
    <a href="{{get_the_permalink()}}" style="color:{{ $gallery_text_color }}; text-decoration:none;">{{ get_the_title() }}</a>
    <br>
    {!! get_the_content() !!}
  </div>
</div>
