<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package expedition
 */

get_header(); ?>
<div id="content" class="site-content">
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h3 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'expedition' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
				<div class="csv-search">
				<table>
				<tbody>
				<tr>
				<th>Kanji</th>
				<th>Hiragana</th>
				<th>Romanji</th>
				<th>Thai</th>
				</tr> 
				</tbody>
				</table>
				</div>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
	<?php
		get_sidebar();
	?>
</div>
<?php
get_footer();
