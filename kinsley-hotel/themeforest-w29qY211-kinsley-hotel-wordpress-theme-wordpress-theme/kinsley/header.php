<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kinsley
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Meta Data -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<?php
	$preloader_logo = get_field( 'preloader_logo', 'option' );
	$layout_type = get_field( 'layout_type', 'option' );
	$header_layout_type = get_field( 'header_layout_type', 'option' );
	?>

  <!-- page wrapper -->
  <div class="knsl-app<?php if ( $layout_type == 1 ) : ?> knsl-app-minimal<?php endif; ?><?php if ( $layout_type == 2 ) : ?> knsl-app-minimal knsl-app-dark<?php endif; ?>">

    <!-- preloader -->
    <div class="knsl-preloader-frame">
      <div class="knsl-preloader">
				<?php if ( $preloader_logo ) : ?>
				<img src="<?php echo esc_url( $preloader_logo ); ?>" alt="<?php echo esc_attr( bloginfo( 'name' ) ); ?>" />
				<?php endif; ?>
        <div class="knsl-preloader-progress">
          <div class="knsl-preloader-bar"></div>
        </div>
        <div class="knsl-preloader-number-wrap"><span class="knsl-preloader-number" data-count="101">0</span>%</div>
      </div>
    </div>
    <!-- preloader end -->

    <!-- datepicker frame -->
    <div class="knsl-datepicker-place"></div>

    <!-- top bar -->
    <div class="knsl-top-bar<?php if ( $header_layout_type == 1 ) : ?> knsl-top-bar-minimal<?php endif; ?><?php if ( $layout_type == 2 ) : ?> knsl-top-bar-dark<?php endif; ?>">
      <?php
      $header_template = get_field( 'header_template', 'option' );

      if ( $header_template ) :
        $args = array( 'post_type' => 'hf_templates', 'p' => $header_template );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
          the_content();
        endwhile; wp_reset_postdata();
      else :
      ?>
      <div class="container">
        <div class="knsl-left-side">
          <!-- logo -->
          <a href="<?php echo esc_url( home_url() ); ?>" class="knsl-logo-frame">
            <span class="logotype__title"><?php echo esc_html( bloginfo('name') ); ?></span>
            <span class="logotype__sub"><?php echo esc_html( bloginfo('description') ); ?></span>
          </a>
          <!-- logo end -->
        </div>
        <div class="knsl-right-side">
          <!-- menu -->
          <div class="knsl-menu">
            <?php
            if ( has_nav_menu( 'primary' ) ) :
              wp_nav_menu( array(
                'theme_location' => 'primary',
                'container' => 'nav',
                'container_class' => 'top-menu-nav',
                'menu_class' => 'top-menu-nav-inner',
                'walker' => new Kinsley_Topmenu_Walker(),
              ) );
            endif; ?>
          </div>
          <!-- menu end -->

        </div>
        <!-- menu button -->
        <div class="knsl-menu-btn"><span></span></div>
        <!-- menu button end -->
      </div>
      <?php endif; ?>
		</div>
		<!-- top bar end -->
