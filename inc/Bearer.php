<?php

namespace WPDevICU\Bearer;

/**
 * Bearer.
 *
 * Plugin main class.
 */
final class Bearer {
	/**
	 * Plugin instance.
	 *
	 * @since 1.0.0
	 *
	 * @var Bearer
	 */
	private static $instance;

	/**
	 * Plugin constructor method.
	 *
	 * @since 1.0.0
	 */
	private function __construct() {
	}

	/**
	 * Plugin init function.
	 *
	 * @since 1.0.0
	 *
	 * @return Bearer
	 */
	public static function init(): Bearer {
		if ( is_null( self::$instance ) ) {
			self::$instance = new Bearer();
		}
		return self::$instance;
	}
}
