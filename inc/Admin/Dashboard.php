<?php

namespace WPDevICU\Bearer\Admin;

/**
 * Bearer admin dashboard.
 *
 * @since BEARER_SINCE
 */
class Dashboard {

	/**
	 * Constructor.
	 *
	 * @since BEARER_SINCE
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'add_admin_menus' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'load_related_assets' ) );
	}

	/**
	 * Add Dashboard related admin menus and submenus.
	 *
	 * @since BEARER_SINCE
	 *
	 * @return void
	 */
	public function add_admin_menus() {
		add_menu_page(
			__( 'Bearer Dashboard', 'bearer' ),
			__( 'Bearer', 'bearer' ),
			'manage_options',
			'bearer_dashboard',
			array( $this, 'load_dashboard_content' ),
			'dashicons-superhero',
			2
		);

		add_submenu_page(
			'bearer_dashboard',
			__( 'Bearer Dashboard', 'bearer' ),
			__( 'Dashboard', 'bearer' ),
			'manage_options',
			'bearer_dashboard',
			array( $this, 'load_dashboard_content' ),
			1
		);

		add_submenu_page(
			'bearer_dashboard',
			__( 'Bearer Settings', 'bearer' ),
			__( 'Settings', 'bearer' ),
			'manage_options',
			'bearer_settings',
			array( $this, 'load_settings_content' ),
			99
		);
	}

	/**
	 * Dashboard content.
	 *
	 * @since BEARER_SINCE
	 *
	 * @return void
	 */
	public function load_dashboard_content() {
		echo '<div id="bearer-dashboard-wrapper"></div>';
	}

	/**
	 * Settings Content.
	 *
	 * @since BEARER_SINCE
	 *
	 * @return void
	 */
	public function load_settings_content() {
		echo '<div id="bearer-settings-wrapper"></div>';
	}

	/**
	 * Load Page specific assets.
	 *
	 * @since BEARER_SINCE
	 *
	 * @return void
	 */
	public function load_related_assets() {
		$current_screen = get_current_screen();

		if ( 'toplevel_page_bearer_dashboard' === $current_screen->id ) {
			wp_enqueue_script( 'bearer-dashboard-js' );
		}
	}
}
