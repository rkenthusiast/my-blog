<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyBlog
 */

$post_id        = get_the_ID();
$first_tag      = get_the_terms( $post_id, 'post_tag' )[0] ?? null;
$author_id      = get_the_author_meta( 'ID' );
$author_avatar  = get_avatar_url( $author_id, array( 'size' => 48 ) );
$author_name    = get_the_author();
$post_date      = get_the_date( 'F j, Y' );
$featured_image = get_the_post_thumbnail_url( $post_id, 'large' );
$isSingular = is_singular()?'is-singular':'';


	echo '<div class="posts__card '.esc_attr($isSingular).'">';
	if ( $featured_image ) {
		echo '<img class="posts__card__img" src="' . esc_url( $featured_image ) . '" alt="' . esc_attr( get_the_title() ) . '" />';
	}
	echo '<div class="posts__card__detail">';
	if ( $first_tag ) {
		echo '<span class="posts__card__tag">' . esc_html( $first_tag->name ) . '</span>';
	}
	echo '<h2><a href="' . get_the_permalink() . '">' . esc_html( get_the_title() ) . '</a></h2>';
	echo '<div class="posts__card__author">';
	echo '<img src="' . esc_url( $author_avatar ) . '" alt="' . esc_attr( $author_name ) . '" />';
	echo '<h3>' . esc_html( $author_name ) . '</h3>';
	echo '<p>' . esc_html( $post_date ) . '</p>';
	echo '</div>';
	echo '</div>';
	echo '</div>';

	if ( is_singular() ) 
		the_content();