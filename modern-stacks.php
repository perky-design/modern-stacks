<?php
/**
 * Plugin Name: Modern Stacks Fonts
 * Plugin URI: https://github.com/perky-design/modern-stacks/
 * Description: Easily use the fonts from Modern Stacks https://modernfontstacks.com/
 * Version: 0.1.2
 * Requires at least: 6.5
 * Requires PHP: 7.4
 * Author: Joop Laan
 * Author URI: https://perky.design
 * License: GPLv3
 * Text Domain: modern-stacks
 * Domain Path: /languages
 *
 * @package modernstacks
 */

/**
 *  Disallow direct access.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Registers the font collection in the font library.
 * See: https://developer.wordpress.org/reference/functions/wp_register_font_collection/
 */
add_action(
	'after_setup_theme',
	function() {

		wp_register_font_collection(
			'modern-stacks',
			array(
				'name'          => __( 'Modern Stacks', 'modern-stacks' ),
				'description'   => __( 'A collection of modern system fonts. The fastest fonts available. No downloading, no layout shifts, no flashes — just instant renders. More information on https://modernfontstacks.com/', 'modern-stacks' ),
				'font_families' => array(
					array(
						'font_family_settings' => array(
							'name'         => __( 'System UI', 'modern-stacks' ),
							'fontFamily'   => 'system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";',
							'slug'         => 'system-ui',
							'font-style'   => 'normal',
							'font-stretch' => 'normal',
						),
						'categories'           => array( 'sans-serif' ),
					),
					array(
						'font_family_settings' => array(
							'name'       => __( 'Transitional', 'modern-stacks' ),
							'fontFamily' => "Charter, 'Bitstream Charter', 'Sitka Text', Cambria, serif;",
							'slug'       => 'transitional',
						),
						'categories'           => array( 'serif' ),
					),
					array(
						'font_family_settings' => array(
							'name'       => __( 'Old Style', 'modern-stacks' ),
							'fontFamily' => "'Iowan Old Style', 'Palatino Linotype', 'URW Palladio L', P052, serif;",
							'slug'       => 'old-style',
						),
						'categories'           => array( 'serif' ),
					),
					array(
						'font_family_settings' => array(
							'name'       => __( 'Humanist', 'modern-stacks' ),
							'fontFamily' => "Seravek, 'Gill Sans Nova', Ubuntu, Calibri, 'DejaVu Sans', source-sans-pro, sans-serif;",
							'slug'       => 'humanist',
						),
						'categories'           => array( 'sans-serif' ),
					),
					array(
						'font_family_settings' => array(
							'name'       => __( 'Geometric Humanist', 'modern-stacks' ),
							'fontFamily' => "Avenir, Montserrat, Corbel, 'URW Gothic', source-sans-pro, sans-serif;",
							'slug'       => 'geometric-humanist',
						),
						'categories'           => array( 'sans-serif' ),
					),
					array(
						'font_family_settings' => array(
							'name'       => __( 'Classical Humanist', 'modern-stacks' ),
							'fontFamily' => "Optima, Candara, 'Noto Sans', source-sans-pro, sans-serif;",
							'slug'       => 'classical-humanist',
						),
						'categories'           => array( 'sans-serif' ),
					),
					array(
						'font_family_settings' => array(
							'name'       => __( 'Neo-Grotesque', 'modern-stacks' ),
							'fontFamily' => "Inter, Roboto, 'Helvetica Neue', 'Arial Nova', 'Nimbus Sans', Arial, sans-serif;",
							'slug'       => 'neo-grotesque',
						),
						'categories'           => array( 'sans-serif' ),
					),
					array(
						'font_family_settings' => array(
							'name'       => __( 'Monospace Slab Serif', 'modern-stacks' ),
							'fontFamily' => "'Nimbus Mono PS', 'Courier New', monospace",
							'slug'       => 'monospace-slab-serif',
						),
						'categories'           => array( 'monospace', 'serif' ),
					),
					array(
						'font_family_settings' => array(
							'name'       => __( 'Monospace Code', 'modern-stacks' ),
							'fontFamily' => "ui-monospace, 'Cascadia Code', 'Source Code Pro', Menlo, Consolas, 'DejaVu Sans Mono', monospace;",
							'slug'       => 'monospace-code',
						),
						'categories'           => array( 'monospace', 'serif' ),
					),
					array(
						'font_family_settings' => array(
							'name'       => __( 'Industrial', 'modern-stacks' ),
							'fontFamily' => "Bahnschrift, 'DIN Alternate', 'Franklin Gothic Medium', 'Nimbus Sans Narrow', sans-serif-condensed, sans-serif;",
							'slug'       => 'industrial',
						),
						'categories'           => array( 'sans-serif', 'serif' ),
					),
					array(
						'font_family_settings' => array(
							'name'       => __( 'Rounded Sans', 'modern-stacks' ),
							'fontFamily' => "ui-rounded, 'Hiragino Maru Gothic ProN', Quicksand, Comfortaa, Manjari, 'Arial Rounded MT', 'Arial Rounded MT Bold', Calibri, source-sans-pro, sans-serif;",
							'slug'       => 'rounded-sans',
						),
						'categories'           => array( 'sans-serif', 'serif' ),
					),
					array(
						'font_family_settings' => array(
							'name'       => __( 'Slab Serif', 'modern-stacks' ),
							'fontFamily' => "Rockwell, 'Rockwell Nova', 'Roboto Slab', 'DejaVu Serif', 'Sitka Small', serif;",
							'slug'       => 'slab-serif',
						),
						'categories'           => array( 'serif', 'serif' ),
					),
					array(
						'font_family_settings' => array(
							'name'       => __( 'Antique', 'modern-stacks' ),
							'fontFamily' => "Superclarendon, 'Bookman Old Style', 'URW Bookman', 'URW Bookman L', 'Georgia Pro', Georgia, serif;",
							'slug'       => 'antique',
						),
						'categories'           => array( 'serif', 'serif' ),
					),
					array(
						'font_family_settings' => array(
							'name'       => __( 'Didone', 'modern-stacks' ),
							'fontFamily' => "font-family: Didot, 'Bodoni MT', 'Noto Serif Display', 'URW Palladio L', P052, Sylfaen, serif;",
							'slug'       => 'didone',
						),
						'categories'           => array( 'serif', 'serif' ),
					),
					array(
						'font_family_settings' => array(
							'name'       => __( 'Handwritten', 'modern-stacks' ),
							'fontFamily' => "'Segoe Print', 'Bradley Hand', Chilanka, TSCu_Comic, casual, cursive",
							'slug'       => 'handwritten',
						),
						'categories'           => array( 'handwriting' ),
					),
					array(
						'font_family_settings' => array(
							'name'       => __( 'Emoji', 'modern-stacks' ),
							'fontFamily' => "'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'",
							'slug'       => 'emoji',
						),
						'categories'           => array( 'sans-serif' ),
					),
				),
				'categories'    => array(
					array(
						'name' => __( 'Handwriting', 'modern-stacks' ),
						'slug' => 'handwriting',
					),
					array(
						'name' => __( 'Monospace', 'modern-stacks' ),
						'slug' => 'monospace',
					),
					array(
						'name' => __( 'Sans Serif', 'modern-stacks' ),
						'slug' => 'sans-serif',
					),
					array(
						'name' => __( 'Serif', 'modern-stacks' ),
						'slug' => 'serif',
					),
				),
			)
		);
	}
);

