<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kinsley
 */

get_header();
?>

<?php

$error_title = esc_html__( '404', 'kinsley' );
$title = get_field( 'p404_title', 'option' );
if ( ! $title ) {
	$title = esc_html__( 'Oops! Where are we?', 'kinsley' );
}
$content = get_field( 'p404_content', 'option' );
if ( ! $content ) {
	$content = '<p>' . esc_html__( 'We are unable to find the page you are looking for.', 'kinsley' ) . '</p>';
}
$button = get_field( 'p404_button', 'option' );
if ( ! $button ) {
	$button = esc_html__( 'Back to Home', 'kinsley' );
}

?>

<!-- banner -->
<section class="knsl-banner-simple knsl-banner-error">
	<?php kinsley_deco_svg( 'both' ); ?>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">

				<div class="knsl-center knsl-title-frame">
					<?php if ( $title ) : ?>
					<h1 class="knsl-h1-inner"><?php echo esc_html( $title ); ?></h1>
					<?php endif; ?>
					<div class="knsl-404"><?php echo esc_html( $error_title ); ?></div>
					<?php if ( $content ) : ?>
					<div class="knsl-text knsl-mb-30">
						<?php echo wp_kses_post( $content ); ?>
					</div>
					<?php endif; ?>
					<?php if ( $button ) : ?>
					<a href="<?php echo esc_url( home_url() ); ?>" class="knsl-btn"><?php echo esc_html( $button ); ?></a>
					<?php endif; ?>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- banner end -->

<?php
get_footer();
