<?php
    /**
     * The main template file
     *
     * @package WPTheme
     * @since WPTheme 1.0
     */
?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-12 col-xs-12">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <h2 style="text-align: center; text-transform: uppercase;"><?php the_title(); ?></h2>
                    <div style="float: left" class="text-muted"><?php the_time('j F Y'); ?> le <?php the_author_posts_link(); ?></div>
                    <p style="text-align: right" class="text-muted"><i class="fa fa-folder"></i> Roinn-sèorsa: <?php the_category(', '); ?></p>
                    <p style="text-align: center"><img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"></p>
                    <?php the_content(); ?>
                    <p><?php the_tags('<h3><i class="fa fa-tag"></i> Tagaichean</h3>', ', '); ?></p>
                    <p>
          <?php
              wp_nav_menu(
                array (
                  'theme_location' => 'comments',
                  'walker'         => new Comments_Links,
                  'items_wrap'     => '<h3><i class="fa fa-reply"></i> Beachdan</h3><p class="menu">Ma tha beachd agaibh air a’ phost seo, cuiribh fios thugam air %3$s.</p>'
              )
            );
          ?>
                    </p>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="navigation"><p style="text-align: center"><strong><?php posts_nav_link(' | '); ?></strong></p></div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
