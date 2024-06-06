<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyBlog
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="posts__card">
        <img class="posts__card__img" src="<?php echo get_template_directory_uri() ?>/assets/images/img-01.jpeg" alt="">
        <div class="posts__card__detail">
            <span class="posts__card__tag">Technology</span>
        <h2>The Impact of Technology on the Workplace: How Technology is Changing</h2>
        <div class="posts__card__author">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo-1.jpeg" alt="">
            <h3>Jason Francisco</h3>
            <p>August 20,2022</p>
        </div>
        </div>
    </div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				myblog_posted_on();
				myblog_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php myblog_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'myblog' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'myblog' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php myblog_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
