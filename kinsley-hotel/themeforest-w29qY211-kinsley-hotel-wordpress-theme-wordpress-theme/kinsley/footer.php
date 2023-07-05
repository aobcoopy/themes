<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kinsley
 */

?>

    <!-- footer -->
    <footer class="footer">
      <div class="knsl-footer">
        <?php
        $footer_template = get_field( 'footer_template', 'option' );

        if ( $footer_template ) :
          $args = array( 'post_type' => 'hf_templates', 'p' => $footer_template );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
            the_content();
          endwhile; wp_reset_postdata();
        else :
        ?>
        <div class="knsl-copyright">
          <div class="container">
            <div class="copy-text">
              <div><?php echo esc_html__( '&copy; 2022 Kinsley. All Rights Reserved.', 'kinsley' ); ?></div>
            </div>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </footer>
    <!-- footer end -->

  </div>
  <!-- page wrapper end -->

  <?php get_template_part( 'template-parts/booking-popup' ); ?>

  <?php get_template_part( 'template-parts/custom-popup' ); ?>

  <?php
  $button_up = get_field( 'button_up', 'option' );
  if ( $button_up ) : ?>
  <!-- btn up -->
  <button id="scrollTop" class="scrollTopStick">
    <i class="fas fa-arrow-up"></i>
  </button>
  <!-- btn up end -->
  <?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
