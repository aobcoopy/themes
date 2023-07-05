<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kinsley
 */

get_header();

$layout = get_field( 'blog_featured_img', 'option' );

?>

<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/intro' ); ?>

<div class="knsl-p-0-100">
	<div class="container">
		<div class="row justify-content-center">

			<div class="col-lg-8">
				<?php if ( has_post_thumbnail() && ! $layout ) :
				$image = get_the_post_thumbnail_url( get_the_ID(), 'kinsley_1920xAuto' ); ?>
				<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" class="knsl-default-img knsl-mb-30">
				<?php endif; ?>

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
