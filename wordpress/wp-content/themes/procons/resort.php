<?php

/**
 * template name:resort
 */

get_header();
?>
<div id="khachsan">
    <div class="container">
        <div class="row">
            <div class="page-header col-md-12">
                <h1 class="page-title">RESORT</h1>
            </div>
            <div class="page-description text-justify alert-info">
                <p>
                Kiểu dáng thanh lịch – Thiết kế tinh tế phù hợp cho những resort cao cấp
                </p>
            </div>
        </div>
    </div>
</div>

<div id="tintuc">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tinTuc">
                    <div class="row" style="justify-content: center;">

                        <?php
                        // $args = array(
                        //     'category__in' => array(76),
                        //     'posts_per_page' => 10,
                        // );
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'nghimat',
                            // 'category__in' => array(76),
                            'posts_per_page' => 6,
                            'paged' => $paged
                        );
                        $custom_query = new WP_Query($args);

                        $total_pages = $custom_query->max_num_pages;
                        $current_page = max(1, get_query_var('paged'));

                        $pagination_args = array(
                            'base'         => esc_url_raw(add_query_arg('paged', '%#%')),
                            'format'       => '',
                            'total'        => $total_pages,
                            'current'      => $current_page,
                            'show_all'     => false,
                            'end_size'     => 1,
                            'mid_size'     => 2,
                            'prev_next'    => true,
                            'prev_text'    => __('« Previous'),
                            'next_text'    => __('Next »'),
                            'type'         => 'plain',
                            'add_args'     => false,
                            'add_fragment' => ''
                        );
                        $my_query = new WP_Query($args);
                        if ($my_query->have_posts()) {
                            while ($my_query->have_posts()) {
                                $my_query->the_post();

                                echo '<div class="col-lg-3 col-md-3 col-sm-6 box-tintuc1">
										<div class="box-img"><a href="';
                                echo get_post_permalink();
                                echo '">';
                                // echo get_the_content();
                                $postid = get_the_id();
                                echo get_the_post_thumbnail($postid, 'thumbnail', array('class' => 'thumnail'));
                                echo '</a></div>
										<div class="box-content">
										<div class="box-title"><a href="';
                                echo get_post_permalink();
                                echo '">';
                                echo get_the_title();
                                echo '</a></div><div class="nd-sub-content">';
                                echo get_the_excerpt();
                                echo '</div>	
										</div></div>';
                            }
                        } else {
                        }
                        wp_reset_postdata();

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
echo '<div class="pagination">' . paginate_links($pagination_args) . '</div>';
get_footer();
