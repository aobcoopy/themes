<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
					<h1 class="knsl-mb-20 knsl-h1-inner"><?php echo wp_kses_post( get_the_archive_title() ); ?></h1>
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
