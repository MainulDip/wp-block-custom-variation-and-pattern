<?php

/**
 * Plugin Name:       wp-block-custom-variatioon-and-pattern
 * Description:       Custom Block Variation And Pattern
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            MainulDip
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-block-custom-variatioon-and-pattern-lg
 *
 * @package           create-block
 */



// core/group

define('TXTDOM', 'wp-block-custom-variatioon-and-pattern-lg');

class BlockVariationPattern
{
    public function __construct()
    {
        add_action('enqueue_block_editor_assets', array($this, 'enque_custom_variation_and_pattern'));
    }

    public function enque_custom_variation_and_pattern()
    {
        echo 'Plugin Urls' . plugins_url('build/index.js', __FILE__);
        wp_enqueue_script(
            'customVariationAndPattern',
            plugins_url('build/index.js', __FILE__)
        );
    }
}



new BlockVariationPattern();
