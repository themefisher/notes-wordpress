<?php

return array(

  'slug'      => 'tf-header', // Must be unique
  'groups'    => array('header'), // Blocks group for filter

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array(
      'name'=>'logo',
      'type'=> 'image',
    ),
    array(
      'name'=>'logo-2',
      'type'=> 'image',
    ),
  
    array('name'=>'menu','type'=>'menu'),
    array(
      'name'=>'title',
      'value' => 'A PASSIONATE WEB COMPANY'
    ),
    array(
      'name'=>'description',
      'type' =>'textarea',
      'value' => 'Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur.'
    ),
    array(
      'name'=>'button_link',
      'label'=> 'Button Link ',
      'value' => 'http://www.themefisher.com',
    ),
    array(
      'name'=>'button_text',
      'label'=> 'Button Text',
      'value' => 'Download Now',
    ),
    array(
      'name'=>'counter_day',
      'label'=> 'Counter Day',
      'value' => '20',
    ),
    array(
      'name'=>'counter_month',
      'label'=> 'Counter Month',
      'value' => '10',
    ),
    array(
      'name'=>'counter_year',
      'label'=> 'Counter Year',
      'value' => '2016',
    ),

    array(
      'name'=>'counter_hour',
      'label'=> 'Counter Hour',
      'value' => '15',
    ),

    


  ),

  // Settings - $settings available on view file to access the option
  'settings' => array(
   
    array(
      'name' => 'banner-color',
      'type' => 'colorpicker',
      'value' => '#8ec64e'
    ),


  ),
  'styles' => array(


  ),

  'assets' => function( $path ){
    onepager()->asset()->style( 'header-1', $path . '/style.css' );
  }
);
