<?php
// Empêche l'accès aux utilisateurs non autorisés
if (! defined('ABSPATH')) {
    exit;
}

// Shortcode pour afficher un menu WordPress stylisé
function display_complex_wp_menu($atts) {
    // Attributs par défaut du shortcode
    $atts = shortcode_atts(array(
        'menu' => '',                // Nom ou slug du menu
        'theme_location' => '',      // Emplacement du menu (si défini dans le thème)
        'container' => 'nav',        // Conteneur HTML principal
        'container_class' => 'main-menu-container', // Classe du conteneur principal
        'menu_class' => 'main-menu', // Classe CSS pour la liste du menu
    ), $atts);

    // Récupère le menu WordPress
    $menu = wp_nav_menu(array(
        'theme_location' => $atts['theme_location'],
        'menu' => $atts['menu'],
        'container' => $atts['container'],
        'container_class' => $atts['container_class'],
        'menu_class' => $atts['menu_class'],
        'depth' => 3,
        'fallback_cb' => false,
        'echo' => false, // Retourne le menu au lieu de l'afficher directement
    ));

    // Si aucun menu n'est trouvé
    if (!$menu) {
        return '<p>Aucun menu trouvé. Vérifiez les paramètres du shortcode.</p>';
    }

    // Retourne le menu stylisé
    return '<div class="complex-menu-wrapper">' . $menu . '</div>';
}
add_shortcode('complex_wp_menu', 'display_complex_wp_menu');

?>
