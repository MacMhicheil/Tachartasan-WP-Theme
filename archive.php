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
            <div class="page-header">
                <h2 style="text-align: center; text-transform: uppercase"><?php the_archive_title(); ?></h2>
            </div>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="text-muted"><?php the_time('j F Y'); ?> le <?php the_author_posts_link(); ?></p>
                    <p><?php the_excerpt(); ?></p>
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