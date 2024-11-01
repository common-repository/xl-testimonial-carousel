<?php

function xl_testimonial_shortcode($atts) {

    $xl_loop = new WP_Query(
        array(
            'post_type' => 'testimonial',
            'posts_per_page' => 5,
        )
    );

    $output = '<div class="xl-carousel">';
        if($xl_loop->have_posts()){
            while($xl_loop->have_posts()) {
                $xl_loop->the_post();

                $xl_content = wpautop(get_the_content());
                $xl_title = get_the_title();
                $xl_thumbnail = get_the_post_thumbnail(get_the_ID(), array( 80, 80));

                $output .= '<div class="xl-testi">';
                    $output .= '<div class="xl-content">'.$xl_content.'</div>';
                    $output .= '<div class="xl-client">';
                        if(!empty($xl_thumbnail)) {
                            $output .= '<div class="xl-thumb">';
                                $output .= $xl_thumbnail;
                            $output .= '</div>';
                        }
                        $output .= '<div class="xl-info">';
                            $output .= '<div class="xl-name">'.$xl_title.'</div>';
                            $output .= '<div class="xl-country">'.get_post_meta( get_the_ID(), '_xl_country', true ).'</div>';
                        $output .= '</div>';
                    $output .= '</div>';
                $output .= '</div>';
            } //end while xl_loop
        } else{
            echo 'No Testimonial Found.';
        }
        wp_reset_postdata();
        wp_reset_query();
    $output .= '</div>';

    return $output;
}
add_shortcode('xl_testimonial', 'xl_testimonial_shortcode');
