<?php
/**
 * Template part for displaying booking popup
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kinsley
 */

?>

<?php

$book_pe = get_field( 'rooms_popup_enable', 'option' );
$book_p = get_field( 'rooms_popup_args', 'option' );

if ( ! $book_p['id'] ) {
  $book_p['id'] = 'booknow';
}

if ( $book_p['type'] == 'booking' ) {
  $booking = true;
} else {
  $booking = false;
}

if ( $book_pe && $book_p ) :
$args = " adults='" . $book_p['adults'] . "' children='" . $book_p['children'] . "' check_in_date='" . $book_p['check_in_date'] . "' check_out_date='" . $book_p['check_out_date'] . "' attributes='" . $book_p['attributes'] . "' class='" . $book_p['class'] . '"';

if ( $book_p['booking_current'] && is_singular( 'mphb_room_type' ) ) :
  $book_id = get_the_ID();
else : 
  $book_id = $book_p['booking_id'];
endif;

$args_two = " id=" . $book_id;
?>

<!-- popup -->
<div class="knsl-popup-frame knsl-popup-frame-2" id="<?php echo esc_attr( $book_p['id'] ); ?>">
  <div class="knsl-book-form knsl-book-form-v knsl-book-popup">
    <span class="knsl-close-popup"><?php echo esc_html__( '+', 'kinsley' ); ?></span>
    <h2 class="knsl-mb-40"><?php echo esc_html( $book_p['title'] ); ?></h2>

    <?php 
    if ( $booking ) :
      echo do_shortcode( "[mphb_availability" . esc_html( $args_two ) . "]" );
    else :
      echo do_shortcode( "[mphb_availability_search" . esc_html( $args ) . "]" );
    endif; ?>

  </div>
</div>
<!-- popup end -->

<?php endif; ?>
