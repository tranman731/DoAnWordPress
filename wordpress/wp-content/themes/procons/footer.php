<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package procons
 */

?>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="footer-text">
					<span>
						LIÊN HỆ CHÚNG TÔI
					</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="footer-left">
					<h3>Về A CONCEPT</h3>
					<div class="sub-footer-left">
						<nav id="site-navigation1" class="main-navigation1">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'devthemes'); ?></button>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="dangkitinnhan">
					<div class="title">
						<p>Đăng ký để được tư vấn</p>
					</div>
					<div class="footer-form">
						<form action="">
							<input type="text" value="Điện Thoại">
							<input type="text" value="Email">
							<input type="button" class="gui" value="Gửi">
						</form>
					</div>
					<div class="lienhe">
						Liên Hệ
					</div>
					<div class="congty">
						CÔNG TY TNHH A CONCEPT
					</div>
				</div>
				<div class="menu-footer">
					<ul>
						<li>TẦNG 1, TÒA NHÀ AN PHÚ PLAZA, 117-119 LÝ CHÍNH THẮNG, QUẬN 3 - TP HỒ CHÍ MÌNH - VIỆT NAM</li>
						<li>0909 904 364 </li>
						<li>mr.hieutruong@gmail.com</li>
						<li>http://aconcept-uniform.com/</li>
						<li>Sitemap</li>
					</ul>
				</div>
				<div class="copy-right">
					<p>Copyright @ 2018 A Concept. All rights reserve. </p>
					Designed by
					<a href=""> Webgool </a>
					<p></p>
					<p>Mã số doanh nghiệp : 0313547947 do sở Kế hoạch Đầu tư Hồ Chí Minh cấp ngày </p>
					<p>24/11/2015</p>
				</div>
			</div>
		</div>

	</div>
</footer><!-- #colophon -->

<div class="scroll-top" style="display: block;">
	<a href="">
		<img src="https://aconcept-uniform.com/wp-content/themes/aconcept-uniform/images/icon-scroll-top.png" alt="lên trang đầu">
	</a>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>