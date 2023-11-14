<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

$menu = wp_get_nav_menu_items('Header');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header id="header">
    <!-- skipping link -->
    <a href="#" class="skipping-link hidden">
      <svg width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.5 13v10" stroke="#FFF" stroke-width="2" class="mouse_svg__scroll mouse" id="wheel"></path>
        <path d="M14.5 1C7.041 1 1 6.34 1 12.932v20.136c0 .507.034 1 .11 1.491C1.937 40.443 7.615 45 14.5 45c6.885 0 12.563-4.557 13.399-10.44.067-.493.101-.985.101-1.492V12.932C28 6.34 21.959 1 14.5 1" stroke="#FFF" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="round" class="mouse">
        </path>
      </svg>
      <span class="screen-reader-only">Go to main content</span>
    </a>
    <!-- /skipping link -->
    
    <!-- Navbar -->
    <div class="navbar" id="navbar">
   

      <a href="#" class="burger-menu">
        <span class="bar" aria-hidden="true"></span>
        <span class="bar" aria-hidden="true"></span>
        <span class="bar" aria-hidden="true"></span>
        <span class="sr-only">Menu</span>
      </a>

      <div class="main-container nav-containers">
        <div class="navbar--logo">
          <a class="ndd_logo" href="<?php echo esc_url(home_url('/')); ?>">
            <span class="screen-reader-only">Home</span>
          </a>
          <a class="search-btn hide-on-mobile" href="<?= esc_url(site_url('/search')); ?>" class="hide-on-mobile">
            
            <span class="screen-reader-only">Search</span>
          </a>
          
          <!-- display das propriedades do monitor -->
          <p id="resolution">Isto deve ser apagado</p>
          <!-- display das propriedades do monitor -->

        </div>

        <nav class="navbar-desktop">
          <!-- This is menu inside -->
          <div class="nav-items-old">
            <div class="menuContainer nav-items">
              <div class="mobileOnly upperNav mandatory-scroll-snapping">
                <ul class="nav-items-list">
                  <li <?php if (is_front_page()) echo 'class="nav-item active"' ?>>
                    <a href="<?= site_url(); ?>">Home</a>
                  </li>
                  <li <?php if (is_page('sobre-nos')) echo 'class="nav-item active"' ?>>
                    <a href="<?= site_url('/#three'); ?>">Projects</a>
                  </li>
                  <li <?php if (is_page('historia')) echo 'class="nav-item active"' ?>>
                    <a href="<?= site_url('/#'); ?>">Working History</a>
                  </li>
                  <li <?php if (get_post_type() == 'obra') echo 'class="nav-item active"' ?>>
                    <a href="<?= site_url('/#'); ?>">Thoughts</a>
                  </li>
                  <li <?php if (get_post_type() == 'post') echo 'class="nav-item active"' ?>>
                    <a href="<?= site_url('/#'); ?>">Contact</a>
                  </li>
                  <li <?php if (is_page('info')) echo 'class="nav-item active"' ?>>
                    <a href="<?= site_url('/#'); ?>">Media</a>
                  </li>
                </ul>
              </div>

              <div id="bottomNav" class="mobileOnly bottomNav mandatory-scroll-snapping">
                <ul class="programs-list">
                  <p class="programs-title">Highlights</p>
                  <li>
                    <a href="<?= site_url('/programas/portugalmultimedia'); ?>">
                      Portugal Multimedia
                    </a>
                  </li>
                  <li>
                    <a href="<?= site_url('/programas/marshall'); ?>">
                      Marshall
                    </a>
                  </li>
                  <li>
                    <a href="<?= site_url('/programas/worten'); ?>">
                      Worten
                    </a>
                  </li>
                  <li>
                    <a href="<?= site_url('/programas/cr7'); ?>">
                      CR7
                    </a>
                  </li>
                  <li class="hide-on-desktop">
                    <a href="<?= esc_url(site_url('/search')); ?>">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/search.svg" alt="search" class="search">
                      <span class="screen-reader-only">Search</span>
                    </a>
                  </li>
                </ul>
              </div>

            </div>
          </div>
        </nav>
      </div><!-- /class="container flex" -->
    </div><!-- /class="navbar" -->

    <div id="#dark_light_switch" class="dark_light_switch">
    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"><defs><style>.cls-1{fill:#606060;}.cls-1,.cls-2{stroke:#606060;stroke-miterlimit:10;}.cls-2{fill:none;stroke-width:3px;}</style></defs><path class="cls-1" d="M15,15v8.33A8.33,8.33,0,0,1,15,6.67Z"/><circle class="cls-2" cx="15" cy="15" r="12.5"/></svg>
    </div>
  </header>
  <div class="cursor"></div>