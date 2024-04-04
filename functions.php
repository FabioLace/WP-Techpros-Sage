<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

if (! function_exists('\Roots\bootloader')) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://roots.io/acorn/docs/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

\Roots\bootloader()->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

////////////////////////////////////////////////////////////////////////////

/*
|--------------------------------------------------------------------------
| Register Navigation Menus
|--------------------------------------------------------------------------
|
| Register Header and Footer menus
|
*/

register_nav_menu('header','Header');
register_nav_menu('footer','Footer');

/*
|--------------------------------------------------------------------------
| Load external libraries
|--------------------------------------------------------------------------
|
| Registering other styles
|
*/

add_action('wp_enqueue_scripts', function(){
    echo '
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:600,800,900" >
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:600,800,900" >
    ';
});

/*
|--------------------------------------------------------------------------
| Remove Gutenberg
|--------------------------------------------------------------------------
|
| I don't use Gutenberg because it has some limitation while using plugins
| like Advanced Custom Fields. More control is better than less control.
|
*/

add_filter( 'use_block_editor_for_post', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );

add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'global-styles' );
}, 20 );

/*
|--------------------------------------------------------------------------
| Load Favicons
|--------------------------------------------------------------------------
|
| As the title says
|
*/

/* add_action('wp_head', function(){
    $faviconDirectory = get_template_directory_uri() . '/resources/images/favicon';
    echo "<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"".$faviconDirectory."/apple-touch-icon.png\">";
    echo "<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"".$faviconDirectory."/favicon-32x32.png\">";
    echo "<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"".$faviconDirectory."/favicon-16x16.png\">";
    echo "<link rel=\"manifest\" href=\"".$faviconDirectory."/site.webmanifest\">";
    echo "<link rel=\"mask-icon\" href=\"".$faviconDirectory."/safari-pinned-tab.svg\" color=\"#9d9d9c\">";
    echo "<meta name=\"msapplication-TileColor\" content=\"#9d9d9c\">";
    echo "<meta name=\"theme-color\" content=\"#ffffff\">";
}); */

/*
|--------------------------------------------------------------------------
| Customize Login Page
|--------------------------------------------------------------------------
|
| As the title says, it customizes the default WP login page
|
*/

/* add_action('login_head', 'add_favicon');
add_filter( 'login_headerurl', function(){ return home_url(); });
add_filter( 'login_headertext', function(){ return 'Meli Massaggi'; });
add_filter('login_display_language_dropdown', '__return_false');

add_action( 'login_enqueue_scripts', function(){
    $pathToLogo = get_template_directory_uri() . '/resources/images/logo-min.png';
    $pathToLeaves = get_template_directory_uri() . '/resources/images/leaves.jpeg';
    echo '<style type="text/css"></style>';
}); */