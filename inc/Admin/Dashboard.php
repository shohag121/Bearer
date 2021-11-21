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
		echo 'Bearer Dashboard';
	}

	/**
	 * Settings Content.
	 *
	 * @since BEARER_SINCE
	 *
	 * @return void
	 */
	public function load_settings_content() {
		echo 'Settings Content';
	}
}
