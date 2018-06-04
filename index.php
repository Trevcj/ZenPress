<?php get_header(); ?>

<!-- Blog Post Container -->
<div id="bootMargin" class="row" style="max-width: 1200px; margin: auto;">
  <!-- Individual Posts -->
  <div class="row" style="margin: auto 15px;">
    <?php $i = 0 ?>
    <?php if(have_posts()) : ?>

      <?php while(have_posts()) : the_post(); ?>
        <?php $postid = get_the_ID(); ?>
        <?php $i++ ?>
        <?php if ($i === 1) : ?>
          <div class="col-sm-12">
              <div class="card" style="border: 1px solid #E6E6E6; min-height: 452px; max-height: 452px; margin: 15px auto; border-radius: 9px; width: 100%;">
                <div class="row">
                  <?php if(has_post_thumbnail()) : ?>
                    <div class="col-md-7">
                      <div id="radius" class="card-img-bottom back_img_most_recent" style="background-image: url(<?php the_post_thumbnail_url(); ?>); ">
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="card-block" style="display: flex;">
                        <div class="most_recent">
                          <div class="card-title blogpost_title_recent"><?php the_title(); ?></div>
                          <div class="card-text blogpost_excerpt_recent"><?php echo excerpt(35); ?></div>
                          <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                            <div class="readMore">Read More</div>
                          </a>
                        </div>
                        <footer class="card_foot">
                          <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" style="text-decoration: none;"> <p class="card-text foot_author"><?php the_author(); ?></p> </a>
                          <p class="card-text foot_date"><?php the_time('F j, Y g:i a'); ?></p>
                        </footer>
                      </div>
                  <?php else : ?>
                    <div class="col-md-12">
                      <div class="card-block" style="display: flex; height: 450px">
                        <div class="most_recent text">
                          <div class="card-title blogpost_title_recent text"><?php the_title(); ?></div>
                          <div class="card-text blogpost_excerpt_recent text"><?php echo excerpt(45); ?></div>
                          <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                            <div class="readMore text">Read More</div>
                          </a>
                        </div>
                        <footer class="card_foot text">
                          <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" style="text-decoration: none;"> <p class="card-text foot_author"><?php the_author(); ?></p> </a>
                          <p class="card-text foot_date"><?php the_time('F j, Y g:i a'); ?></p>
                        </footer>
                      </div>
                  <?php endif; ?>

                  </div>
                </div>
              </div>
          </div>

        <?php else : ?>
          <div class="col-sm-4">
            <?php if(has_post_thumbnail()) : ?>
              <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                <div class="card" style="border: 1px solid #E6E6E6; min-height: 322px; max-height: 322px; margin: 15px auto; border-radius: 9px">
                  <div class="back_img" style="background-image: url(<?php the_post_thumbnail_url(); ?>); ">
                  </div>
                  <div class="card-body">
                    <div class="card-title blogpost_title"><?php the_title(); ?></div>
                    <div class="card-text blogpost_excerpt"><?php echo excerpt(18); ?></div>
                  </div>
                  <footer class="card_foot">
                    <p class="card-text foot_date"><?php the_time('F j, Y g:i a'); ?></p>
                  </footer>
                </div>
              </a>
            <?php else : ?>
              <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                <div class="card" style="border: 1px solid #E6E6E6; min-height: 322px; max-height: 322px; margin: 15px auto; border-radius: 9px">

                  <div class="card-body">
                    <div class="card-title blogpost_title"><?php the_title(); ?></div>
                    <div class="card-text blogpost_excerpt"><?php echo excerpt(58); ?></div>
                  </div>
                  <footer class="card_foot">
                    <p class="card-text foot_date"><?php the_time('F j, Y g:i a'); ?></p>
                  </footer>
                </div>
              </a>
            <?php endif; ?>

          </div>
        <?php endif; ?>

      <?php endwhile; ?>
    <?php else : ?>
      <p><?php __('No Posts Found'); ?></p>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
