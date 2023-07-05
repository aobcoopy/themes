<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kinsley
 */

?>

<?php
$layout = get_query_var( 'layout' );
$index = get_query_var( 'index' );

//content
$image = get_the_post_thumbnail_url( get_the_ID(), 'kinsley_950xAuto' );
$price = get_field( 'price' );
$price_after = get_field( 'price_after' );
$badge = get_field( 'badge' );
$badge_label = get_field( 'badge_label' );
$badge_color = get_field( 'badge_color' );

$scroll_animation = false;

if ( $index > 4 && $layout == 'grid' ) {
	$scroll_animation = true;
}
if ( $index > 4 && $layout == 'list' ) {
	$scroll_animation = true;
}

if ( $layout == 'carousel' ) {
	$scroll_animation = true;
}

?>

<!-- menu card -->
<div class="knsl-menu-card<?php if ( $scroll_animation ) : ?> knsl-scroll-animation<?php endif; ?>">
	<?php if ( $image ) : ?>
	<div class="knsl-cover-frame">
		<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" />
		<?php if ( $badge ) : ?>
		<div class="knsl-badge"<?php if ( $badge_color ) : ?> style="background-color: <?php echo esc_attr( $badge_color ); ?>"<?php endif; ?>><?php echo esc_html( $badge_label ); ?></div>
		<?php endif; ?>
	</div>
	<?php endif; ?>
	<div class="knsl-description-frame">
		<h3 class="knsl-mb-20"><?php the_title(); ?></h3>
		<div class="knsl-text-light knsl-text-sm knsl-mb-20"><?php the_content(); ?></div>
		<?php if ( $price ) : ?>
		<div class="knsl-card-bottom">
			<div class="knsl-price">
				<?php echo esc_html( $price ); ?>
				<span><?php echo esc_html( $price_after ); ?></span>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>
<!-- menu card end -->
