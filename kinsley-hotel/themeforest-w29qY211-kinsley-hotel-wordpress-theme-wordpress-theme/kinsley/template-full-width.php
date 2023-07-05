<?php
/**
 * Template Name: Default Full Width Template
 * Template Post Type: page, mphb_room_type
 *
 * @package kinsley
*/

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/intro' ); ?>

<div class="knsl-p-0-100">
	<div class="container">
		<div class="row justify-content-center">

			<div class="col-lg-12">
				<div class="knsl-blog-post knsl-mb-60">
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
				</div>

				<?php
				if ( comments_open() || get_comments_number() ) :
					// If comments are open or we have at least one comment, load up the comment template.
					comments_template();
				endif; ?>

			</div>

		</div>
	</div>
</div>

<?php endwhile; ?>

<?php
get_footer();
