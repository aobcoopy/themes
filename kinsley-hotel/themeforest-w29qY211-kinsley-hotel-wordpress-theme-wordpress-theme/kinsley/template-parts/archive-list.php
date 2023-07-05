<?php
/**
 * Template part for displaying archive list
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kinsley
 */

?>

<?php

$settings = get_field( 'blog_list_args', 'option' );

$item_classes = 'col-lg-4';

$layout = false;

if ( isset( $settings['layout'] ) ) {
  $layout = $settings['layout'];
}

if ( $layout == 'column-3' ) {

} elseif ( $layout == 'column-2' ) {
  $item_classes = 'col-lg-6';
} else {
  $item_classes = 'col-lg-12';
}

$attr_classes = '';

if ( $layout ) {
  if ( $settings['featured_image'] == false ) {
    $attr_classes .= ' attr-featured-false';
  }
  if ( $settings['categories'] == false ) {
    $attr_classes .= ' attr-categories-false';
  }
  if ( $settings['details'] == false ) {
    $attr_classes .= ' attr-details-false';
  }
  if ( $settings['details_author'] == false ) {
    $attr_classes .= ' attr-details-author-false';
  }
  if ( $settings['details_date'] == false ) {
    $attr_classes .= ' attr-details-date-false';
  }
  if ( $settings['title'] == false ) {
    $attr_classes .= ' attr-title-false';
  }
  if ( $settings['excerpt'] == false ) {
    $attr_classes .= ' attr-desc-false';
  }
  if ( $settings['view_button'] == false ) {
    $attr_classes .= ' attr-readmore-false';
  }
}

?>

<?php if ( $layout ) : ?>

<!-- blog -->
<section class="knsl-p-0-100">
    <div class="container">
      <div class="row <?php echo esc_attr( $attr_classes ); ?>">

        <?php if ( $settings['sidebar'] ) : ?><div class="col-lg-9"><div class="row"><?php endif; ?>

        <?php if ( have_posts() ) : ?>
        <?php $i=0; while ( have_posts() ) : the_post(); $i++; ?>
        <div class="<?php echo esc_attr( $item_classes ); ?>">

          <?php
          set_query_var( 'layout', $settings['layout'] );
          set_query_var( 'index', $i );
          get_template_part( 'template-parts/content', 'grid' ); ?>

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

        <?php if ( $settings['sidebar'] ) : ?>
        </div>
        </div>

        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div class="col-lg-3">
            <div class="col__sedebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php endif; ?>

    <?php else :
      get_template_part( 'template-parts/content', 'none' );
    endif; ?>

  </div>
 </div>
</section>
<!-- blog end -->

<?php else : ?>

<!-- blog -->
<section class="knsl-p-0-100">
    <div class="container">
      <div class="row archive-row">

        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div class="col-lg-9">
        <?php else : ?>
        <div class="col-lg-12">
        <?php endif; ?>

          <?php if ( have_posts() ) : ?>
            <?php
            /* Start the Loop */
            while ( have_posts() ) : the_post(); ?>

                <?php
                /*
                 * Include the Post-Type-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                 */
                get_template_part( 'template-parts/content' );
                ?>

            <?php endwhile; ?>

            <?php if ( get_the_posts_pagination() ) : ?>
            <div class="knsl-pagination">
                <?php
                    echo paginate_links( array(
                        'prev_text'     => esc_html__( 'Prev', 'kinsley' ),
                        'next_text'     => esc_html__( 'Next', 'kinsley' ),
                    ) );
                ?>
            </div>
            <?php endif; ?>

            <?php else : ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; ?>
        </div>
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div class="col-lg-3">
            <div class="col__sedebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
        <?php endif; ?>

      </div>
    </div>
</section>
<!-- blog end -->

<?php endif; ?>
