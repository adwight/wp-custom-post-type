<?php

function create_post_types() {
    register_post_type( 'people',
        array(
            'labels' => array(
                'name' => __( 'people' ),
                'singular_name' => __( 'person' )
            ),
            'description' => 'People to be listed on team page.',
            'public' => true,
            'supports' => array(
                'title', 
                'editor', 
                'custom-fields'
            )
        )
    );
}

add_action( 'init', 'create_post_types' );

function alaink_scripts()
{
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/build/scripts.min.js', array(), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'alaink_scripts');

function ak_menus()
{
    register_nav_menus(array(
    'header' => 'Header menu',
    'footer' => 'Footer menu'
    ));
}

add_action('after_setup_theme', 'ak_menus');

// Register Custom Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');

// Bootstrap navigation
function bootstrap_nav()
{
    wp_nav_menu(array(
            'theme_location'    => 'header-menu',
            'depth'             => 2,
            'container'         => 'false',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker()));
}

/*
—------------------------------------------------------------
# BROWSERSYNC
—------------------------------------------------------------
*/

$whitelist = array(
  '127.0.0.1',
  '::1'
);

if (in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
    add_action('admin_head', 'localhost_styles');
    add_action('wp_head', 'localhost_styles');

  //Ads "Local" if it's local....
    function localhost_styles()
    {
        echo '<style>

    body:before{
      background: rgba(255,00,00,0.7);
      font-size: 16px;
      color: #fff;
      display: block;
      padding: 25px;
      font-family: consolas!important;
      box-shadow: 0 0 25px rgba(255,00,00,1) inset;
    }

    body:after{
      content: "localhost";
      font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
      font-weight: 300;
      text-align: center;
      font-size: 16px;
      background: rgba(255,00,00,0.5);
      height: 35px;
      line-height: 35px;
      width: 100%;
      color: rgba(255,255,255,0.8);
      position: fixed;
      bottom: 10px;
      right: 10px;
      width: 100px;
      z-index: 1000;
    }
    </style>';
    }

    add_action('wp_footer', 'browser_sync_script');
    add_action('login_enqueue_scripts', 'browser_sync_script');

    function browser_sync_script()
    {
        ?>
    <script id="__bs_script__">
    //<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.13.0.js'><\/script>".replace("HOST", location.hostname));
    //]]>
    </script>
    <?php
    }
}

