<?php
/**
 * Template part for displaying services
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kinsley
 */

?>

<?php

//options

$layout = get_query_var( 'layout' );
$index = get_query_var( 'index' );

//content
if ( $layout == 'column-1' ) {
	$image = get_the_post_thumbnail_url( get_the_ID(), 'kinsley_1920xAuto' );
} else {
	$image = get_the_post_thumbnail_url( get_the_ID(), 'kinsley_950xAuto' );
}

$scroll_animation = false;

if ( $index > 3 && $layout == 'column-3' ) {
	$scroll_animation = true;
}
if ( $index > 2 && $layout == 'column-2' ) {
	$scroll_animation = true;
}
if ( $index > 1 && $layout == 'column-1' ) {
	$scroll_animation = true;
}

$hide_price_badge = get_field( 'hide_price_badge' );

?>

<!-- service card -->
<div class="knsl-ath-card <?php if ( $scroll_animation ) : ?> knsl-scroll-animation<?php endif; ?>">
	<div class="knsl-cover-frame">
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<?php if ( $image ) : ?>
			<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
			<?php endif; ?>
		</a>
		<?php if ( ! $hide_price_badge ) : ?>
		<div class="knsl-badge">
			<?php if ( class_exists( 'HotelBookingPlugin' ) ) :
				\MPHB\Views\LoopServiceView::renderPrice();
			endif; ?>
		</div>
		<?php endif; ?>
	</div>
	<div class="knsl-card-description">
		<h3 class="knsl-mb-10">
			<?php the_title(); ?>
		</h3>
		<div class="knsl-text knsl-text--h">
			<?php the_excerpt(); ?>
		</div>
		<a href="<?php echo esc_url( get_permalink() ); ?>" class="knsl-btn">
			<?php echo esc_html__( 'Read more', 'kinsley' ); ?>
			<span class="screen-reader-text"><?php echo esc_html__( 'Read more', 'kinsley' ) . '&nbsp;' . get_the_title(); ?></span>
		</a>
	</div>
</div>
<!-- service card end -->
