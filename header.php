<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
  </head>
  <body
    <?php body_class('bg-background-base max-w-[100vw] overflow-x-hidden'); ?>
  >
    <?php wp_body_open(); ?>

    <?php get_template_part('template-parts/header/mobile-nav'); ?>

    <div
      id="fixed-cover-full-screen"
      class="h-[100vh] w-full fixed top-0 left-0"
    ></div>
    <main id="bluryDiv" class="relative transition-filter">
      <?php get_template_part('template-parts/header/desktop-nav'); ?>
