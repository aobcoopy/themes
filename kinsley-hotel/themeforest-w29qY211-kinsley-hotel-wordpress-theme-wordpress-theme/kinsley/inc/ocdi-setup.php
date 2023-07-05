<?php

if ( class_exists( 'KinsleyPlugin' ) && class_exists( 'ACF' ) && class_exists( 'OCDI_Plugin' ) ) {

  function kinsley_ocdi_import_files() {
      $extra_dir = kinsley_extra_dir();
      if ( $extra_dir == 'normal' ) : return array(); endif;

      return array(
          array(
              'import_file_name'             => 'hotel',
              'categories'                   => array( esc_attr__( 'Main', 'kinsley' ) ),
              'import_file_url'              => KINSLEY_EXTRA_PLUGINS_DIRECTORY . $extra_dir . '/ocdi-import/demo/hotel/content.xml',
              'import_preview_image_url'     => KINSLEY_EXTRA_PLUGINS_DIRECTORY . $extra_dir . '/ocdi-import/demo/hotel/preview.jpg',
              'preview_url'                  => 'https://1.envato.market/c/1790164/275988/4415?u=https://themeforest.net/item/kinsley-hotel-wordpress-theme/full_screen_preview/35503579',
          ),

          array(
              'import_file_name'             => 'bnb',
              'categories'                   => array( esc_attr__( 'Main', 'kinsley' ) ),
              'import_file_url'              => KINSLEY_EXTRA_PLUGINS_DIRECTORY . $extra_dir . '/ocdi-import/demo/bnb/content.xml',
              'import_preview_image_url'     => KINSLEY_EXTRA_PLUGINS_DIRECTORY . $extra_dir . '/ocdi-import/demo/bnb/preview.jpg',
              'preview_url'                  => 'https://1.envato.market/c/1790164/275988/4415?u=https://themeforest.net/item/kinsley-hotel-wordpress-theme/full_screen_preview/35503579',
          ),

          array(
              'import_file_name'             => 'luxury',
              'categories'                   => array( esc_attr__( 'Main', 'kinsley' ) ),
              'import_file_url'              => KINSLEY_EXTRA_PLUGINS_DIRECTORY . $extra_dir . '/ocdi-import/demo/luxury/content.xml',
              'import_preview_image_url'     => KINSLEY_EXTRA_PLUGINS_DIRECTORY . $extra_dir . '/ocdi-import/demo/luxury/preview.jpg',
              'preview_url'                  => 'https://1.envato.market/c/1790164/275988/4415?u=https://themeforest.net/item/kinsley-hotel-wordpress-theme/full_screen_preview/35503579',
          ),
      );
  }
  add_filter( 'pt-ocdi/import_files', 'kinsley_ocdi_import_files' );

  function kinsley_ocdi_after_import_setup( $selected_import ) {
      if ( kinsley_extra_dir() == 'normal' ) : return; endif;

      // Assign menus to their locations.
      $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

      set_theme_mod( 'nav_menu_locations', array(
          'primary' => $main_menu->term_id,
        )
      );

      // Assign front page and posts page (blog page).
      $front_page_id = kinsley_get_page_id_by_title( 'Home' );

      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id );
      update_option( 'posts_per_page', 6 );

      // Update mphb plugin settings
      if ( class_exists( 'HotelBookingPlugin' ) ) {
        update_option( 'mphb_square_unit', 'f2' );
        update_option( 'mphb_currency_symbol', 'USD' );
        update_option( 'mphb_datepicker_theme', 'light-blue' );
        update_option( 'mphb_template_mode', 'plugin' );
        update_option( 'mphb_open_terms_in_new_window', 1 );
        update_option( 'mphb_confirmation_mode', 'payment' );
        update_option( 'mphb_direct_booking', 1 );

        // Select default mphb pages
        $checkout_page_id = kinsley_get_page_id_by_title( 'Booking Confirmation' );
        $my_account_page_id = kinsley_get_page_id_by_title( 'Booking Account' );
        $search_results_page_id = kinsley_get_page_id_by_title( 'Search Results' );
        $booking_confirmation_page_id = kinsley_get_page_id_by_title( 'Booking Confirmed' );
        $booking_cancellation_page_id = kinsley_get_page_id_by_title( 'Booking Cancellation' );
        $payment_failed_page_id = kinsley_get_page_id_by_title( 'Transaction Failed' );
        $payment_success_page_id = kinsley_get_page_id_by_title( 'Reservation Received' );
        $user_cancel_redirect_page_id = kinsley_get_page_id_by_title( 'Booking Canceled' );

        update_option( 'mphb_checkout_page', $checkout_page_id );
        update_option( 'mphb_my_account_page', $my_account_page_id );
        update_option( 'mphb_search_results_page', $search_results_page_id );
        update_option( 'mphb_booking_confirmation_page', $booking_confirmation_page_id );
        update_option( 'mphb_booking_cancellation_page', $booking_cancellation_page_id );
        update_option( 'mphb_payment_failed_page', $payment_failed_page_id );
        update_option( 'mphb_payment_success_page', $payment_success_page_id );
        update_option( 'mphb_user_cancel_redirect_page', $user_cancel_redirect_page_id );
      }

      $acf_options = array();

      if ( $selected_import['import_file_name'] ) {
        $json = file_get_contents( plugin_dir_path( __FILE__ ) . 'acf-options/' . $selected_import['import_file_name'] . '.json' );
        $json_obj = json_decode( $json, true );
        if ( isset( $json_obj['data'] ) ) {
          $acf_options = $json_obj['data'];
        }
      }

      if ( !empty( $acf_options ) ) {
        global $wpdb;
        foreach ( $acf_options as $item ) {
          if ( $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM $wpdb->options WHERE option_name = %s", $item['option_name'] ) ) == 0 ) {
              $wpdb->query( $wpdb->prepare( "INSERT INTO $wpdb->options ( option_name, option_value, autoload ) VALUES (%s, %s, 'no')", $item['option_name'], $item['option_value'] ) );
          } else {
              $wpdb->query( $wpdb->prepare( "UPDATE $wpdb->options SET option_value = %s WHERE option_name = %s", $item['option_value'], $item['option_name'] ) );
          }
        }
      }

  }
  add_action( 'pt-ocdi/after_import', 'kinsley_ocdi_after_import_setup' );

  function kinsley_get_page_id_by_title( $page_title ) {
    global $wpdb;

    $result = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_title = '%s' AND post_type = 'page'", $page_title ) );

    return $result;
  }
}
