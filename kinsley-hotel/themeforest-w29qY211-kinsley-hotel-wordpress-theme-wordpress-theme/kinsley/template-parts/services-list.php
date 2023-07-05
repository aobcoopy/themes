<?php
/**
 * Template part for displaying accommodation archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kinsley
 */

?>

<?php

$page_id = get_the_ID();

$settings = get_field( 'services_list_args', 'option' );

$item_classes = 'col-lg-4';

if ( $settings['layout'] == 'column-3' ) {

} elseif ( $settings['layout'] == 'column-2' ) {
  $item_classes = 'col-lg-6';
} else {
  $item_classes = 'col-lg-12';
}

$attr_classes = '';

if ( $settings['title'] == false ) {
  $attr_classes .= ' attr-title-false';
}
if ( $settings['excerpt'] == false ) {
  $attr_classes .= ' attr-desc-false';
}
if ( $settings['price'] == false ) {
  $attr_classes .= ' attr-price-false';
}
if ( $settings['view_button'] == false ) {
  $attr_classes .= ' attr-readmore-false';
}

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

<!-- services -->
<section class="knsl-p-0-80">
  <div class="container">
    <div class="row <?php echo esc_attr( $attr_classes ); ?>">
      <?php if ( have_posts() ) : ?>
      <?php $i=0; while ( have_posts() ) : the_post(); $i++; ?>
      <div class="<?php echo esc_attr( $item_classes ); ?>">

        <?php
        set_query_var( 'layout', $settings['layout'] );
        set_query_var( 'index', $i );
        get_template_part( 'template-parts/content', 'service' ); ?>

      </div>
      <?php endwhile; ?>

      <!-- pagination -->
      <div class="knsl-pagination">
        <?php
            echo paginate_links( array(
                'prev_text'     => esc_html__( 'Prev', 'kinsley' ),
                'next_text'     => esc_html__( 'Next', 'kinsley' ),
            ) );
        ?>
      </div>
      <!-- pagination end -->

      <?php else :
        get_template_part( 'template-parts/content', 'none' );
      endif; wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<!-- services end -->
