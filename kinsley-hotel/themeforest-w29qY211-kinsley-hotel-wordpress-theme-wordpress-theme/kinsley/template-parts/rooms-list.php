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

$settings = get_field( 'rooms_list_args', 'option' );

$item_classes = 'col-lg-4';

if ( $settings['layout'] == 'column-3' ) {

} elseif ( $settings['layout'] == 'column-2' ) {
  $item_classes = 'col-lg-6';
} else {
  $item_classes = 'col-lg-12';
}

$attr_classes = '';
if ( $settings['details_capacity'] == false ) {
  $attr_classes .= ' attr-details-capacity-false';
}
if ( $settings['details_size'] == false ) {
  $attr_classes .= ' attr-details-size-false';
}
if ( $settings['details_amenity'] == false ) {
  $attr_classes .= ' attr-details-amenity-false';
}
if ( $settings['details_category'] == false ) {
  $attr_classes .= ' attr-details-category-false';
}
if ( $settings['details_attributes'] == false ) {
  $attr_classes .= ' attr-details-attributes-false';
}
if ( $settings['details_view'] == false ) {
  $attr_classes .= ' attr-details-view-false';
}
if ( $settings['details_bed_type'] == false ) {
  $attr_classes .= ' attr-details-bed-type-false';
}
if ( $settings['details_children'] == false ) {
  $attr_classes .= ' attr-details-children-false';
}

if ( $settings['price'] == true && $settings['view_button'] == true && $settings['book_button'] == true ) {
  $attr_classes .= ' attr-price-fullwidth-true';
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

<!-- blog -->
<section class="knsl-p-0-100">
    <div class="container">
      <div class="row <?php echo esc_attr( $attr_classes ); ?>">

        <?php if ( have_posts() ) : ?>
        <?php $i=0; while ( have_posts() ) : the_post(); $i++; $room_id = get_the_ID(); ?>
        <div class="<?php echo esc_attr( $item_classes ); ?>">

          <?php
          set_query_var( 'layout', $settings['layout'] );
          set_query_var( 'index', $i );

          $scroll_animation = '';
          if ( $i > 3 && $settings['layout'] == 'column-3' ) {
            $scroll_animation = 'knsl-scroll-animation';
          }
          if ( $i > 2 && $settings['layout'] == 'column-2' ) {
            $scroll_animation = 'knsl-scroll-animation';
          }
          if ( $i > 1 && $settings['layout'] == 'column-1' ) {
            $scroll_animation = 'knsl-scroll-animation';
          }
          //get_template_part( 'template-parts/content', 'grid' ); ?>
          <?php echo do_shortcode( '[mphb_room id="' . $room_id . '" title="' . $settings['title'] . '" featured_image="' . $settings['featured_image'] . '" gallery="' . $settings['gallery'] . '" excerpt="' . $settings['excerpt'] . '" details="' . $settings['details'] . '" price="' . $settings['price'] . '" view_button="' . $settings['view_button'] . '" book_button="' . $settings['book_button'] . '" class="' . $scroll_animation . '"]' ); ?>

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
    endif; ?>

  </div>
 </div>
</section>
<!-- blog end -->
