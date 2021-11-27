<?php

namespace WPDevICU\Bearer;

/**
 * Assets class.
 *
 * For registering js and css related to the plugin.
 */
class Assets {

	/**
	 * Constructor.
	 *
	 * @since BEARER_SINCE
	 *
	 * @return void
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'register' ) );
	}

	/**
	 * Asset Register method.
	 *
	 * @since BEARER_SINCE
	 *
	 * @return void
	 */
	public function register() {
		$index_asset = require_once BEARER_PLUGIN_BUILD_DIR . '/index.asset.php';

		wp_register_script(
			'bearer-dashboard-js',
			plugins_url( 'build/index.js', BEARER_PLUGIN_FILE ),
			$index_asset['dependencies'],
			$index_asset['version'],
			true
		);
	}
}
