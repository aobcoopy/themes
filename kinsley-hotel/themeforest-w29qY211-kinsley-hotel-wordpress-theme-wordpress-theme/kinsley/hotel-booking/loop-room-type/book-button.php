<?php

if ( !defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php

/**
 * @hooked \MPHB\Views\LoopRoomTypeView::_renderBookButtonWrapperOpen - 10
 */
do_action( 'mphb_render_loop_room_type_before_book_button' );
?>

<?php 
$external = get_field( 'external_booking_link' );

if ( ! $external ) :

mphb_tmpl_the_loop_room_type_book_button_form(); 

else : 

$external_url = get_field( 'external_booking_url' );
$external_target = get_field( 'external_booking_target' );
$external_nofollow = get_field( 'external_booking_nofollow' );

?>

<div class="mphb-to-book-btn-wrapper">
	<a href="<?php echo esc_url( $external_url ); ?>"<?php if ( $external_target ) : ?> target="_blank"<?php endif; ?><?php if ( $external_nofollow ) : ?> rel="nofollow"<?php endif; ?> class="button mphb-book-button"><?php echo esc_html__( 'Book', 'motopress-hotel-booking' );?></a>
</div>

<?php endif; ?>

<?php

/**
 * @hooked \MPHB\Views\LoopRoomTypeView::_renderBookButtonBr - 10
 * @hooked \MPHB\Views\LoopRoomTypeView::_renderBookButtonWrapperClose - 20
 */
do_action( 'mphb_render_loop_room_type_after_book_button' );

?>