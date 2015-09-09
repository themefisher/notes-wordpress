<?php 

return array(
	'slug'      => 'tf-contact', // Must be unique
  	'groups'    => array('contact'), // Blocks group for filter

  	'contents' => array(
	  	array(
	      'name'=>'title', 
	      'value' => 'Get In Touch'
	    ),
	    array(
	    	'name'=>'subtitle',
	    	'value'	=> 'Contact Address'
	    ),
	    array(
	      'name'=>'description',
	      'type'=>'editor', 
	      'value'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et 
dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex'
	    ),
	    array(
	    	'name' => 'sub-description',
	    	'type'	=> 'editor',
	    	'value'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quos maxime voluptate doloribus, voluptatum nemo vel ipsa in eligendi, ullam. Ducimus consequuntur labore error hic.',
	    ),
	    array(
	    	'name'	=> 'address',
	    	'value'	=> 	'Dhanmondi 32,Dhaka, Bangladesh',
	    	'type'	=>	'editor'
	    ),
	    array(
	      'name'=>'contact_form',
	      'type'=>'textarea', 
	      'value'=> ''
	    ),
	    array(
	      'name'=>'email-address',
	      'type'=>'textarea', 
	      'value'=> 'Email:themefisher@gmail.com'
	    ),
	    array(
	      'name'=>'phone-number',
	      'type'=>'textarea', 
	      'value'=> 'Phone:+0093213123123'
	    ),
	    array(
	      'name'=>'copyright_text',
	      'type'=>'textarea', 
	      'value'=> 'Design and Developed By <a href="http://www.themefisher.com">Themefisher</a>.All rights reserved.Powered by <a href="http://getonepager.com/">Onepager</a>.'
	    ),

	),


	'styles' => array(
		
		
	),

	  // Settings - $settings available on view file to access the option
  'settings' => array(    
      array(
        'name'=>'button-color',
        'type'=>'colorpicker',
        'label'=>'Button Color',
        'value' => '#8ec64e'
      ),
  ),

	'assets' => function( $path ){
    	onepager()->asset()->style( 'footer-1', $path . '/style.css' );
  	}
);
