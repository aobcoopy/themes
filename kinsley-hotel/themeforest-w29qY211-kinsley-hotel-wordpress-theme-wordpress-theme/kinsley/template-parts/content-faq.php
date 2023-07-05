<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kinsley
 */

?>

<?php
//content
$index = get_query_var( 'index' );
?>

<div class="card">
	<div class="card-header" id="knsl-faqHeading-<?php echo esc_attr( get_the_ID() ); ?>">
		<div class="mb-0">
			<div class="knsl-faq-title" data-toggle="collapse" data-target="#knsl-faqCollapse-<?php echo esc_attr( get_the_ID() ); ?>" data-aria-expanded="true" data-aria-controls="knsl-faqCollapse-<?php echo esc_attr( get_the_ID() ); ?>">
				<span class="badge"><?php echo esc_html( $index ); ?></span>
				<?php the_title(); ?>
			</div>
		</div>
	</div>
	<div id="knsl-faqCollapse-<?php echo esc_attr( get_the_ID() ); ?>" class="collapse" aria-labelledby="knsl-faqHeading-<?php echo esc_attr( get_the_ID() ); ?>" data-parent="#accordion">
		<div class="knsl-card-body">
			<?php the_content(); ?>
		</div>
	</div>
</div>
