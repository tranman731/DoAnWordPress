<?php

/**
 * template name:home
 */

get_header();
?>

<div class="slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                echo do_shortcode('[smartslider3 slider="2"]');
                ?>
            </div>
        </div>
    </div>
</div>

<div class="block2">
    <div class="container">
        <div class="row">
            <div class="title">
                <h1>VỀ CHÚNG TÔI</h1>
                <p>NHÀ THIẾT KẾ ĐỒNG PHỤC HÀNG ĐẦU VIỆT NAM Ngày nay ĐỒNG PHỤC được biết đến không chỉ đơn thuần là sự đồng nhất về trang phục của một tổ chức, mà còn phản ánh rõ nét: Văn hóa, Chiến lược, Tiềm lực, Sự hội nhập…Hơn hết, ĐỒNG PHỤC là một yếu tố không thể tách rời trong HỆ THỐNG NHẬN DIỆN THƯƠNG HIỆU. Hiểu được tầm quan trọng ấy, A Concept mang đến giải pháp NHẬN DIỆN THƯƠNG HIỆU chuyên nghiệp nhất thông qua chuỗi dịch vụ: TƯ VẤN, THIẾT KẾ, CUNG CẤP ĐỒNG PHỤC...</p>
            </div>
            <div class="box-about">
                <a href="gioi-thieu">View more >>></a>
            </div>
        </div>
    </div>
</div>

<div class="block3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <a href="">"LUXURY IS IN EACH DETAIL"</a>
                </div>
                <div class="img">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="block4">
    <div class="container">
        <div class="row">
            <div class="title">
                <a href=""><span>
                        VÌ SAO CHỌN CHÚNG TÔI
                    </span></a>
            </div>
            <div class="timeline">
                <!-- 1 -->
                <div class="row">
                    <div class="col-md-5 thietke1">
                        <?php $daotao = array('thiet_ke');  ?>
                        <div class="box-daotao1">
                            <?php $values = get_field('thiet_ke'); ?>
                            <img src="<?php echo $values['but']; ?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-2 icon-right">
                        <img src="https://aconcept-uniform.com/wp-content/themes/aconcept-uniform/images/ico_linekhung.png" alt="">
                    </div>
                    <div class="col-md-5 thietke2">
                        <div class="box-daotao2">
                            <a href="">
                                <h2>THIẾT KẾ</h2>
                            </a>
                            <?php $daotao = array('thiet_ke');  ?>
                            <div class="box-block1-content">
                                <?php echo $values['noi_dung']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="row">
                    <div class="col-md-5 thietke3">
                        <div class="box-daotao3">
                            <a href="">
                                <h2>MÀU SẮC</h2>
                            </a>
                            <?php $daotao = array('mau_sac');  ?>
                            <div class="box-block1-content">
                                <?php echo $values['noi_dung']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 icon-left">
                        <img src="https://aconcept-uniform.com/wp-content/themes/aconcept-uniform/images/ico_linekhung2.png" alt="">
                    </div>
                    <div class="col-md-5 thietke4">
                        <div class="box-daotao4">

                            <?php $daotao = array('mau_sac');  ?>
                            <div class="box-daotao3">
                                <?php $values = get_field('mau_sac'); ?>
                                <img src="<?php echo $values['to']; ?>" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="row">
                    <div class="col-md-5 thietke5">
                        <?php $daotao = array('chat_lieu');  ?>
                        <div class="box-daotao5">
                            <?php $values = get_field('chat_lieu'); ?>
                            <img src="<?php echo $values['anh']; ?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-2 icon-right">
                        <img src="https://aconcept-uniform.com/wp-content/themes/aconcept-uniform/images/ico_linekhung.png" alt="">
                    </div>
                    <div class="col-md-5 thietke6">
                        <div class="box-daotao6">
                            <a href="">
                                <h2>Chất Liệu</h2>
                            </a>
                            <?php $daotao = array('chat_lieu');  ?>
                            <div class="box-block1-content">
                                <?php echo $values['noi_dung']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="row">
                    <div class="col-md-5 thietke7">
                        <div class="box-daotao7">
                            <a href="">
                                <h2>CÔNG NĂNG</h2>
                            </a>
                            <?php $daotao = array('cong_nang');  ?>
                            <div class="box-block1-content">
                                <?php echo $values['noi_dung']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 icon-left">
                        <img src="https://aconcept-uniform.com/wp-content/themes/aconcept-uniform/images/ico_linekhung2.png" alt="">
                    </div>
                    <div class="col-md-5 thietke8">
                        <div class="box-daotao8">

                            <?php $daotao = array('cong_nang');  ?>
                            <div class="box-daotao8">
                                <?php $values = get_field('cong_nang'); ?>
                                <img src="<?php echo $values['anh']; ?>" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <!-- 5 -->
                <div class="row">
                    <div class="col-md-5 thietke9">
                        <?php $daotao = array('dich_vu');  ?>
                        <div class="box-daotao9">
                            <?php $values = get_field('dich_vu'); ?>
                            <img src="<?php echo $values['anh']; ?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-2 icon-right">
                        <img src="https://aconcept-uniform.com/wp-content/themes/aconcept-uniform/images/ico_linekhung.png" alt="">
                    </div>
                    <div class="col-md-5 thietke10">
                        <div class="box-daotao10">
                            <a href="">
                                <h2>DỊCH VỤ</h2>
                            </a>
                            <?php $daotao = array('dich_vu');  ?>
                            <div class="box-block1-content">
                                <?php echo $values['noi_dung']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="block5">
    <div class="container">
        <div class="title">
            <a>
                <h3>
                    BỘ SƯU TẬP
                </h3>
            </a>
            <p>A Concept mong muốn đóng góp những khuynh hướng thời trang mang tính chuẩn hóa, sáng tạo, khác biệt và giá trị, góp phần cho cuộc sống thêm đẹp và ý nghĩa hơn.</p>
            <a href="">
                <img src="https://aconcept-uniform.com/wp-content/themes/aconcept-uniform/images/32531758.png" alt="">
            </a>
        </div>

    </div>
