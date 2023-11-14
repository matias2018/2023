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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <!-- Navbar -->
    <div class="navbar sticky" id="navbar">
      <div class="main-container nav-container flex">
        <div class="navbar--logo">
          <a tabindex="-1" href="<?= site_url(); ?>" aria-label="Fundo Rainha D. Leonor home page">
            <img src="<?php echo get_theme_file_uri('/images/real/logos/logo.svg'); ?>" alt="Fundo Rainha D. Leonor" class="logo-nav logo">
          </a>
        </div>
        <a href="#" class="burger-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <nav class="navbar-desktop">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'headerMenuLocation'
          ));
          ?>
        </nav>
      </div>
    </div>
  </header>