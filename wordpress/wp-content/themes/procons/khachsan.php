<?php

/**
 * template name:khachsan
 */

get_header();
?>

<div id="khachsan">
    <div class="container">
        <div class="row">
            <div class="page-header col-md-12">
                <h1 class="page-title"> Khách Sạn</h1>
            </div>
            <div class="page-description text-justify alert-info">
                <p>
                    Nhận diện thương hiệu không đơn thuần là việc tất cả đội ngũ nhân viên mặc cùng một thiết kế, một màu sắc mà quá trình nhận diện thương hiệu phải đúng tầm ở chỗ đồng phục khách sạn, nhà hàng của bạn là tuyệt đối, là duy nhất, là độc tôn. Và Aconcept hân hạnh trở thành người bạn, đối tác chiến lược trên con đường nhận diện, đổi mới và nâng tầm thương hiệu của bạn.
                    <b>Đồng phục khách sạn</b>
                    là một trong những thế mạnh của AConcept với các mẫu thiết kế mới lạ, độc đáo, sự chuyên tâm trong từng đường kim, mũi chỉ. Tất cả đều dựa trên nền tảng của uy tín và chất lượng. Với chúng tôi :
                    <b>Đồng phục khách sạn</b>
                    không chỉ là con đường ngắn nhất giúp khách hàng ghi nhớ thương hiệu mà nó còn là yếu tố giúp thương hiệu của bạn ở lâu hơn trong suy nghĩ khách hàng. Chỉ cần nhìn thấy bộ đồng phục, logo, màu sắc mang tính nhận diện, họ sẽ nghĩ ngay đến bạn. Khi điều đó được xác lập thì nó không chỉ là thành công của tôi, thành công của bạn mà là thành công của chúng ta. Aconcept luôn luôn đổi mới, cập nhật , tư duy về đồng phục khách sạn, nhà hàng một cách mới mẻ và đẳng cấp nhất thông qua việc học hỏi, đón đầu các xu hướng và không ngừng tự trau dồi bản thân của đội ngũ nhân viên. Không còn là “Áo dài, bộ quần áo vest, váy liền, áo sơ mi, quần âu (quần tây) và chân váy zuyp… theo kiểu mẫu thông thường, may sẵn mà ở Aconcept mọi thứ đều mang tiếng nói riêng, tiếng nói của thương hiệu, của đẳng cấp của chất lượng dịch vụ. Đối với đồng phục khách sạn, chúng tôi hướng đến các sản phẩm tốt nhất với chất liệu vải cao cấp, may đo theo chuẩn dáng người mặc.
                    <b>Vải may đồng phục khách sạn</b>
                    là loại vải có thành phần đa dang như cotton, sơ mi, lụa cao cấp, bền màu, mềm mại mang đến vẻ đẹp sang trọng và sự thoải mái tuyệt đối cho người mặc. Dựa trên những điều đó, Aconcept hân hạnh trở thành đối tác của nhiều khách sạn nổi tiếng như : Sheraton, Melia Yangon, Fusionsuite Sài Gòn, Pullman Sài Gòn… A Concept mong muốn đóng góp những
                    <b>mẫu đồng phục khách sạn </b>
                    trở thành xu hướng thời trang mang tính chuẩn hóa, sáng tạo, khác biệt và giá trị, góp phần cho cuộc sống thêm đẹp và ý nghĩa hơn.”
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
                            'post_type' => 'khach_san',
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
