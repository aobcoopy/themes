<?php
if ( !defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php get_header(); ?>

<?php
/**
 * @hooked \MPHB\Views\SingleRoomTypeView::renderPageWrapperStart - 10
 */
do_action( 'mphb_render_single_room_type_wrapper_start' );
?>

<?php
while ( have_posts() ) : the_post();
	$current_id = get_the_ID();
	$is_built_with_elementor = \Elementor\Plugin::$instance->documents->get( $current_id )->is_built_with_elementor();

	if ( post_password_required() ) {
		echo get_the_password_form();
		return;
	}

	if ( ! $is_built_with_elementor ) :
		get_template_part( 'template-parts/intro' );
	?>
	<div class="knsl-room-default-post knsl-p-0-100">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
	<?php	endif; ?>

	<div <?php post_class(); ?>>

		<?php do_action( 'mphb_render_single_room_type_before_content' ); ?>

		<?php
		if ( $is_built_with_elementor ) :
			the_content();
		else :
			/**
			 * @hooked \MPHB\Views\SingleRoomTypeView::renderTitle				- 10
			 * @hooked \MPHB\Views\SingleRoomTypeView::renderFeaturedImage		- 20
			 * @hooked \MPHB\Views\SingleRoomTypeView::renderDescription		- 30
			 * @hooked \MPHB\Views\SingleRoomTypeView::renderPrice				- 40
			 * @hooked \MPHB\Views\SingleRoomTypeView::renderAttributes			- 50
			 * @hooked \MPHB\Views\SingleRoomTypeView::renderCalendar			- 60
			 * @hooked \MPHB\Views\SingleRoomTypeView::renderReservationForm	- 70
			 */
			do_action( 'mphb_render_single_room_type_content' );
		endif; ?>

		<?php do_action( 'mphb_render_single_room_type_after_content' ); ?>

	</div>

	<?php if ( ! $is_built_with_elementor ) : ?>
				<?php
				if ( comments_open() || get_comments_number() ) :
					// If comments are open or we have at least one comment, load up the comment template.
					comments_template( '/hotel-booking/mphb-comments.php' );
				endif; ?>

				</div>
			</div>
		</div>
	</div>
	<?php	endif; ?>

	<?php
endwhile;
?>

<?php
/**
 * @hooked \MPHB\Views\SingleRoomTypeView::renderPageWrapperEnd - 10
 */
do_action( 'mphb_render_single_room_type_wrapper_end' );
?>

<?php get_footer(); ?>
