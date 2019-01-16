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
            <section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentysixteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>