</div>

<div class="block8">
    <div class="container">
        <div class="row block8-title">
            <div class="col-md-3">
                <?php $daotao = array('bosuutap');  ?>
                <div class="sub-block-8">
                    <?php $values = get_field('bosuutap'); ?>
                    <div class="sub-img-8">
                        <img src="<?php echo $values['anh1']; ?>" alt="">
                    </div>
                    <div class="sub-text-8">
                        <a href="khach-san">
                            <p class="content">KHÁCH SẠN</p>
                        </a>
                        <p class="sub-text-noidung"> <?php echo $values['noi_dung']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <?php $daotao = array('bosuutap_2');  ?>
                <div class="sub-block-8">
                    <?php $values = get_field('bosuutap_2'); ?>
                    <div class="sub-img-8">
                        <img src="<?php echo $values['anh']; ?>" alt="">
                    </div>
                    <div class="sub-text-8">
                        <a href="resort">
                            <p class="content">RESORT</p>
                        </a>
                        <p class="sub-text-noidung"> <?php echo $values['noi_dung']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <?php $daotao = array('bosuutap_3');  ?>
                <div class="sub-block-8">
                    <?php $values = get_field('bosuutap_3'); ?>
                    <div class="sub-img-8">
                        <img src="<?php echo $values['anh']; ?>" alt="">
                    </div>
                    <div class="sub-text-8">
                        <a href="office">
                            <p class="content">OFFICE</p>
                        </a>
                        <p class="sub-text-noidung"> <?php echo $values['noi_dung']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <?php $daotao = array('bosuutap_4');  ?>
                <div class="sub-block-8">
                    <?php $values = get_field('bosuutap_4'); ?>
                    <div class="sub-img-8">
                        <img src="<?php echo $values['anh']; ?>" alt="">
                    </div>
                    <div class="sub-text-8">
                        <a href="promotion">
                            <p class="content">PROMOTION</p>
                        </a>
                        <p class="sub-text-noidung"> <?php echo $values['noi_dung']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="block10">
    <div class="container-fluid">
        <div class="title">
            <a href="">
                <h3>
                    HOẠT ĐỘNG
                </h3>
            </a>
        </div>
        <div class="video">
            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/xft3fhddn4M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</div>

<div class="block7">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                echo do_shortcode('[smartslider3 slider="6"]');
                ?>
            </div>
        </div>
    </div>
</div>

<div class="block6">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php $daotao = array('banner');  ?>
                <div class="box-daotao11">
                    <?php $values = get_field('banner'); ?>
                    <img src="<?php echo $values['anh']; ?>" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-daotao12">
                    <a href="xuong-san-xuat">
                        <h2>XƯỞNG SẢN XUẤT
                        </h2>
                    </a>
                    <?php $daotao = array('banner');  ?>
                    <div class="box-block6-content">
                        <?php echo $values['noi_dung']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="block9">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="box-daotao13">
                    <a href="xu-huong">
                        <h2>XU HƯỚNG
                        </h2>
                    </a>
                    <?php $daotao = array('xuhuong');  ?>
                    <div class="box-block9-content">
                        <p> <?php echo $values['noi_dung']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-daotao14">
                    <?php $daotao = array('xuhuong');  ?>
                    <div class="box-daotao15">
                        <?php $values = get_field('xuhuong'); ?>
                        <img src="<?php echo $values['anh']; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

get_footer();
