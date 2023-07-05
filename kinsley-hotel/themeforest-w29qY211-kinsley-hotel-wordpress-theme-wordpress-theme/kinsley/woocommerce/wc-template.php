<?php
/**
 * Template part for displaying woocommerce shop page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kinsley
*/

get_header();
?>

<?php

$shop_bg_img = get_field( 'shop_bg_img', 'option' );
$shop_title = get_field( 'shop_title', 'option' );
$shop_description = get_field( 'shop_description', 'option' );

if ( ! $shop_title ) {
	$shop_title = esc_html__( 'Shop', 'kinsley' );
}

$args = array(
	'delimiter'   => '',
	'wrap_before' => '<ul class="knsl-breadcrumbs">',
	'wrap_after'  => '</ul>',
	'before'      => '<li>',
	'after'       => '</li>',
	'home'        => esc_html__( 'Home', 'kinsley' ),
);

?>

<!-- banner -->
<section class="knsl-banner-simple knsl-transition-bottom<?php if ( $shop_bg_img ) : ?> knsl-banner-white<?php endif; ?>"<?php if ( $shop_bg_img ) : $image = wp_get_attachment_image_url( $shop_bg_img, 'kinsley_1920xAuto' ); ?> style="background-image: url(<?php echo esc_url( $image ); ?>);"<?php endif; ?>>
	<?php kinsley_deco_svg( 'both' ); ?>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">

				<div class="knsl-center knsl-title-frame">
					<div class="knsl-mb-20 knsl-h1-inner"><?php echo wp_kses_post( $shop_title ); ?></div>
					<?php if ( $shop_description ) : ?>
					<p class="knsl-text knsl-mb-30"><?php echo wp_kses_post( $shop_description ); ?></p>
					<?php endif; ?>
					<?php woocommerce_breadcrumb( $args ); ?>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- banner end -->

<?php

$settings = get_field( 'shop_list_args', 'option' );

?>

<!-- blog -->
<section class="knsl-p-0-100 shop-page" id="card-shop-page">
    <div class="container">
			<div class="row">
      <?php if ( $settings['sidebar'] && ! is_product() ) : ?>
			<div class="col-lg-9">
			<?php else : ?>
			<div class="col-lg-12">
			<?php endif; ?>

      <?php woocommerce_content(); ?>

      <?php if ( $settings['sidebar'] && ! is_product() ) : ?>

      <?php if ( is_active_sidebar( 'shop-sidebar' ) ) : ?>
			</div>
			<div class="col-lg-3">
          <div class="col__sedebar">
						<div class="content-sidebar">
								<aside id="secondary" class="widget-area">
									<?php dynamic_sidebar( 'shop-sidebar' ); ?>
								</aside>
						</div>
          </div>
      </div>
      <?php endif; ?>
			<?php else : ?>
			</div>
			<?php endif; ?>
		</div>
 </div>
</section>
<!-- blog end -->

<?php
get_footer();
