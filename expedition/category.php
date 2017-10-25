<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package expedition
 */
get_header(); ?>

  <div class="wrapper page-inner-title">
    <div class="container">
        <div class="row">
            <div class="column-md-12 column-sd-12 column-xsd-12">
          <header class="entry-header">
            <?php
              the_archive_title( '<h1 class="entry-title">', '</h1>' );
              the_archive_description( '<div class="taxonomy-description">', '</div>' );
            ?>
          </header><!-- .entry-header -->
            </div>
        </div>
    </div>
  </div>

  <?php  do_action( 'expedition_action_after_title' ); ?>

  <div id="content" class="site-content archive-page">
    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">
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

      <?php if ( have_posts() ) : ?>
        <?php
            if ( is_single() ) {
                $cats =  get_the_category();
                $cat = $cats[0];
            } else {
                $cat = get_category( get_query_var( 'cat' ) );
            }
            $cat_slug = $cat->slug;
        $page = get_query_var('paged');
        $page = (!empty($page) ? $page : 1);
        $args = array (
            'category_name' =>  $cat_slug,
            'paged'         =>  $page,
            'order'         =>  'ASC',
            'orderby'       =>  'title'
          );
        query_posts( $args);
        ?>
        <?php while ( have_posts() ) : ?>  <?php the_post(); ?>

          <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

        <?php endwhile; ?>  

        <?php
        the_posts_pagination( array(
          'prev_text'          => 'Prev',
          'next_text'          => 'Next'
          ) );
        ?>

      <?php else : get_template_part( 'template-parts/content', 'none' ); endif; ?>


      </main><!-- #main -->
    </div><!-- #primary -->

    <?php get_sidebar(); ?>

  </div>
<?php get_footer(); ?>