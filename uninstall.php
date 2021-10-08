<?php

if( !defined( 'ABSPATH') && !defined('WP_UNINSTALL_PLUGIN') )
    exit();

	$options_array = array(
		'stylecwlp',
		'cwlp-bshadow',
		'cwlp-fontfamily',
		'cwlp-logo-url',
		'cwlp-instagram',
		'cwlp-telegram',
		'cwlp-pinterest',
		'cwlp-whatsapp',
		'cwlp-facebook',
		'cwlp-twitter',
		'cwlp-linkedin',
		'cwlp-custom-logo'
	);
	
foreach ($options_array as $option) {
	delete_option( $option );
}
?>