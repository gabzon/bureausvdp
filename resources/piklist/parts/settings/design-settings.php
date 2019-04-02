<?php

/*
Title: Design parameters
Setting: svdp_theme_options
*/

// piklist('field', array(
//   'type' => 'text'
//   ,'field' => 'text'
//   ,'label' => 'Text Box'
//   ,'description' => 'Field Description'
//   ,'help' => 'This is help text.'
//   ,'value' => 'Default text'
//   ,'attributes' => array(
//     'class' => 'text'
//   )
// ));


piklist('field',[
  'type' => 'colorpicker',
  'field' => 'svdp_gallery_background_color',
  'label' => 'Gallery section Background color',
  'value' => '#90e1ff',
]);

piklist('field',[
  'type' => 'colorpicker',
  'field' => 'svdp_gallery_text_color',
  'label' => 'Gallery section text color',
  'value' => '#106db1',
]);

piklist('field',[
  'type' => 'colorpicker',
  'field' => 'svdp_sidebar_title_color',
  'label' => 'Sidebar Title Text color',
  'value' => '#fff',
]);

piklist('field',[
  'type' => 'colorpicker',
  'field' => 'svdp_sidebar_text_color',
  'label' => 'Sidebar Text color',
  'value' => '#106db1',
]);

piklist('field',[
  'type' => 'colorpicker',
  'field' => 'svdp_sidebar_background_color',
  'label' => 'Sidebar Background color',
  'value' => '#90e1ff',
]);
