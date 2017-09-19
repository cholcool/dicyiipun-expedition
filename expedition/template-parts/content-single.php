<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Expedition
 */

?>
	<header class="page-header">
	<div class="csv-search">
	<table>
	<tbody>
	<tr>
	<th>Kanji</th>
	<th>Hiragana</th>
	<th>Romaji</th>
	<th>Thai</th>
	</tr> 
	</tbody>
	</table>
	</div>
	</header>
	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content csv-search">
		<div class='image-full'>
			<?php 
				the_post_thumbnail('full');
			?>
		</div>

		<?php the_content(); ?>
		<div class="nav-previous_next">
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'expedition' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php expedition_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

