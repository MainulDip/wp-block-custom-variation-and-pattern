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

    public static $content = "<!-- wp:group -->\n<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container\"><!-- wp:heading {\"textAlign\":\"center\"} -->\n<h2 class=\"has-text-align-center\">Design Gesture</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:cover {\"url\":\"http://wootailoptim.local/wp-content/uploads/2021/06/49046216977_554f9ba47c_5k-2-scaled.jpg\",\"id\":154,\"focalPoint\":{\"x\":\"0.20\",\"y\":\"0.50\"},\"minHeight\":20} -->\n<div class=\"wp-block-cover has-background-dim\" style=\"min-height:20px\"><img class=\"wp-block-cover__image-background wp-image-154\" alt=\"\" src=\"http://wootailoptim.local/wp-content/uploads/2021/06/49046216977_554f9ba47c_5k-2-scaled.jpg\" style=\"object-position:20% 50%\" data-object-fit=\"cover\" data-object-position=\"20% 50%\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Write title…\",\"fontSize\":\"large\"} -->\n<p class=\"has-text-align-center has-large-font-size\">A Card Headline</p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:cover --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:cover {\"url\":\"http://wootailoptim.local/wp-content/uploads/2021/06/49046216977_554f9ba47c_5k-3-scaled.jpg\",\"id\":155,\"minHeight\":20} -->\n<div class=\"wp-block-cover has-background-dim\" style=\"min-height:20px\"><img class=\"wp-block-cover__image-background wp-image-155\" alt=\"\" src=\"http://wootailoptim.local/wp-content/uploads/2021/06/49046216977_554f9ba47c_5k-3-scaled.jpg\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Write title…\",\"fontSize\":\"large\"} -->\n<p class=\"has-text-align-center has-large-font-size\">B Card Headline</p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:cover --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:cover {\"url\":\"http://wootailoptim.local/wp-content/uploads/2021/06/49046216977_554f9ba47c_5k-4-scaled.jpg\",\"id\":156,\"focalPoint\":{\"x\":\"0.73\",\"y\":\"0.51\"},\"minHeight\":20} -->\n<div class=\"wp-block-cover has-background-dim\" style=\"min-height:20px\"><img class=\"wp-block-cover__image-background wp-image-156\" alt=\"\" src=\"http://wootailoptim.local/wp-content/uploads/2021/06/49046216977_554f9ba47c_5k-4-scaled.jpg\" style=\"object-position:73% 51%\" data-object-fit=\"cover\" data-object-position=\"73% 51%\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Write title…\",\"fontSize\":\"large\"} -->\n<p class=\"has-text-align-center has-large-font-size\">C Card Headline</p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:cover --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"borderRadius\":0,\"gradient\":\"cool-to-warm-spectrum\",\"className\":\"is-style-fill\"} -->\n<div class=\"wp-block-button is-style-fill\"><a class=\"wp-block-button__link has-cool-to-warm-spectrum-gradient-background has-background no-border-radius\">Call For Actions</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:group -->";
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

    public static function init_block_pattern()
    {

        add_action('init', array(get_called_class(), 'add_block_pattern_reg'));
    }

    public static function add_block_pattern_reg()
    {
        register_block_pattern(
            'mainuldip/block-pattern',
            array(
                'title'       => __('Card Pattern', TXTDOM),
                'description' => _x('Sorted Block That Better View A Card Element Consist of Several Block Element', 'Block pattern description', TXTDOM),
                'content'     => self::$content,
            )
        );
    }
}



new BlockVariationPattern();
BlockVariationPattern::init_block_pattern();
