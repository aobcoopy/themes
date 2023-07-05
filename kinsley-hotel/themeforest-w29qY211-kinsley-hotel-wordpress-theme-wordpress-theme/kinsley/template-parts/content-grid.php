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

//options
$layout = get_query_var( 'layout' );
$index = get_query_var( 'index' );

//content
if ( $layout == 'column-1' ) {
	$image = get_the_post_thumbnail_url( get_the_ID(), 'kinsley_1920xAuto' );
} else {
	$image = get_the_post_thumbnail_url( get_the_ID(), 'kinsley_950xAuto' );
}

$categories_list = get_the_category( get_the_ID() );

$avatar_img = get_avatar_url( get_the_author_meta( 'ID' ) );

$scroll_animation = false;

if ( $index > 3 && $layout == 'column-3' ) {
	$scroll_animation = true;
}
if ( $index > 2 && $layout == 'column-2' ) {
	$scroll_animation = true;
}
if ( $index > 1 && $layout == 'column-1' ) {
	$scroll_animation = true;
}

if ( $layout == 'carousel' ) {
	$scroll_animation = true;
}

?>

<!-- blog card -->
<div class="knsl-blog-card<?php if ( $scroll_animation ) : ?> knsl-scroll-animation<?php endif; ?>">
  <div<?php if ( $layout != 'carousel' ) : ?> id="post-<?php the_ID(); ?>"<?php endif; ?> <?php post_class(); ?>>
  <?php if ( has_post_thumbnail() ) : ?>
  <div class="knsl-cover-frame">
    <a href="<?php echo esc_url( get_permalink() ); ?>">
    	<?php if ( $image ) : ?>
    	<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" />
    	<?php endif; ?>
    </a>
		<div class="knsl-badge">
			<?php
			$total = count( $categories_list );
			$i = 0;
			foreach ( $categories_list as $category ) { $i++;
				if ( $total != $i ) {
					echo esc_html( $category->cat_name ) . ', ';
				} else {
					echo esc_html( $category->cat_name );
				}
			}
			?>
		</div>
  </div>
  <?php endif; ?>
  <div class="knsl-description-frame">
    <div class="knsl-room-features">
      <div class="knsl-feature knsl-feature-author">
        <?php if ( $avatar_img ) : ?>
        <div class="knsl-icon-frame knsl-icon-author"><img src="<?php echo esc_url( $avatar_img ); ?>" alt="<?php echo esc_attr( get_the_author() ); ?>" /></div>
        <?php endif; ?>
        <span><?php the_author(); ?></span>
      </div>

      <?php if ( ! empty( get_the_title() ) ) : ?>
	  	<div class="knsl-feature knsl-feature-date">
        <div class="knsl-icon-frame"><span class="img-svg img-svg-time"></span></div>
        <span><?php echo esc_html( get_the_date() ); ?></span>
      </div>
	  	<?php else : ?>
	  	<div class="knsl-feature">
        <div class="knsl-icon-frame"><span class="img-svg img-svg-time"></span></div>
        <a href="<?php echo esc_url( get_permalink() ); ?>"><span><?php echo esc_html( get_the_date() ); ?></span></a>
      </div>
	  	<?php endif; ?>
    </div>
    <a href="<?php echo esc_url( get_permalink() ); ?>" class="knsl-title">
      <h4 class="knsl-mb-20"><?php the_title(); ?></h4>
    </a>
    <div class="knsl-text-light knsl-text-sm">
    	<?php the_excerpt(); ?>
    </div>
  </div>
  </div>
</div>
<!-- blog card end -->
