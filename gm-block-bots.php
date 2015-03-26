<?php
/*
Plugin Name: GM Block Bots
Plugin URI: http://www.greenmellenmedia.com/plugins/gm-block-bots/
Description: Blocks traffic from SEMalt, buttons-for-website and others
Version: 1.1.4
Author: GreenMellen Media
Author URI: http://www.greenmellenmedia.com/
License: GPLv2 or later
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function gm_block_start() {
	$wp_bs_loaded = new GM_Block_Bots();
}

add_action( 'plugins_loaded', 'gm_block_start' );

class GM_Block_Bots {

	public function __construct() {
		add_action( 'parse_request', array( $this, 'block_bots' ) );
	}

	public function block_bots() {
		$referer = isset( $_SERVER['HTTP_REFERER'] ) ? $_SERVER['HTTP_REFERER'] : false;

		if ( empty( $referer ) ) {
			return;
		}
		
		$bot_array = array('semalt.com', 'buttons-for-website.com', 'darodar.com', 'social-buttons.com', '7makemoneyonline.com', 'ilovevitaly.co', 'simple-share-buttons.com', 'clicksor.com', 'bestwebsitesawards.com', 'aliexpress.com', 'savetubevideo.com', 'kambasoft.com', 'priceg.com', 'blackhatworth.com', 'hulfingtonpost.com', 'econom.co', 'ranksonic.org', 'ranksonic.info', '4webmasters.org', 'anticrawler.org', 'bestsub.com');
		
		foreach($bot_array as $bots) {
			if ( strpos( $referer, $bots ) !== false ) {
				wp_die( '', '', array( 'response' => 403 ) );
				exit;
			}
		}
	}
}
