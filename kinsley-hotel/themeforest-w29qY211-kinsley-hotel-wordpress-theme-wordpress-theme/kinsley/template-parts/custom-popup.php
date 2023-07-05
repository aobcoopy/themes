<?php
/**
 * Template part for displaying custom popup builder
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kinsley
 */

?>

<?php

if ( have_rows( 'modals_builder', 'option' ) ) :

while( have_rows( 'modals_builder', 'option' ) ) : the_row();

$modal_pe = get_sub_field( 'popup_enable' );
$modal_p = get_sub_field( 'popup_args' );

if ( $modal_pe && $modal_p ) :

?>

<!-- popup -->
<div class="knsl-popup-frame knsl-popup-frame-2" id="<?php echo esc_attr( $modal_p['id'] ); ?>">
  <div class="knsl-book-form knsl-book-form-v knsl-book-popup">
    <span class="knsl-close-popup"><?php echo esc_html__( '+', 'kinsley' ); ?></span>
    <h2 class="knsl-mb-40"><?php echo esc_html( $modal_p['title'] ); ?></h2>

    <?php 
    if ( $modal_p['type'] == 'cf7' ) : 
      echo $modal_p['cf7_form'];
    elseif ( $modal_p['type'] == 'opentable' ) : ?>
      <?php
      $opentable_id = $modal_p['opentable_id'];
      $opentable_lang = $modal_p['opentable_lang'];
      ?>

      <form method="get" class="knsl-opentable-form" action="//www.opentable.com/restaurant-search.aspx" target="_blank">
        <div class="row">
          <div class="col-12 form-group">
            <select id="reservation_party" name="partySize">
            <option value="1">1 <?php echo esc_html__( 'Person', 'kinsley' ); ?></option>
            <option value="2" selected="selected">2 <?php echo esc_html__( 'People', 'kinsley' ); ?></option>
            <option value="3">3 <?php echo esc_html__( 'People', 'kinsley' ); ?></option>
            <option value="4">4 <?php echo esc_html__( 'People', 'kinsley' ); ?></option>
            <option value="5">5 <?php echo esc_html__( 'People', 'kinsley' ); ?></option>
            <option value="6">6 <?php echo esc_html__( 'People', 'kinsley' ); ?></option>
            <option value="7">7 <?php echo esc_html__( 'People', 'kinsley' ); ?></option>
            <option value="8">8 <?php echo esc_html__( 'People', 'kinsley' ); ?></option>
            <option value="9">9 <?php echo esc_html__( 'People', 'kinsley' ); ?></option>
            <option value="10">10 <?php echo esc_html__( 'People', 'kinsley' ); ?></option>
            <option value="11">11 <?php echo esc_html__( 'People', 'kinsley' ); ?></option>
            <option value="12">12 <?php echo esc_html__( 'People', 'kinsley' ); ?></option>
            <option value="13">13 <?php echo esc_html__( 'People', 'kinsley' ); ?></option>
            <option value="14">14 <?php echo esc_html__( 'People', 'kinsley' ); ?></option>
            <option value="15">15 <?php echo esc_html__( 'People', 'kinsley' ); ?></option>
            <option value="16">16 <?php echo esc_html__( 'People', 'kinsley' ); ?></option>
            <option value="17">17 <?php echo esc_html__( 'People', 'kinsley' ); ?></option>
            <option value="18">18 <?php echo esc_html__( 'People', 'kinsley' ); ?></option>
            <option value="19">19 <?php echo esc_html__( 'People', 'kinsley' ); ?></option>
            <option value="20">20 <?php echo esc_html__( 'People', 'kinsley' ); ?></option>
            <option value="21"><?php echo esc_html__( 'Larger party', 'kinsley' ); ?></option>
          </select>
          </div>
          <div class="col-12 form-group">
            <div class="datepicker__container">
              <input id="reservation_date" name="startDate" class="datepicker-here" type="text" value="" placeholder="<?php echo esc_attr__( 'Date', 'kinsley' ); ?>" autocomplete="off" readonly="readonly">
            </div>
          </div>
          <div class="col-12 form-group">
            <select id="reservation_time" name="ResTime">
              <?php
              //Time Loop
              $inc = 30 * 60;
              $start = ( strtotime( '8AM' ) ); // 6  AM
              $end = ( strtotime( '11:59PM' ) ); // 10 PM


              for ( $i = $start; $i <= $end; $i += $inc ) {
                // to the standart format
                $time      = date( 'g:i a', $i );
                $timeValue = date( 'g:ia', $i );
                $default   = "7:00pm";
                echo "<option value=\"$timeValue\" " . ( ( $timeValue == $default ) ? ' selected="selected" ' : "" ) . ">$time</option>" . PHP_EOL;
              }

              ?>
            </select>
          </div>
        </div>
        <div class="text-center">
          <button class="knsl-btn" type="submit" name="button"><?php echo esc_html__( 'Reserve a table', 'kinsley' ); ?></button>
          <p class="knsl-powered pt-3"><?php echo wp_kses_post( '* Powered by <img src="' . home_url() . '/wp-content/themes/kinsley/assets/img/opentable.svg" alt="Powered by OpenTable" />', 'kinsley' ); ?></p>
        </div>
        <input type="hidden" name="RestaurantID" class="RestaurantID" value="<?php echo esc_attr( $opentable_id ); ?>">
        <input type="hidden" name="rid" class="rid" value="<?php echo esc_attr( $opentable_id ); ?>">
        <input type="hidden" name="GeoID" class="GeoID" value="15">
        <input type="hidden" name="txtDateFormat" class="txtDateFormat" value="MM/dd/yyyy">
        <input type="hidden" name="RestaurantReferralID" class="RestaurantReferralID" value="<?php echo esc_attr( $opentable_id ); ?>">
        <input type="hidden" name="lang" class="lang" value="<?php echo esc_attr( $opentable_lang ); ?>">
      </form>
    <?php elseif ( $modal_p['type'] == 'custom' ) : 
      echo $modal_p['custom_content']; 
    endif; ?>

  </div>
</div>
<!-- popup end -->

<?php endif; ?>

<?php endwhile; ?>

<?php endif; ?>