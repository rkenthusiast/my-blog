<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyBlog
 */

dynamic_sidebar( 'footer-widget-area' );

?>
<!-- <footer class="footer">
	<div class="footer__container">

		<div class="footer__about">
			<h2>About</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

			<a href="mailto:rkenthusiast@gmail.com" class="footer__email"><span>Email : </span>info@rkenthusiast.com</a>
			<a href="tel:92033344" class="footer__phone"><span>Phone : </span>+351920335467</a>
		</div>
		<div class="footer__menu">
			<div class="footer__menu__link footer__menu__link--1">
				<h2>Quick Links</h2>
				<?php
					// wp_nav_menu(
					// array(
					// 'theme_location' => 'footer_menu',
					// 'menu_class'     => 'footer__menu__container', // Optional CSS class for the menu
					// )
					// );
				?>
			</div>
			<div class="footer__menu__link footer__menu__link--2">
				<h2>Category</h2>
				<?php
					// wp_nav_menu(
					// array(
					// 'theme_location' => 'footer_menu',
					// 'menu_class'     => 'footer__menu__container', // Optional CSS class for the menu
					// )
					// );
				?>
			</div>
		</div>
		<div class="footer__subscribe">

			<form action="/submit-form" method="POST">
				<div class="footer__subscribe__top">
					<h2>Weekly Newsletter</h2>
					<p>Get blog article and offer via email</p>
				</div>
				<div class="footer__subscribe__bottom">
					<input type="text" id="title" name="title" required>
					<button type="button" onclick="return false;">Submit</button>
				</div>
			</form>
		</div>

		<div class="footer__copyright">
			<div class="footer__copyright__left">
				
				<div class="footer__copyright__description">
					<h3>MyBlog</h3>
					<span>© JS Template 2023. All Rights Reserved.</span>
				</div>
			</div>
			<div class="footer__copyright__right">
				<nav>
					<?php
						// wp_nav_menu(array(
						// 'theme_location' => 'menu-1',
						// 'container_class' => 'footer__copyright__menu',
						// 'depth' => 1,
					// ));
					?>
				</nav>

			</div>
		</div>

	</div>

</footer> -->
<?php
get_sidebar();

?>
</div><!-- #page -->

<?php 
wp_footer(); ?>

</body>
</html>
