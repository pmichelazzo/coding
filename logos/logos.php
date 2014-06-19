<?php
/**
 * @package Logos
 * @version 0.1
 */
/*
Plugin Name: Logos
Plugin URI: https://github.com/pmichelazzo/codigos/tree/master/logos
Description: Plugin para carregamento de logomarcas em páginas do website.
Author: Paulino Michelazzo
Version: 0.1
Author URI: http://www.michelazzo.com.br
*/

// Carga do CSS
function logos_css() {
	echo "
	<style type='text/css'>
	#logos {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'admin_head', 'logos_css' );

?>
