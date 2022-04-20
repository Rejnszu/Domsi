<?php



function domsi_register_styles()
{
    $version = wp_get_theme()->get('Version');

    if (is_page(array('domsi-galeria',))) {
        wp_enqueue_style('domsi-magnific-popup-style', get_template_directory_uri() . "/magnific-popup/magnific-popup.css", array(), '1.0', 'all');
    }
    wp_enqueue_style('domsi-boostrap-icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css", array(), '1.0', 'all');
    wp_enqueue_style('domsi-bootstrap-style', get_template_directory_uri() . "/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('domsi-fontawsome-style', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css", array(), '1.0', 'all');

    wp_enqueue_style('domsi-style', get_template_directory_uri() . "/style.css", array("domsi-bootstrap-style"), $version, 'all');
}

add_action('wp_enqueue_scripts', 'domsi_register_styles');


function domsi_register_scripts()
{
    wp_enqueue_script('domsi-jq-script', "https://code.jquery.com/jquery-3.5.1.min.js", array(), '3.5.1', !is_page(array('domsi-galeria')));
    if (is_page(array('domsi-galeria'))) {
        wp_enqueue_script('domsi-magnific-popup-script',  get_template_directory_uri() . "/magnific-popup/jquery.magnific-popup.min.js", array(), '1.0', true);
        wp_enqueue_script('domsi-galeria-init',  get_template_directory_uri() . "/galeria.js", array(), '1.0', true);
    }
    if (is_front_page()) {
        wp_enqueue_script('domsi-slider',  get_template_directory_uri() . "/slider.js", array(), '1.1', false);
    }
    if (is_page(array('domy'))) {
        wp_enqueue_script('domsi-domy-init',  get_template_directory_uri() . "/domy.js", array(), '1.0', false);
    }
    wp_enqueue_script('domsi-jqcColor-script', "https://cdnjs.cloudflare.com/ajax/libs/jquery-color/2.1.2/jquery.color.min.js", array(), '2.1.2', true);
    wp_enqueue_script('domsi-popper-script', "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js", array(), '1.0', true);
    wp_enqueue_script('domsi-bootstrap-script',  get_template_directory_uri() . "/bootstrap.min.js", array(), '1.0', true);


    wp_enqueue_script('domsi-main-script', get_template_directory_uri() . "/domsi.js", array(), '1.0', true);
    $translation_array = array('templateUrl' => get_template());
    wp_localize_script('domsi-main-script', 'object_name', $translation_array);
}

add_action('wp_enqueue_scripts', 'domsi_register_scripts');



function defer_parsing_of_js($url)
{
    if (is_user_logged_in()) return $url; //don't break WP Admin
    if (FALSE === strpos($url, '.js')) return $url;
    if (strpos($url, 'jquery.js')) return $url;
    return str_replace(' src', ' defer src', $url);
}
add_filter('script_loader_tag', 'defer_parsing_of_js', 10);
