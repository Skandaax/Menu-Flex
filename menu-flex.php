<?php
/**
 * Plugin Name: Menu Flex
 * Description: Un plugin de menu complexe.
 * Plugin URI: https://www.inforaz.fr/my_plugin
 * Author: Yannick Couillin
 * Author URI: https://www.inforaz.fr
 * Version: 1.0.9
 * License: GPL2
 * Text Domain: inforaz
 * Requires at least: 6.5
 * Requires PHP: 7.4
 *
 * @package MenuFlex
 */

// Empêche l'accès direct au fichier
if (!defined('ABSPATH')) {
    exit;
}

// Définir des constantes pour le plugin
define('MENU_FLEX_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('MENU_FLEX_PLUGIN_URL', plugin_dir_url(__FILE__));
define('MENU_FLEX_VERSION', '1.0.9');

// Lier les fichiers CSS et JS
function menu_flex_enqueue_assets() {
    // Enqueue CSS
    wp_enqueue_style(
        'menu-flex-styles',
        MENU_FLEX_PLUGIN_URL . 'assets/styles.css',
        array(),
        MENU_FLEX_VERSION
    );

    // Enqueue JS
    wp_enqueue_script(
        'menu-flex-scripts',
        MENU_FLEX_PLUGIN_URL . 'assets/script.js',
        array('jquery'),
        MENU_FLEX_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'menu_flex_enqueue_assets');

// Inclure les fonctions supplémentaires
require_once MENU_FLEX_PLUGIN_DIR . 'includes/function.php';
