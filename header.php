<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <link rel="stylesheet" href='<?php echo get_stylesheet_uri(); ?>'>
    <link href="https://fonts.googleapis.com/css?family=Lato|Sanchez" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <div class="mainBlock">

      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFFFFF;">
        <a class="navbar-brand" href="#"> <img id="zenLogo" src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo.png"/> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active lato thin navSize">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item lato thin navSize">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item lato thin navSize">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item lato thin navSize">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item lato thin navSize">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
          <span id="blueFont" class="navbar-text sanchez thin navSize">
            Login
          </span>
        </div>
      </nav>

    <?php if (is_front_page()): ?>
      <div class="container-fluid homeHead" style="padding: 0px;">
        <div class="row-fluid" style="background: url(<?php echo get_bloginfo('template_url'); ?>/assets/images/BlogHeader1.svg); background-size: cover; height: 180px; display: flex;">
          <div class="col center" style="margin: auto 15px">
            <h1 class="sanchez" id="head">Welcome to <?php bloginfo('name'); ?></h1>
            <h2 class="lato light">
              <p id="headContent"><?php bloginfo('description'); ?></p>
            </h2>
          </div>
        </div>
        <div class="row-fluid rec_2">
          <div class="headContainer">
            <img id="headIcons" src="<?php echo get_bloginfo('template_url') ?>/assets/images/Blue.svg">
            <img id="headIcons" src="<?php echo get_bloginfo('template_url') ?>/assets/images/BlueTW.svg">
            <img id="headIcons" src="<?php echo get_bloginfo('template_url') ?>/assets/images/faceBlue.svg">
            <img id="headIcons" src="<?php echo get_bloginfo('template_url') ?>/assets/images/BlueEmail.svg">
            <p class="share">SHARE</p>
          <div id="btn_Container">
            <button type="button" id="btn" class="btn btn-outline-dark sub"><span class="btn_Content">subscribe</span></button>
          </div>
          </div>
        </div>

    <?php else :?>
      <div class="row-fluid rec_2">
        <div class="headContainer">
          <img id="headIcons" src="<?php echo get_bloginfo('template_url') ?>/assets/images/Blue.svg">
          <img id="headIcons" src="<?php echo get_bloginfo('template_url') ?>/assets/images/BlueTW.svg">
          <img id="headIcons" src="<?php echo get_bloginfo('template_url') ?>/assets/images/faceBlue.svg">
          <img id="headIcons" src="<?php echo get_bloginfo('template_url') ?>/assets/images/BlueEmail.svg">
          <p class="share">SHARE</p>
        <div id="btn_Container">
          <button type="button" id="btn" class="btn btn-outline-dark sub"><span class="btn_Content">subscribe</span></button>
        </div>
        </div>
      </div>
    <?php endif ?>
    </div>
  </div>
