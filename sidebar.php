<?php
    /**
     * The sidebar template file
     *
     * @package WPTheme
     * @since WPTheme 1.0
     */
?>

<p style="text-align: center">
    <?php echo get_avatar( get_the_author_meta( 'ID' ), 125 ); ?>
</p>

<h3 style="text-align: center; padding-bottom: 15px;">
    <?php the_author(); ?>
</h3>

<p style="text-align: justify">
    <?php the_author_description(); ?>
</p>

<p>
    <?php
        wp_nav_menu( array(
            'theme_location'    => 'social',
            'menu-class'        => 'menu',
            'container'         => false,
            'items_wrap'        => '%3$s'
            )
        );
    ?>
</p>

<p>
    <form role="search" method="get" class="search-form input-group-prepend" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'WPTheme' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </form>
</p>

<h3>Roinnean-seòrsa</h3>
<p>
    <?php wp_list_categories(
        array(
            'style'       =>  '',
            'show_count'  =>  true,
            'orderby'     =>  'name',
            'order'       =>  'ASC',
            'hide_empty'  => true
            )  
        );
    ?>
</p>
    
<h3>Mìosachan</h3>
<p>
    <?php wp_get_archives(
        array(
            'format'          => 'custom',
            'before'          => '',
            'after'           => '<br/>',
            'type'            => 'monthly',
            'show_post_count' => true
            )
        );
    ?>
</p>