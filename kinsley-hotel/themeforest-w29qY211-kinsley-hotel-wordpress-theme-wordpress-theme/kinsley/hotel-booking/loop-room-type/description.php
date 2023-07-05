<?php

if ( !defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="knsl-text-light knsl-text-sm knsl-mb-20">
	<?php do_action( 'mphb_render_loop_room_type_before_description' ); ?>

	<?php the_content(); ?>

	<?php do_action( 'mphb_render_loop_room_type_after_description' ); ?>
</div>
