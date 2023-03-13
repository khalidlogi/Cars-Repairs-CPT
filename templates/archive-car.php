<?php

/**
 * Template Name: Custom Car Archive Template
 * Template Post Type: car
 */
get_header();

while (have_posts()) :

    the_post();

    get_template_part('content', 'page');

    $archive_query_post_type = get_post_meta(get_queried_object_id(), 'cpt_archive_query_post_type', true);

    if( $archive_query_post_type && is_string($archive_query_post_type) ) {
        $args = array(
            'post_type' => $archive_query_post_type,
            'posts_per_page'=> -1,
            'orderby'       => 'title',
        );

        $archive_query = new WP_Query( $args );

        if ( $archive_query->have_posts() ) {
            while ( $archive_query->have_posts() ) {
                $archive_query->the_post();
                get_template_part('content', get_post_type() );
            }
        }

        wp_reset_postdata();
    }

endwhile;

get_footer();