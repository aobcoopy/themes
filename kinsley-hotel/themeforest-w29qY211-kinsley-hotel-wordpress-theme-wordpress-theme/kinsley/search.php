<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package kinsley
 */

get_header();

$page_id = get_the_ID();

?>

	<!-- banner -->
	<section class="knsl-banner-simple knsl-transition-bottom">
		<?php kinsley_deco_svg( 'both' ); ?>

		<div class="container">
			<div class="row">
				<div class="col-lg-12">

					<div class="knsl-center knsl-title-frame">
						<h1 class="knsl-mb-20 knsl-h1-inner">
							<?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search: %s', 'kinsley' ), '<span>' . esc_html( get_search_query() ) . '</span>' );
							?>
						</h1>
						<p class="knsl-text knsl-mb-30">
							<?php echo esc_html__( 'Search Results', 'kinsley' ); ?>
						</p>
						<?php kinsley_breadcrumbs( $page_id ); ?>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- banner end -->

  <?php get_template_part( 'template-parts/archive-list' ); ?>

<?php
get_footer();
