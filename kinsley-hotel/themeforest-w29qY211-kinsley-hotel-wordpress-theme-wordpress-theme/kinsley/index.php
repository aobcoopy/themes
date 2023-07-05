<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kinsley
 */

get_header();
?>

	<!-- banner -->
	<section class="knsl-banner-simple knsl-transition-bottom">
		<?php kinsley_deco_svg( 'both' ); ?>

		<div class="container">
			<div class="row">
				<div class="col-lg-12">

					<div class="knsl-center knsl-title-frame">
						<h1 class="knsl-mb-20 knsl-h1-inner"><?php echo esc_html__( 'Latest Posts', 'kinsley' ); ?></h1>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- banner end -->

  <?php get_template_part( 'template-parts/archive-list' ); ?>

<?php
get_footer();
