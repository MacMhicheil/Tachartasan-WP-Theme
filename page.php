<?php
    /**
     * The main template file
     *
     * @package WPTheme
     * @since WPTheme 1.0
     */
?>

<?php get_header(); ?>
<p style="text-align:right; padding: 15px;"><a class="btn btn-success" href="http://tachartasan.info/wp-admin/post-new.php?post_type=event" role="button"><i class="fa fa-plus"></i> Tachartas</a> no <a class="btn btn-primary" href="http://tachartasan.info/wp-admin/post-new.php?post_type=event-recurring" role="button"><i class="fa fa-plus"></i> Tachartas Ath-chùrsach</a></p>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <?php if ( have_posts() ) : ?>
              <?php while ( have_posts() ) : the_post(); ?>
                  <?php the_content(); ?>
              <?php endwhile; ?>
          <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
