<?php get_header(); ?>


  <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
      <div id="bootMargin" class="row" style="max-width: 1140px; margin: 30px auto;">
        <?php if(has_post_thumbnail()) : ?>
          <div class="single_thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>); width: 100%; height: 400px; margin: auto; background-size: cover; border-radius: 9px;">
          </div>
        <?php endif; ?>

        <div class="single_page">
          <p class="single_title"><?php the_title(); ?></p>
          <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" style="color: #363636; text-decoration: none;"> <p class="single_author">by <span style="font-weight: bold;"> <?php the_author(); ?> </span> </p> </a>
          <p class="single_date"> - <?php the_time('F j, Y g:i a'); ?></p>
          <div class="single_content">
            <?php echo the_content() ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php else : ?>
    <p><?php __('No Posts Found'); ?></p>
  <?php endif; ?>


<?php get_footer(); ?>
