<?php
   /*
	Plugin Name:    LoadJS
	Plugin URI:		http://github.com/pmichelazzo
	Description:    Put the JavaScript files in pages using some conditionals
	WordPress admin interface
	Version:	1.0
	Author:		Paulino Michelazzo
	Author URI:	http://www.michelazzo.com.br
	License:	GPL v.2
*/

function loadjs() {
	wp_reset_query();
	if(is_page(13)){
		wp_register_script( 'faq', '/js/faq.js', array('jquery'), null,true);
		wp_enqueue_script( 'faq' );
	}
	else{
	    wp_register_script( 'scripts', '/js/scripts.js', array('jquery'), null,true);
        wp_enqueue_script( 'scripts' );	
	}
   	wp_register_script( 'jquery', '/js/jquery.js', false, null,true);
    wp_enqueue_script( 'jquery' );
}

function loadcss(){
	if(is_front_page()){	
		wp_register_style( 'home', '/js/home.css',false,false,'screen' );
		wp_enqueue_style( 'home' );
	}
	else{	
		if(!is_page()){
			wp_register_style( 'blog', '/js/blog.css',false,false,'screen' );
			wp_enqueue_style( 'blog' );
		}
		else{
			wp_register_style( 'pages', '/js/pages.css',false,false,'screen' );		
			wp_enqueue_style( 'pages' );
		}
	}
}
add_action('wp_enqueue_scripts','loadcss');
add_action('wp_head','loadjs');

?>