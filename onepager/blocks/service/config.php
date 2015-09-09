<?php

return array(
  'slug'    => 'tf-service',
  'groups'    => array('service'),

  'contents' => array(
    array(
      'name'=>'title',
      'value'=>'Our Services',
      'help'=>"some help text"
    ),
    array(
      'name'=>'description',
      'type'=>'textarea',
      'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et 
dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex',
    ),

    array(
      'name'=>'items',
      'type'=>'repeater',
      'fields' => array(
        array(
          array('name'=>'title', 'value' => 'Notification Active'),
          array('name'=>'description', 'type'=> 'textarea', 'value'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, in?'),
          array('name'=>'media', 'type'=>'media', 'value'=> 'ion-ios-ionic-outline'),
        ),
        array(
          array('name'=>'title', 'value' => 'Fully Responsive'),
          array('name'=>'description', 'type'=> 'textarea', 'value'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, in?'),
          array('name'=>'media', 'type'=>'media', 'value'=> 'ion-ios-checkmark-outline'),
        ),
        array(
          array('name'=>'title', 'value' => 'Well Documenation'),
          array('name'=>'description', 'type'=> 'textarea', 'value'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, in?'),
          array('name'=>'media', 'type'=>'media', 'value'=> 'ion-ios-plus-outline'),
        ),
        array(
          array('name'=>'title', 'value' => 'Well Documenation'),
          array('name'=>'description', 'type'=> 'textarea', 'value'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, in?'),
          array('name'=>'media', 'type'=>'media', 'value'=> 'ion-ios-plus-outline'),
        ),
      )
    )
  ),

  'settings' => array(
      array(
        'name'=>'hover-color',
        'type'=>'colorpicker',
        'label'=>'Hover Color',
        'value' => '#8ec64e'
      ),
  ),

  'styles' => array(
  ),

  'assets' => function( $path ){
    onepager()->asset()->style( 'content-3', $path . '/style.css' );
  }
);
