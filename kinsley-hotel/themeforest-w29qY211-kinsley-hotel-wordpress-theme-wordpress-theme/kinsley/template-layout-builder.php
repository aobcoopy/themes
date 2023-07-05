<?php
/**
 * Template Name: Elementor Builder
 * Template Post Type: page, mphb_room_type
 *
 * @package kinsley
*/

get_header();
?>

<?php
	while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
		</div><!-- #post-<?php the_ID(); ?> -->
<?php endwhile; ?>

<?php
get_footer();
