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
	 * @since BEARER_SINCE
	 *
	 * @var Bearer
	 */
	private static $instance;

	/**
	 * Plugin constructor method.
	 *
	 * @since BEARER_SINCE
	 */
	private function __construct() {
	}

	/**
	 * Plugin init function.
	 *
	 * @since BEARER_SINCE
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
