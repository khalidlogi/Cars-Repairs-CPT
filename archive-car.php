<?php

/**
 * Template Name: Custom Car Archive Template
 * Template Post Type: car
 */
get_header();


?>
<div class="container">
<div class="container">
    <div class="row">
        <?php
        $args = array(
            'post_type' => 'car',
            'posts_per_page' => -1,
        );
        $query = new WP_Query( $args );
        $posts = $query->posts;
        $column_count = 0;
        foreach ( $posts as $post ) {
            $column_count++;
            ?>
            <div class="col-md-4">
                <div class="car-post">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
            </div>
            <?php
            if ( $column_count == 3 ) {
                $column_count = 0;
                echo '</div><div class="row">';
            }
        }
        wp_reset_postdata();
        ?>
    </div>
</div>

</div>

<?php
get_header(); ?>

