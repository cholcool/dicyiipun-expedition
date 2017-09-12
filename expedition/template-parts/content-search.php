<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package expedition
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header csv-search">
		<?php if ( 'post' === get_post_type() ) : ?>
			<?php  sprintf(  esc_html( the_content() )  ); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->
	<footer class="entry-footer">
		<?php expedition_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
