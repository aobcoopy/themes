<?php

if ( !defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php

/**
 * @hooked \MPHB\Views\LoopRoomTypeView::_renderViewDetailsButtonParagraphOpen - 10
 */
do_action( 'mphb_render_loop_room_type_before_view_details_button' );
?>

<?php 

$settings = get_field( 'rooms_list_args', 'option' );

if ( $settings['view_button'] != false ) :

mphb_tmpl_the_loop_room_type_view_details_button(); 

endif;

?>

<?php

/**
 * @hooked \MPHB\Views\LoopRoomTypeView::_renderViewDetailsButtonParagraphClose - 10
 */
do_action( 'mphb_render_loop_room_type_after_view_details_button' );
?>