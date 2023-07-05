<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kinsley
 */

get_header();

$layout = get_field( 'blog_featured_img', 'option' );

?>

	<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/intro' ); ?>

	<div class="knsl-p-0-100">
		<div class="container">
			<div class="row justify-content-center<?php if ( ! class_exists( 'ACF' ) ) : ?> row-archive-single<?php endif; ?>">

				<div class="col-lg-8">
					<?php if ( has_post_thumbnail() && ! $layout ) :
				  $image = get_the_post_thumbnail_url( get_the_ID(), 'kinsley_1920xAuto' ); ?>
					<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" class="knsl-default-img knsl-mb-30">
					<?php endif; ?>

					<?php if ( get_post_type() == 'mphb_room_service' ) : ?>
					<?php 
					$hide_price_badge = get_field( 'hide_price_badge' ); 
					if ( ! $hide_price_badge ) :
					?>
					<div class="knsl-room-features-lg knsl-mb-30">
						<div class="knsl-feature">
							<?php if ( class_exists( 'HotelBookingPlugin' ) ) :
								\MPHB\Views\LoopServiceView::renderPrice();
							endif; ?>
						</div>
					</div>
					<?php endif; ?>
					<?php endif; ?>

					<?php kinsley_before_content(); ?>

					<div class="knsl-blog-post knsl-mb-60">
						<?php get_template_part( 'template-parts/content', 'single' ); ?>
					</div>

					<?php kinsley_single_navigantion(); ?>

		      <?php
					if ( comments_open() || get_comments_number() ) :
						// If comments are open or we have at least one comment, load up the comment template.
						comments_template();
		      endif; ?>

				</div>

			</div>
		</div>
	</div>

	<?php endwhile; ?>

<?php
get_footer();
