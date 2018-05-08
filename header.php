<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item lato thin navSize">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item lato thin navSize">
              <a class="nav-link" href="#">Blog</a>
            </li>
          </ul>
          <span id="blueFont" class="navbar-text lato thin navSize">
            Your Business
          </span>
        </div>
      </nav>

      <div class="container-fluid homeHead">
        <div class="row" style="background: url(<?php echo get_bloginfo('template_url') ?>/assets/images/Icons.png); background-size: cover; height: 700px;">
          <div class="col center" style="margin-top: 100px;">
            <h1 class="sanchez" id="head">ZenBusiness Blog</h1>
            <h2 class="lato light">
              <p id="headContent">Our WOW customer support includes</p>
              <p id="headContent">discovering and writing about ways to help</p>
              <p id="headContent">your business thrive</p>
            </h2>
          </div>
        </div>
        <!-- Blog Post Container -->
        <div id="bootMargin" class="row" style="max-width: 1200px; margin: auto; margin-top: -200px;">
          <!-- Individual Posts -->
          <div id="bootMargin" class="row homePosts">
            <div class="postContent">
              <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/blurBoss.png" alt="Blur Man" style="width: 100%; margin-bottom:25px;">
              <span class="homePostTitle">My Advice for Starting a Business</span>
              <span>
                <p class="homePostContent">Today, I’d like to share the lessons I’ve learned about starting a business, in hopes of encouraging you to get started making something you love.</p>
                <p class="homePostContent">Look for opportunities. This is from my friend Hiten Shah, who will be featured in the Habits of Entrepreneurs series. Keep your eyes open for opportunities — what pain points do people have, what problems need to be solved, how can you make people’s lives better?</p>
                <a href="#" style="text-decoration: none;"> <p class="readMore" >Read More</p> </a>
              </span>
            </div>
            <hr style="width:100%; border-top: 2px solid rgba(0,0,0,.1);">
          </div>
          <!-- Individual Posts -->
          <div id="bootMargin" class="row homePosts">
            <div class="postContent">
              <span class="homePostTitle">Example of a Text Only Post</span>
              <span>
                <p class="homePostContent">Today, I’d like to share the lessons I’ve learned about starting a business, in hopes of encouraging you to get started making something you love.</p>
                <p class="homePostContent">Look for opportunities. This is from my friend Hiten Shah, who will be featured in the Habits of Entrepreneurs series. Keep your eyes open for opportunities — what pain points do people have, what problems need to be solved, how can you make people’s lives better?</p>
                <a href="#" style="text-decoration: none;"> <p class="readMore" >Read More</p> </a>
              </span>
            </div>
            <hr style="width:100%; border-top: 2px solid rgba(0,0,0,.1);">
          </div>
          <!-- Individual Posts -->
          <div id="bootMargin" class="row homePosts">
            <div class="postContent">
              <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/overhead.png" alt="Over a Desk" style="width: 100%; margin-bottom:25px;">
              <span class="homePostTitle">My Advice for Starting a Business</span>
              <span>
                <p class="homePostContent">Today, I’d like to share the lessons I’ve learned about starting a business, in hopes of encouraging you to get started making something you love.</p>
                <p class="homePostContent">Look for opportunities. This is from my friend Hiten Shah, who will be featured in the Habits of Entrepreneurs series. Keep your eyes open for opportunities — what pain points do people have, what problems need to be solved, how can you make people’s lives better?</p>
                <a href="#" style="text-decoration: none;"> <p class="readMore" >Read More</p> </a>
              </span>
            </div>
            <hr style="width:100%; border-top: 2px solid rgba(0,0,0,.1);">
          </div>
          <!-- Individual Posts -->
          <div id="bootMargin" class="row homePosts">
            <div class="postContent">
              <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/deal.png" alt="Handshake" style="width: 100%; margin-bottom:25px;">
              <span class="homePostTitle">My Advice for Starting a Business</span>
              <span>
                <p class="homePostContent">Today, I’d like to share the lessons I’ve learned about starting a business, in hopes of encouraging you to get started making something you love.</p>
                <p class="homePostContent">Look for opportunities. This is from my friend Hiten Shah, who will be featured in the Habits of Entrepreneurs series. Keep your eyes open for opportunities — what pain points do people have, what problems need to be solved, how can you make people’s lives better?</p>
                <a href="#" style="text-decoration: none;"> <p class="readMore" >Read More</p> </a>
              </span>
            </div>
            <hr style="width:100%; border-top: 2px solid rgba(0,0,0,.1);">
          </div>
        </div>
        <!-- Footer Container -->
        <div class="container-fluid footer" style="margin: 30px auto;">
          <div class="row justify-content-center" style="max-width: 1250px; margin: auto;">
            <div class="col" style="padding: 0;">
              <img id="zenLogoFooter" src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo.png"/>
              <p id="zenFooter"><span id="blueFont">zen</span>business</p>
            </div>

          </div>
          <div class="row" style="max-width: 1250px; margin: auto;">
            <p id="termsPolicy" style="margin-right: 12px;">Terms of Use </p>
            <p style="margin: auto 0; font-size: 24px;"> &bull; </p>
            <p id="termsPolicy" style="margin-left: 12px;"> Privacy Policy</p>
          </div>
          <div class="row" style="max-width: 1250px; margin: auto;">
            <p id="copyright">ZenBusiness &copy; 2017 </p>
          </div>
        </div>
      </div>

    </div>
