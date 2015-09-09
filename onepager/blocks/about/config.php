<?php

return array(
  'slug'    => 'tf-about',
  'groups'    => array('about'),

  'contents' => array(
    array(
      'name'=>'title',
      'value'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam ipsa recusandae consequatur veniam, reiciendis odit quia eaque vel eius a.'
    ),
    array(
      'name'=>'description',
      'type'=>'editor',
      'value' => 'Dont limit yourself. Many people limit themselves to what they think they can do. You can go as far as your mind lets you. What you believe, remember, you can achieve'
    ),
    array(
      'name'=>'items',
      'type'=>'repeater',
      'fields' => array(
        array(
          array('name'=>'title', 'type'=>'text', 'value'=> 'Slide 1'),
          array('name'=>'slider-image', 'type'=>'image', 'value'=> ''),
        ),
        
      )
    )







  ),




  'settings' => array(


  ),

  'styles' => array(
    
  ),

  'assets' => function( $path ){
    onepager()->asset()->style( 'content-3', $path . '/style.css' );
  }
);
