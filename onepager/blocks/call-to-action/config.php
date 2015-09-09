<?php

return array(
  
  'slug'      => 'tf-call-to-action', // Must be unique and singular
  'groups'    => array('call-to-action'), // Blocks group for filter and plural

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array(
      'name'=>'title', 
      'value' => 'Talk, message, share. In private or with groups.'
    ),
    array(
      'name'=>'description',
      'type'=>'editor', 
      'value'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi assumenda reiciendis id eius, veritatis nemo'
    ),
    
    array(
      'name'=>'banner_bg',
      'label'    => 'Banner Background',
      'type'  => 'image',
    ),
    array(
      'name'=>'subscription_form',
      'label'    => 'Subscription Form',
      'type'  => 'textarea',
    ),
  ),
  
  // Settings - $settings available on view file to access the option
  'settings' => array(    
      array(
        'name'=>'button-color',
        'type'=>'colorpicker',
        'label'=>'Button Color',
        'value' => '#47b475'
      ),
  ),

  // Fields - $styles available on view file to access the option
  'styles' => array(

  ),

  // 'assets' => function( $path ){
  //   onepager()->asset()->style( 'content-5', $path . 'style.css' );
  // }
);