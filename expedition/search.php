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
				<h3 class="page-title">
					<?php printf( esc_html__( 'คำศัพท์ที่ค้นหา : %s', 'expedition' ), '<span>' . get_search_query() . '</span>' ); ?>
				</h3>
				<div class="search-count">
					ผลการค้นหาทั้งหมด :　<?php echo $wp_query->found_posts; ?> รายการ
				</div>
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

			the_posts_pagination( array(
			    'mid_size' => 2,
			    'prev_text' => __( 'Prev', 'expedition' ),
			    'next_text' => __( 'Next', 'expedition' ),
			) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

<header class="page-header ">
<h3 class="page-title"><?php printf( esc_html__( 'Words related to : %s', 'expedition' ), '<span>"' . get_search_query() . '"</span>' ); ?></h3>
<div class="csv-search">
<?php
$related = get_posts( array( "s"=>get_search_query() ) );

if( $related ) foreach( $related as $post ) {
	setup_postdata($post);  
	get_template_part( 'template-parts/content', 'search' ); 
}
wp_reset_postdata(); 
?>
</div>
</header>

		</main><!-- #main -->
	</section><!-- #primary -->
	<?php
		get_sidebar();
	?>
</div>
<?php
get_footer();
?>