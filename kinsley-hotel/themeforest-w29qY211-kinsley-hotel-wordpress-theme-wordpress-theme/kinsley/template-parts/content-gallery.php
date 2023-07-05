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

/*options*/
$theme_lightbox = get_field( 'portfolio_lightbox_disable', 'option' );

/* post content */
$current_categories = get_the_terms( get_the_ID(), 'gallery_categories' );
$categories_slugs_string = '';
if ( $current_categories && ! is_wp_error( $current_categories ) ) {
	foreach ( $current_categories as $key => $value ) {
		$categories_slugs_string .= $value->slug . ' ';
	}
}

$scroll_animation = false;

if ( $index > 3 && $layout == 'column-3' ) {
	$scroll_animation = true;
}

$id = get_the_ID();
$type = get_field( 'type', $id );
$href = get_the_post_thumbnail_url( $id, 'kinsley_1920xAuto' );
$magnific_attr = 'image';
$preview_icon = 'fas fa-search-plus';
$images = false;
$href_target = false;
$image = get_the_post_thumbnail_url( get_the_ID(), 'kinsley_950xAuto' );
$title = get_the_title();

if ( ! $theme_lightbox ) {
	$magnific_prefix = 'magnific';
} else {
	$magnific_prefix = 'media';
}

if ( $type != 0 ) {
	$magnific_prefix = 'magnific';
}

if ( $type == 1 ) {
	$href = '#gallery-' . $id;
	$magnific_attr = 'open-gallery';
	$preview_icon = 'fas fa-images';
	$images = get_field( 'gallery', $id );
} elseif ( $type == 2 ) {
	$href = get_field( 'video_url', $id );
	$magnific_attr = 'video';
	$preview_icon = 'fas fa-video';
} elseif ( $type == 3 ) {
	$href = get_field( 'video_file', $id );
	$magnific_attr = 'video';
	$preview_icon = 'fas fa-video';
} elseif ( $type == 4 ) {
	$href = get_field( 'link', $id );
	$href_target = true;
	$magnific_attr = 'link';
	$preview_icon = 'fas fa-link';
} elseif ( $type == 5 ) {
	$href = '#popup-' . $id;
	$magnific_attr = 'content';
	$preview_icon = 'fas fa-plus';
} else { }

?>

<div class="knsl-masonry-grid-item knsl-masonry-grid-item-33 <?php echo esc_attr( $categories_slugs_string ); ?>">
	<?php if ( $image ) : ?>
	<!-- gallery item -->
	<a<?php if ( $href_target ) : ?> target="_blank"<?php endif; ?> data-<?php echo esc_attr( $magnific_prefix ); ?>-<?php echo esc_attr( $magnific_attr ); ?><?php if ( $type == 0 ) : ?> data-elementor-lightbox-slideshow="gallery-grid" data-elementor-lightbox-title="<?php echo esc_attr( $title ); ?>"<?php endif; ?> href="<?php echo esc_url( $href ); ?>" class="knsl-gallery-item<?php if ( $scroll_animation ) : ?> knsl-scroll-animation<?php endif; ?>">
		<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" />
		<span class="knsl-zoom"><i class="<?php echo esc_attr( $preview_icon ); ?>"></i></span>
	</a>
	<?php if( $images ) : ?>
	<div id="gallery-<?php echo esc_attr( $id ); ?>" class="mfp-hide">
		<?php foreach( $images as $image ): ?>
		<?php $gallery_img_src = wp_get_attachment_image_src( $image['ID'], 'kinsley_1920xAuto' ); ?>
		<a href="<?php echo esc_url( $gallery_img_src[0] ); ?>"></a>
		<?php endforeach; ?>
	</div>
	<?php endif; ?>
	<?php if ( $type == 5 ) : ?>
	<div id="popup-<?php echo esc_attr( $id ); ?>" class="popup-box mfp-fade mfp-hide">
		<div class="single-post-text">
			<?php echo apply_filters( 'the_content', get_field( 'content', $id ) ); ?>
		</div>
	</div>
	<?php endif; ?>
	<!-- gallery item end -->
	<?php endif; ?>
</div>
