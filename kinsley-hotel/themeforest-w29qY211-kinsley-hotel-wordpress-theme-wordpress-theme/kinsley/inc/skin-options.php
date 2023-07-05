<?php
/**
 * Skin
**/

if ( ! function_exists( 'kinsley_skin' ) ) {

function kinsley_skin() {
	/*colors options*/
	$accent_color1 = get_field( 'accent_color1', 'option' );
	$accent_color2 = get_field( 'accent_color2', 'option' );
	$accent_color3 = get_field( 'accent_color3', 'option' );
	$text_color1 = get_field( 'text_color1', 'option' );
	$text_color2 = get_field( 'text_color2', 'option' );
	$text_color3 = get_field( 'text_color3', 'option' );
	$bg_color1 = get_field( 'bg_color1', 'option' );
	$bg_color2 = get_field( 'bg_color2', 'option' );
	$bg_color3 = get_field( 'bg_color3', 'option' );

	/*typography options*/
	$text_font_size = get_field( 'text_font_size', 'option' );
	$text_font_weight = get_field( 'text_font_weight', 'option' );
	$text_font_family = get_field( 'text_font_family', 'option' );
	$text_letter_spacing = get_field( 'text_letter_spacing', 'option' );

	$heading1_font_size = get_field( 'heading1_font_size', 'option' );
	$heading1_font_weight = get_field( 'heading1_font_weight', 'option' );
	$heading1_font_family = get_field( 'heading1_font_family', 'option' );
	$heading1_letter_spacing = get_field( 'heading1_letter_spacing', 'option' );

	$heading2_font_size = get_field( 'heading2_font_size', 'option' );
	$heading2_font_weight = get_field( 'heading2_font_weight', 'option' );
	$heading2_font_family = get_field( 'heading2_font_family', 'option' );
	$heading2_letter_spacing = get_field( 'heading2_letter_spacing', 'option' );

	$heading3_font_size = get_field( 'heading3_font_size', 'option' );
	$heading3_font_weight = get_field( 'heading3_font_weight', 'option' );
	$heading3_font_family = get_field( 'heading3_font_family', 'option' );
	$heading3_letter_spacing = get_field( 'heading3_letter_spacing', 'option' );

	$heading4_font_size = get_field( 'heading4_font_size', 'option' );
	$heading4_font_weight = get_field( 'heading4_font_weight', 'option' );
	$heading4_font_family = get_field( 'heading4_font_family', 'option' );
	$heading4_letter_spacing = get_field( 'heading4_letter_spacing', 'option' );

	$menu_font_size = get_field( 'menu_font_size', 'option' );
	$menu_font_weight = get_field( 'menu_font_weight', 'option' );
	$menu_font_family = get_field( 'menu_font_family', 'option' );
	$menu_letter_spacing = get_field( 'menu_letter_spacing', 'option' );

	/*buttons options*/
	$btn_text_color = get_field( 'btn_text_color', 'option' );
	$btn_bg_color = get_field( 'btn_bg_color', 'option' );
	$btn_border_color = get_field( 'btn_border_color', 'option' );
	$btn_font_size = get_field( 'btn_font_size', 'option' );
	$btn_font_weight = get_field( 'btn_font_weight', 'option' );
	$btn_font_family = get_field( 'btn_font_family', 'option' );
	$btn_letter_spacing = get_field( 'btn_letter_spacing', 'option' );
	$btn_border_size = get_field( 'btn_border_size', 'option' );
	$btn_border_radius = get_field( 'btn_border_radius', 'option' );
	$btn_height = get_field( 'btn_height', 'option' );
	$btn_transform = get_field( 'btn_transform', 'option' );

	/*breadcrumbs options*/
	$brc_text_color = get_field( 'brc_text_color', 'option' );
	$brc_bg_color = get_field( 'brc_bg_color', 'option' );
	$brc_border_color = get_field( 'brc_border_color', 'option' );
	$brc_font_size = get_field( 'brc_font_size', 'option' );
	$brc_font_weight = get_field( 'brc_font_weight', 'option' );
	$brc_font_family = get_field( 'brc_font_family', 'option' );
	$brc_letter_spacing = get_field( 'brc_letter_spacing', 'option' );
	$brc_border_size = get_field( 'brc_border_size', 'option' );
	$brc_border_radius = get_field( 'brc_border_radius', 'option' );

	/*preloader options*/
	$preloader = get_field( 'preloader', 'option' );
	$preloader_counter = get_field( 'preloader_counter', 'option' );
	$preloader_logo_width = get_field( 'preloader_logo_width', 'option' );
	$preloader_color = get_field( 'preloader_color', 'option' );
	$preloader_line_height = get_field( 'preloader_line_height', 'option' );

	/*calendar options*/
	$calendar_custom = get_field( 'calendar_custom', 'option' );
	$calendar_primary_color = get_field( 'calendar_primary_color', 'option' );
	$calendar_header_bg_color = get_field( 'calendar_header_bg_color', 'option' );
	$calendar_header_color = get_field( 'calendar_header_color', 'option' );
	$calendar_nav_bg_color = get_field( 'calendar_nav_bg_color', 'option' );
	$calendar_nav_hover_color = get_field( 'calendar_nav_hover_color', 'option' );
	$calendar_nav_color = get_field( 'calendar_nav_color', 'option' );
	$calendar_day_bg_color = get_field( 'calendar_day_bg_color', 'option' );
	$calendar_day_color = get_field( 'calendar_day_color', 'option' );
	$calendar_day_booked_color = get_field( 'calendar_day_booked_color', 'option' );
	$calendar_day_available_color = get_field( 'calendar_day_available_color', 'option' );
	$calendar_day_disabled_color = get_field( 'calendar_day_disabled_color', 'option' );
	$calendar_day_active_color = get_field( 'calendar_day_active_color', 'option' );
	$calendar_day_name_bg_color = get_field( 'calendar_day_name_bg_color', 'option' );
	$calendar_day_name_color = get_field( 'calendar_day_name_color', 'option' );
	
?>

<style>
	/*Begin Colors Options*/
	<?php if ( ! empty( $accent_color1 ) ) : ?>
	.knsl-accent,
	.knsl-top-bar .container .knsl-left-side .knsl-logo-frame .knsl-logo-text span,
	.hf-type-header .container .knsl-left-side .knsl-logo-frame .knsl-logo-text span,
	.knsl-menu nav ul li > a:hover,
	.knsl-side-menu .knsl-sm-link:hover,
	.mphb-room-type .mphb-room-type-facilities .mphb-attribute-title:after,
	.mphb-room-type-facilities .mphb-attribute-title:after,
	.mphb-room-type .mphb-room-type-facilities:hover .mphb-attribute-value a,
	.mphb-room-type-facilities:hover .mphb-attribute-value a,
	.mphb-room-type .mphb-room-type-facilities:hover .mphb-attribute-value a:hover,
	.mphb-room-type-facilities:hover .mphb-attribute-value a:hover,
	.mphb-calendar .datepick .datepick-ctrl a,
	.datepick-popup .datepick .datepick-ctrl a,
	.post-text-bottom span.cat-links a,
	.post-text-bottom .tags-links a,
	.post-text-bottom .tags-links span,
	.content-sidebar .tagcloud a,
	.wp-block-tag-cloud .tag-cloud-link,
	.post-text-bottom .social-share a,
	.wp-block-button.is-style-outline a.wp-block-button__link,
	.product_meta .posted_in a,
	.product_meta .tagged_as a,
	.woocommerce-account .addresses .title .edit {
		color: <?php echo esc_attr( $accent_color1 ); ?>;
	}
	@media (max-width: 992px) {
		.knsl-menu nav ul li.current-menu-item > a,
		.knsl-top-bar.knsl-top-bar-minimal .knsl-menu nav ul li.current-menu-item>a,
		.knsl-top-bar.knsl-top-bar-minimal.knsl-top-bar-dark .knsl-menu nav ul li.current-menu-item>a {
			color: <?php echo esc_attr( $accent_color1 ); ?>;
		}
	}
	.knsl-btn,
	.knsl-btn:focus,
	.button,
	.button:focus,
	::-webkit-scrollbar-thumb,
	.knsl-testimonials-nav .knsl-testimonials-slider-1-next,
	.knsl-testimonials-nav .knsl-testimonials-slider-1-prev,
	.knsl-faq .card .card-header .knsl-faq-title .badge,
	.knsl-pagination li.knsl-active a,
	.knsl-pagination span,
	.page-links span,
	.knsl-filter .knsl-work-category.knsl-current,
	.mphb-calendar .datepick .datepick-month-header,
	.mphb-calendar .datepick .datepick-month-header select,
	.mphb-calendar .datepick .datepick-month-header input,
	.datepick-popup .datepick .datepick-month-header,
	.datepick-popup .datepick .datepick-month-header select,
	.datepick-popup .datepick .datepick-month-header input,
	.content-sidebar td#today, .single-post-text table td#today,
	.sticky:before,
	.wp-block-button a.wp-block-button__link,
	input[type="submit"],
	input#submit,
	.knsl-preloader-frame .knsl-preloader .knsl-preloader-progress .knsl-preloader-bar,
	.woocommerce #respond input#submit,
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce input.button,
	.woocommerce #respond input#submit:hover,
	.woocommerce a.button:hover,
	.woocommerce button.button:hover,
	.woocommerce input.button:hover,
	.woocommerce #respond input#submit.alt:hover,
	.woocommerce a.button.alt:hover,
	.woocommerce button.button.alt:hover,
	.woocommerce input.button.alt:hover,
	.woocommerce #respond input#submit.alt,
	.woocommerce a.button.alt,
	.woocommerce button.button.alt,
	.woocommerce input.button.alt,
	.woocommerce-page #respond input#submit.alt,
	.woocommerce-page a.button.alt,
	.woocommerce-page button.button.alt,
	.woocommerce-page input.button.alt,
	.woocommerce #respond input#submit.alt.disabled,
	.woocommerce #respond input#submit.alt.disabled:hover,
	.woocommerce #respond input#submit.alt:disabled,
	.woocommerce #respond input#submit.alt:disabled:hover,
	.woocommerce #respond input#submit.alt:disabled[disabled],
	.woocommerce #respond input#submit.alt:disabled[disabled]:hover,
	.woocommerce a.button.alt.disabled,
	.woocommerce a.button.alt.disabled:hover,
	.woocommerce a.button.alt:disabled,
	.woocommerce a.button.alt:disabled:hover,
	.woocommerce a.button.alt:disabled[disabled],
	.woocommerce a.button.alt:disabled[disabled]:hover,
	.woocommerce button.button.alt.disabled,
	.woocommerce button.button.alt.disabled:hover,
	.woocommerce button.button.alt:disabled,
	.woocommerce button.button.alt:disabled:hover,
	.woocommerce button.button.alt:disabled[disabled],
	.woocommerce button.button.alt:disabled[disabled]:hover,
	.woocommerce input.button.alt.disabled,
	.woocommerce input.button.alt.disabled:hover,
	.woocommerce input.button.alt:disabled,
	.woocommerce input.button.alt:disabled:hover,
	.woocommerce input.button.alt:disabled[disabled],
	.woocommerce input.button.alt:disabled[disabled]:hover,
	.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
	.woocommerce div.product form.cart .button,
	.knsl-app.knsl-app-minimal a.knsl-btn.knsl-btn-md:hover {
		background-color: <?php echo esc_attr( $accent_color1 ); ?>;
	}
	.post-text-bottom .tags-links a,
	.post-text-bottom .tags-links span,
	.content-sidebar .tagcloud a,
	.wp-block-tag-cloud .tag-cloud-link,
	.wp-block-pullquote blockquote,
	.wp-block-button.is-style-outline a.wp-block-button__link,
	.product_meta .tagged_as a {
		border-color: <?php echo esc_attr( $accent_color1 ); ?>;
	}
	.mphb-calendar .datepick .datepick-nav,
	.datepick-popup .datepick .datepick-nav {
		background-color: <?php echo esc_attr( $accent_color1 ); ?>d1;
	}
	.mphb-calendar .datepick .datepick-nav a.datepick-disabled:hover,
	.datepick-popup .datepick .datepick-nav a.datepick-disabled:hover,
	.mphb-calendar .datepick .datepick-nav a:hover,
	.datepick-popup .datepick .datepick-nav a:hover {
		background-color: <?php echo esc_attr( $accent_color1 ); ?>40;
	}
	<?php endif; ?>
	<?php if ( ! empty( $accent_color2 ) ) : ?>
	.knsl-accent-2,
	blockquote:before,
	blockquote:after,
	.knsl-banner .knsl-banner-content .knsl-main-title .knsl-stars,
	.knsl-testimonial-card .knsl-name-and-text blockquote .knsl-stars li,
	.knsl-faq .card .card-header:hover .knsl-faq-title,
	.knsl-pagination li a:hover,
	.knsl-pagination a:hover,
	.page-links a:hover,
	.knsl-404,
	.knsl-review-card .knsl-card-header .knsl-stars li,
	.footer .knsl-footer .knsl-footer-social a:hover,
	.hf-type-footer .knsl-footer-social a:hover,
	.footer .knsl-footer .knsl-footer-menu li a:hover,
	.hf-type-footer .knsl-footer-menu li a:hover,
	.footer .knsl-footer a:hover,
	.hf-type-footer a:hover,
	.woocommerce-info::before,
	.woocommerce .star-rating span {
		color: <?php echo esc_attr( $accent_color2 ); ?>;
	}
	@media (max-width: 992px) {
		.knsl-quote-with-author .knsl-quote-bottom:before {
			color: <?php echo esc_attr( $accent_color2 ); ?>;
		}
	}
	.knsl-badge,
	.knsl-btn.knsl-btn-accent-2,
	.knsl-btn:focus.knsl-btn-accent-2,
	.knsl-menu nav ul li:after,
	.knsl-video-frame .knsl-play-btn,
	.knsl-side-menu .knsl-sm-link:before,
	.knsl-breadcrumbs,
	.swiper-slide-thumb-active .knsl-room-detail-photo-sm {
		background-color: <?php echo esc_attr( $accent_color2 ); ?>;
	}
	.knsl-banner .knsl-banner-content .knsl-scroll-hint-frame .knsl-scroll-hint,
	.woocommerce-info {
		border-color: <?php echo esc_attr( $accent_color2 ); ?>;
	}
	.mapboxgl-marker svg g {
		fill: <?php echo esc_attr( $accent_color2 ); ?>;
	}
	<?php endif; ?>
	<?php if ( ! empty( $accent_color3 ) ) : ?>
	.knsl-accent-3,
	.knsl-blog-card .knsl-description-frame .knsl-card-bottom .knsl-price,
	.knsl-menu-card .knsl-description-frame .knsl-card-bottom .knsl-price,
	.knsl-room-card .knsl-description-frame .knsl-card-bottom .knsl-price,
	.knsl-ath-card.knsl-ath-card-2 .knsl-card-description:hover h4,
	.knsl-price-card .knsl-price-number,
	.single-mphb_room_service .knsl-room-features-lg .mphb-price-wrapper span,
	.mphb-room-type .mphb-price,
	.datepick-popup .datepick.mphb-datepick-popup .datepick-month td .datepick-today,
	.mphb-calendar .datepick .datepick-ctrl .datepick-cmd:hover,
	.datepick-popup .datepick .datepick-ctrl .datepick-cmd:hover,
	.mphb_sc_checkout-form .mphb-total-price .mphb-price,
	p .mphb-price,
	.knsl-room-default-post .mphb-price,
	.knsl-minicart-window .woocommerce-mini-cart__total .woocommerce-Price-amount,
	.woocommerce-message::before,
	.woocommerce ul.products li.product .price,
	.woocommerce div.product p.price,
	.woocommerce div.product span.price,
	.woocommerce .widget_shopping_cart .total .amount,
	.woocommerce.widget_shopping_cart .total .amount,
	.woocommerce .widget_price_filter .price_slider_amount .price_label span,
	.mphb-account-content table.mphb-account-bookings td .mphb-price {
		color: <?php echo esc_attr( $accent_color3 ); ?>;
	}
	.mphb-confirm-reservation,
	.mphb-confirm-reservation:focus,
	.knsl-ath-card .knsl-badge,
	.knsl-map-frame .knsl-lock.knsl-active,
	.knsl-book-form .mphb-booking-form .mphb-reserve-room-section .button,
	.nice-select .list .option.selected,
	.select2 .list .option.selected,
	.datepicker .datepicker--cell.-selected-,
	.datepick-popup .datepick.mphb-datepick-popup .datepick-month td a.datepick-highlight,
	.mphb-gateways-list .mphb-gateway input[type="radio"] + label:after,
 	.knsl-room-default-post .mphb-reserve-room-section .button,
	.select2-container--default .select2-results__option--highlighted.select2-results__option--selectable,
	.knsl-cart .knsl-cart-number,
	.woocommerce a.button.checkout,
	.woocommerce a.button.checkout:hover,
	#add_payment_method .wc-proceed-to-checkout a.checkout-button,
	.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
	.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
	#add_payment_method .wc-proceed-to-checkout a.checkout-button:hover,
	.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,
	.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button:hover,
	.woocommerce #payment #place_order,
	.woocommerce-page #payment #place_order,
	.woocommerce #payment #place_order:hover,
	.woocommerce-page #payment #place_order:hover {
		background-color: <?php echo esc_attr( $accent_color3 ); ?>;
	}
	.mphb-checkbox-label input[type="checkbox"] + span:after,
	.mphb-terms-and-conditions-accept label input[type="checkbox"] + span:after,
	label.checkbox-label input[type="checkbox"] + span:after,
	.login-remember label input[type="checkbox"] + span:after,
	.woocommerce-message {
		border-color: <?php echo esc_attr( $accent_color3 ); ?>;
	}
	<?php endif; ?>
	<?php if ( ! empty( $text_color1 ) ) : ?>
	a,
	a:hover,
	h1,
	h2,
	h3,
	h4,
	h5,
	h6,
	.knsl-link,
	.knsl-navigation a.knsl-left-link,
	.knsl-navigation a.knsl-right-link,
	.knsl-uni-slider-nav-panel .knsl-uni-slider-pagination,
	.knsl-uni-slider-nav-panel .knsl-uni-nav .knsl-uni-slider-next,
	.knsl-uni-slider-nav-panel .knsl-uni-nav .knsl-uni-slider-prev,
	.knsl-top-bar .container .knsl-left-side .knsl-logo-frame .knsl-logo-text,
	.hf-type-header .container .knsl-left-side .knsl-logo-frame .knsl-logo-text,
	.knsl-menu nav ul li a,
	.knsl-popup-frame .knsl-book-popup .knsl-close-popup:hover,
	.knsl-slider-nav-panel .knsl-about-slider-1-pagination,
	.knsl-slider-nav-panel .knsl-about-slider-nav .knsl-about-slider-1-next,
	.knsl-slider-nav-panel .knsl-about-slider-nav .knsl-about-slider-1-prev,
	.knsl-side-menu .knsl-sm-link,
	.knsl-filter .knsl-work-category,
	.knsl-price-card .knsl-price-number .knsl-price-number-after,
	.knsl-price-card .knsl-price-number .mphb-price-period,
	.knsl-price-card .knsl-price-number .mphb-tax-information,
	.knsl-price-card .knsl-price-number .mphb-regular-price strong,
	.single-mphb_room_service .knsl-room-features-lg .mphb-price-wrapper,
	.mphb-room-type .mphb-room-type-categories .mphb-attribute-value a,
	.mphb-room-type-categories .mphb-attribute-value a,
	.mphb-room-type .mphb-room-type-categories .mphb-attribute-value a:hover,
	.mphb-room-type-categories .mphb-attribute-value a:hover,
	.mphb-room-type .mphb-view-details-button-wrapper a,
	.mphb-room-type .mphb-view-details-button-wrapper a:hover,
	.mphb-checkout-section .mphb-price-breakdown a,
	.mphb-checkout-section .mphb-price-breakdown a:hover,
	.mphb-checkout-section .mphb-price-breakdown tfoot th,
	.mphb_sc_checkout-form .mphb-total-price,
	.mphb_sc_booking_confirmation .mphb-booking-details-section .mphb-booking-details > li span.value,
	.accommodations-list a,
	.accommodations-list a:hover,
	.mphb_sc_search_results-wrapper .mphb-recommendation .mphb-recommendation-total,
	.content-sidebar table caption,
	.single-post-text table caption,
	.content-sidebar th,
	.single-post-text table th,
	.knsl-minicart-window .woocommerce-mini-cart .woocommerce-mini-cart-item .remove_from_cart_button,
	.woocommerce #reviews #comments ol.commentlist li .comment-text p.meta strong,
	.woocommerce button[name="update_cart"].button,
	.woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
	.mphb_sc_account .mphb-account-menu ul li.active a,
	.woocommerce-MyAccount-navigation li.woocommerce-MyAccount-navigation-link.is-active a,
	.woocommerce .widget_shopping_cart .cart_list li a.remove,
	.woocommerce.widget_shopping_cart .cart_list li a.remove,
	.woocommerce .woocommerce-widget-layered-nav-list .woocommerce-widget-layered-nav-list__item--chosen a::before,
	.woocommerce .widget_layered_nav_filters ul li a::before,
	.knsl-app.knsl-app-minimal .knsl-badge,
	.knsl-app.knsl-app-minimal .knsl-badge p .mphb-price {
		color: <?php echo esc_attr( $text_color1 ); ?>;
	}
	.knsl-menu-btn span,
	.knsl-menu-btn span:after,
	.knsl-menu-btn span:before {
		background-color: <?php echo esc_attr( $text_color1 ); ?>;
	}
	.knsl-cart svg path {
		fill: <?php echo esc_attr( $text_color1 ); ?>;
	}
	<?php endif; ?>
	<?php if ( ! empty( $text_color2 ) ) : ?>
	body,
	.knsl-room-card .knsl-description-frame .knsl-card-bottom .knsl-price sup,
	.knsl-room-card .knsl-description-frame .knsl-card-bottom .knsl-price span,
	.knsl-testimonial-card .knsl-name-and-text blockquote,
	.knsl-price-card .knsl-price-number .mphb-tax-information,
	.knsl-book-form form .nice-select,
	.knsl-book-form form input[type="text"],
	.knsl-book-form form input[type="date"],
	.knsl-book-form form input[type="email"],
	.knsl-book-form form input[type="tel"],
	.knsl-book-form form input[type="password"],
	.knsl-book-form form textarea,
	.knsl-book-form form .select2 .select2-selection--single .select2-selection__rendered,
	.mphb-room-type .mphb-price-period,
	.mphb-room-type .mphb-tax-information,
	.mphb_sc_availability_calendar-wrapper .mphb-calendar .datepick,
	.mphb-customer-details input,
	.mphb-customer-details .nice-select,
	.mphb-customer-details textarea,
	.mphb-coupon-code-wrapper input,
	.mphb-login-form input[type="text"],
	.mphb-login-form input[type="password"],
	.mphb-billing-fields input,
	.mphb-billing-fields textarea,
	.mphb-stripe-payment-container .StripeElement,
	.mphb-customer-details .select2 .select2-selection--single .select2-selection__rendered,
	.knsl-room-default-post .mphb-booking-form .nice-select,
	.knsl-room-default-post .mphb-booking-form input[type="text"],
	.knsl-room-default-post .mphb-booking-form input[type="date"],
	.knsl-room-default-post .mphb-booking-form .select2 .select2-selection__rendered,
	.knsl-room-default-post .mphb-price-period,
	.comment-reply-title h3 a,
	.knsl-minicart-window .woocommerce-mini-cart__total .woocommerce-Price-amount .woocommerce-Price-currencySymbol,
	.woocommerce-error,
	.woocommerce-info,
	.woocommerce-message,
	.woocommerce-tabs input[type="text"],
	.woocommerce-tabs input[type="email"],
	.woocommerce-tabs input[type="tel"],
	.woocommerce-tabs textarea,
	.woocommerce #reviews #comments ol.commentlist li .comment-text p.meta,
	.woocommerce div.product .woocommerce-tabs ul.tabs li a,
	.woocommerce-MyAccount-navigation li.woocommerce-MyAccount-navigation-link a,
	.mphb_sc_account .mphb-account-menu ul li a,
	.woocommerce .widget_shopping_cart .total .amount .woocommerce-Price-currencySymbol,
	.woocommerce.widget_shopping_cart .total .amount .woocommerce-Price-currencySymbol,
	.mfp-wrap.popup-box-inline .mfp-close {
		color: <?php echo esc_attr( $text_color2 ); ?>;
	}
	.woocommerce div.product .woocommerce-tabs ul.tabs::before,
	.woocommerce-MyAccount-navigation ul::before,
	.mphb_sc_account .mphb-account-menu ul:before {
		border-color: <?php echo esc_attr( $text_color2 ); ?>;
	}
	<?php endif; ?>
	<?php if ( ! empty( $text_color3 ) ) : ?>
	.footer .knsl-footer .knsl-footer-about,
	.hf-type-footer .knsl-footer-about,
	.footer .knsl-copyright,
	.hf-type-footer .knsl-copyright,
	.knsl-book-form .mphb_sc_search-form > p.mphb_sc_search-check-in-date:before,
	.knsl-book-form .mphb_sc_search-form > p.mphb_sc_search-check-out-date:before,
	.knsl-book-form .mphb-booking-form > p.mphb-check-in-date-wrapper:before,
	.knsl-book-form .mphb-booking-form > p.mphb-check-out-date-wrapper:before,
	.knsl-book-form .knsl-input-frame:before,
	::-webkit-input-placeholder,
	:-ms-input-placeholder,
	::-ms-input-placeholder,
	::placeholder,
	.knsl-form-submit-frame .knsl-text-sm,
	.knsl-room-default-post .mphb-booking-form > p.mphb-check-in-date-wrapper:before,
	.knsl-room-default-post .mphb-booking-form > p.mphb-check-out-date-wrapper:before {
		color: <?php echo esc_attr( $text_color3 ); ?>;
	}
	.knsl-map-frame .knsl-lock {
		background-color: <?php echo esc_attr( $text_color3 ); ?>;
	}
	<?php endif; ?>
	<?php if ( ! empty( $bg_color1 ) ) : ?>
	.card,
	.knsl-testimonial-card .knsl-name-and-text blockquote,
	.knsl-faq,
	.mphb-room-type .mphb-room-type-facilities .mphb-attribute-value,
	.mphb-room-type-facilities .mphb-attribute-value,
	.mphb-checkout-section,
	.mphb-login-form,
	.single-post-text table,
	.content-sidebar table caption,
	.single-post-text table caption,
	.content-sidebar .search-form input[type=text],
	.content-sidebar .search-form input[type=email],
	.content-sidebar .search-form input[type=password],
	.content-sidebar .search-form input[type=datetime],
	.content-sidebar .search-form input[type=date],
	.content-sidebar .search-form input[type=month],
	.content-sidebar .search-form input[type=time],
	.content-sidebar .search-form input[type=week],
	.content-sidebar .search-form input[type=search],
	.content-sidebar .search-form textarea,
	.content-sidebar .search-form textarea.form-control,
	.wp-block-search input[type=text],
	.wp-block-search input[type=email],
	.wp-block-search input[type=password],
	.wp-block-search input[type=datetime],
	.wp-block-search input[type=date],
	.wp-block-search input[type=month],
	.wp-block-search input[type=time],
	.wp-block-search input[type=week],
	.wp-block-search input[type=search],
	.wp-block-search textarea,
	.wp-block-search textarea.form-control,
	blockquote,
	.knsl-navigation,
	.knsl-uni-slider-nav-panel .knsl-uni-slider-pagination,
	.knsl-uni-slider-nav-panel .knsl-uni-nav,
	.knsl-preloader-frame,
	.knsl-top-bar,
	.hf-type-header,
	.knsl-menu nav ul li ul,
	.knsl-banner .knsl-banner-content .knsl-scroll-hint-frame .knsl-scroll-hint:before,
	.knsl-icon-box.knsl-icon-box-sm,
	.knsl-features-card,
	.knsl-features-card:before,
	.knsl-features-card:after,
	.knsl-quote-with-author .knsl-photo-frame:before,
	.knsl-quote-with-author .knsl-photo-frame:after,
	.knsl-slider-nav-panel .knsl-about-slider-1-pagination,
	.knsl-slider-nav-panel .knsl-about-slider-nav,
	.knsl-about-card,
	.knsl-blog-card,
	.knsl-menu-card,
	.knsl-room-card,
	.knsl-blog-card .knsl-description-frame .knsl-room-features .knsl-feature .knsl-icon-frame,
	.knsl-menu-card .knsl-description-frame .knsl-room-features .knsl-feature .knsl-icon-frame,
	.knsl-room-card .knsl-description-frame .knsl-room-features .knsl-feature .knsl-icon-frame,
	.knsl-ath-card,
	.knsl-ath-card .knsl-card-description,
	.knsl-team-card,
	.knsl-side-menu,
	.knsl-pagination li a,
	.knsl-pagination a,
	.knsl-pagination span,
	.page-links a,
	.page-links span,
	.knsl-filter .knsl-work-category,
	.knsl-room-detail-slider-frame,
	.knsl-price-card,
	.knsl-room-features-lg,
	.knsl-review-card,
	.knsl-blog-post,
	.knsl-demo-item,
	input,
	textarea,
	.knsl-book-form,
	.datepicker,
	.mphb-room-type,
	.mphb-room-type .mphb-loop-room-type-attributes li:after,
	.mphb-single-room-type-attributes li:after,
	.mphb-recommendation, .mphb-reservation-cart,
	.mphb-checkbox-label input[type="checkbox"] + span:before,
	.mphb-terms-and-conditions-accept label input[type="checkbox"] + span:before,
	label.checkbox-label input[type="checkbox"] + span:before,
	.login-remember label input[type="checkbox"] + span:before,
	.knsl-room-default-post .mphb-booking-form,
	.content-sidebar table,
	.single-post-text table,
	.single-post .knsl-room-features-lg .knsl-feature .knsl-icon-frame,
	.woocommerce ul.products li.product,
	.woocommerce-page ul.products li.product,
	.woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content,
	.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
	.knsl-minicart-window,
	.woocommerce-error,
	.woocommerce-info,
	.woocommerce-message,
	.woocommerce div.product .woocommerce-tabs .panel,
	.woocommerce ul.cart_list,
	.woocommerce ul.product_list_widget {
		background-color: <?php echo esc_attr( $bg_color1 ); ?>;
	}
	.knsl-default-img,
	.knsl-banner,
	.knsl-icon-box,
	.knsl-quote-with-author .knsl-photo-frame,
	.knsl-image-frame,
	.knsl-about-card,
	.knsl-testimonial-card .knsl-avatar-frame,
	.knsl-map-frame,
	.mphb-room-type .mphb-room-type-facilities .mphb-attribute-value:before,
	.mphb-room-type-facilities .mphb-attribute-value:before,
	.mphb_sc_availability_calendar-wrapper,
	.knsl-room-default-post .mphb-single-room-type-post-thumbnail {
		border-color: <?php echo esc_attr( $bg_color1 ); ?>;
	}
	.mphb-login-form-wrap .mphb-login-form-wrap .mphb-login-form:before {
		border-bottom-color: <?php echo esc_attr( $bg_color1 ); ?>;
	}
	.knsl-breadcrumbs {
		-webkit-box-shadow: 0 0 0 10px <?php echo esc_attr( $bg_color1 ); ?>, 0 2px 48px 0 rgba(0, 0, 0, 0.04);
	  box-shadow: 0 0 0 10px <?php echo esc_attr( $bg_color1 ); ?>, 0 2px 48px 0 rgba(0, 0, 0, 0.04);
	}
	@media (max-width: 992px) {
		.knsl-quote-with-author .knsl-quote-bottom,
		.knsl-top-bar .container .knsl-right-side,
	  .hf-type-header .container .knsl-right-side,
	  .elementor-widget-kinsley-header-menu {
			background-color: <?php echo esc_attr( $bg_color1 ); ?>;
		}
	}
	<?php endif; ?>
	<?php if ( ! empty( $bg_color2 ) ) : ?>
	body,
	.knsl-icon-box,
	.knsl-blog-card .knsl-description-frame .knsl-room-features,
	.knsl-menu-card .knsl-description-frame .knsl-room-features,
	.knsl-room-card .knsl-description-frame .knsl-room-features,
	.knsl-blog-post blockquote,
	.mphb-room-type .mphb-loop-room-type-attributes,
	.mphb-single-room-type-attributes,
	.knsl-menu nav ul ul ul {
		background-color: <?php echo esc_attr( $bg_color2 ); ?>;
	}
	@media (max-width: 992px) {
		.knsl-menu nav ul li ul {
			background-color: <?php echo esc_attr( $bg_color2 ); ?>;
		}
	}
	<?php endif; ?>
	<?php if ( ! empty( $bg_color3 ) ) : ?>
	.knsl-transition-top,
	.knsl-transition-top:before,
	.knsl-transition-bottom,
	.knsl-transition-bottom:after,
	.knsl-transition-middle,
	.knsl-preloader-frame .knsl-preloader .knsl-preloader-progress,
	.knsl-banner .knsl-cover-frame,
	.knsl-banner-simple,
	.knsl-team-card .knsl-team-member-descr .knsl-member-social li a,
	.knsl-room-features-lg .knsl-feature .knsl-icon-frame,
	.knsl-room-features-lg .mphb-single-room-type-attributes li:after,
	.knsl-book-form form .nice-select,
	.knsl-book-form form input[type="text"],
	.knsl-book-form form input[type="date"],
	.knsl-book-form form input[type="tel"],
	.knsl-book-form form input[type="email"],
	.knsl-book-form form input[type="password"],
	.knsl-book-form form textarea,
	.knsl-book-form form .select2 .select2-selection--single,
	.mphb-calendar .datepick .datepick-ctrl .datepick-cmd:hover,
	.datepick-popup .datepick .datepick-ctrl .datepick-cmd:hover,
	.mphb-calendar .datepick .datepick-month a,
	.datepick-popup .datepick .datepick-month a,
	.mphb-calendar .datepick .datepick-month a.datepick-weekend,
	.datepick-popup .datepick .datepick-month a.datepick-weekend,
	.mphb-customer-details input,
	.mphb-customer-details .nice-select,
	.mphb-customer-details textarea,
	.mphb-coupon-code-wrapper input,
	.mphb-login-form input[type="text"],
	.mphb-login-form input[type="password"],
	.mphb-billing-fields input,
	.mphb-billing-fields textarea,
	.mphb-customer-details .select2 .select2-selection--single,
	.mphb-terms-and-conditions-accept label input[type="checkbox"] + span:before,
	label.checkbox-label input[type="checkbox"] + span:before,
	.login-remember label input[type="checkbox"] + span:before,
	.knsl-room-default-post .mphb-booking-form .nice-select,
	.knsl-room-default-post .mphb-booking-form input[type="text"],
	.knsl-room-default-post .mphb-booking-form input[type="date"],
	.knsl-room-default-post .mphb-booking-form .select2 .select2-selection--single,
	::-webkit-scrollbar-track,
	.mphb-checkout-section .mphb-reserve-rooms-details,
	.mphb-checkout-section .mphb-price-breakdown .mphb-price-breakdown-group td,
	.mphb-checkout-section .mphb-price-breakdown tfoot th,
	.mphb-checkout-section .mphb-price-breakdown tfoot td,
	.mphb-gateways-list .mphb-gateway input[type="radio"] + label:before,
	.mphb-stripe-payment-container .StripeElement,
	.knsl-transition-top:after,
	.knsl-transition-bottom:before,
	.woocommerce-tabs input[type="text"],
	.woocommerce-tabs input[type="email"],
	.woocommerce-tabs input[type="tel"],
	.woocommerce-tabs textarea,
	.woocommerce-tabs .select2-container--default .select2-selection--single,
	#add_payment_method #payment div.payment_box,
	.woocommerce-cart #payment div.payment_box,
	.woocommerce-checkout #payment div.payment_box {
		background-color: <?php echo esc_attr( $bg_color3 ); ?>;
	}
	#add_payment_method #payment div.payment_box::before,
	.woocommerce-cart #payment div.payment_box::before,
	.woocommerce-checkout #payment div.payment_box::before {
		border-bottom-color: <?php echo esc_attr( $bg_color3 ); ?>;
	}
	<?php endif; ?>
	<?php if ( ! empty( $bg_color2 ) && ! empty( $bg_color3 ) ) : ?>
	.knsl-transition-top:before {
		background-color: <?php echo esc_attr( $bg_color2 ); ?>;
		background: linear-gradient(135deg, <?php echo esc_attr( $bg_color2 ); ?> 25%, transparent 25%) -50px 0, linear-gradient(225deg, <?php echo esc_attr( $bg_color2 ); ?> 25%, transparent 25%) -50px 0, linear-gradient(315deg, <?php echo esc_attr( $bg_color3 ); ?> 25%, transparent 25%), linear-gradient(45deg, <?php echo esc_attr( $bg_color3 ); ?> 25%, transparent 25%);
		background-size: 50px 50px;
		background-color: <?php echo esc_attr( $bg_color3 ); ?>;
	}
	.knsl-transition-bottom:after {
		background-color: <?php echo esc_attr( $bg_color3 ); ?>;
		background: linear-gradient(135deg, <?php echo esc_attr( $bg_color3 ); ?> 25%, transparent 25%) -50px 0, linear-gradient(225deg, <?php echo esc_attr( $bg_color3 ); ?> 25%, transparent 25%) -50px 0, linear-gradient(315deg, <?php echo esc_attr( $bg_color2 ); ?> 25%, transparent 25%), linear-gradient(45deg, <?php echo esc_attr( $bg_color2 ); ?> 25%, transparent 25%);
		background-size: 50px 50px;
		background-color: <?php echo esc_attr( $bg_color2 ); ?>;
	}
	<?php endif; ?>
	/*End Colors Options*/

	/*Begin Typography Options*/
	<?php if ( ! empty( $text_font_size ) ) : ?>
	body,
	.knsl-blog-card .knsl-description-frame .knsl-card-bottom .knsl-price sup,
	.knsl-menu-card .knsl-description-frame .knsl-card-bottom .knsl-price sup,
	.knsl-room-card .knsl-description-frame .knsl-card-bottom .knsl-price sup,
	.knsl-blog-card .knsl-description-frame .knsl-card-bottom .knsl-price span,
	.knsl-menu-card .knsl-description-frame .knsl-card-bottom .knsl-price span,
	.knsl-room-card .knsl-description-frame .knsl-card-bottom .knsl-price span,
	.knsl-ath-card .knsl-badge span,
	.knsl-testimonial-card .knsl-name-and-text blockquote,
	.knsl-filter .knsl-work-category,
	.knsl-room-features-lg .mphb-single-room-type-attributes li,
	.knsl-review-card blockquote,
	.footer .knsl-copyright,
	.hf-type-footer .knsl-copyright,
	.knsl-book-form.knsl-book-form-2 .mphb_sc_search-form > p.mphb_sc_search-submit-button-wrapper button,
	.mphb-room-type .mphb-price-period,
	.mphb-room-type .mphb-tax-information,
	.mphb_sc_availability_calendar-wrapper .mphb-calendar .datepick,
	.mphb-checkout-section h4.mphb-services-details-title,
	.knsl-room-default-post .mphb-price-period,
	.knsl-room-default-post .mphb-single-room-type-attributes li,
	input[type="submit"],
	input#submit {
		font-size: <?php echo esc_attr( $text_font_size ); ?>px;
	}
	<?php endif; ?>
	<?php if ( ! empty( $text_font_weight ) ) : ?>
	body,
	.mphb_sc_availability_calendar-wrapper .mphb-calendar .datepick {
		font-weight: <?php echo esc_attr( $text_font_weight ); ?>;
	}
	<?php endif; ?>
	<?php if ( isset( $text_letter_spacing ) && $text_letter_spacing != '' ) : ?>
	body,
	.mphb_sc_availability_calendar-wrapper .mphb-calendar .datepick {
		letter-spacing: <?php echo esc_attr( $text_letter_spacing ); ?>px;
	}
	<?php endif; ?>
	<?php if ( ! empty( $text_font_family ) ) : ?>
	body,
	.datepicker *,
	.mphb_sc_availability_calendar-wrapper .mphb-calendar .datepick,
	.mfp-wrap.popup-box .mfp-close,
	.mfp-wrap.popup-box-inline .mfp-close {
		font-family: '<?php echo esc_attr( $text_font_family['font_name'] ); ?>';
	}
	<?php endif; ?>
	<?php if ( ! empty( $heading1_font_size ) ) : ?>
	@media (min-width: 993px) {
		h1.knsl-h1-inner,
		div.knsl-h1-inner,
		h1 {
			font-size: <?php echo esc_attr( $heading1_font_size ); ?>px;
		}
	}
	<?php endif; ?>
	<?php if ( ! empty( $heading1_font_weight ) ) : ?>
	h1.knsl-h1-inner,
	div.knsl-h1-inner,
	h1 {
		font-weight: <?php echo esc_attr( $heading1_font_weight ); ?>;
	}
	<?php endif; ?>
	<?php if ( isset( $heading1_letter_spacing ) && $heading1_letter_spacing != '' ) : ?>
	@media (min-width: 993px) {
		h1.knsl-h1-inner,
		div.knsl-h1-inner,
		h1 {
			letter-spacing: <?php echo esc_attr( $heading1_letter_spacing ); ?>px;
		}
	}
	<?php endif; ?>
	<?php if ( ! empty( $heading1_font_family ) ) : ?>
	h1.knsl-h1-inner,
	div.knsl-h1-inner,
	h1 {
		font-family: '<?php echo esc_attr( $heading1_font_family['font_name'] ); ?>';
	}
	<?php endif; ?>
	<?php if ( ! empty( $heading2_font_size ) ) : ?>
	@media (min-width: 993px) {
		h2 {
			font-size: <?php echo esc_attr( $heading2_font_size ); ?>px;
		}
	}
	<?php endif; ?>
	<?php if ( ! empty( $heading2_font_weight ) ) : ?>
	h2 {
		font-weight: <?php echo esc_attr( $heading2_font_weight ); ?>;
	}
	<?php endif; ?>
	<?php if ( isset( $heading2_letter_spacing ) && $heading2_letter_spacing != '' ) : ?>
	@media (min-width: 993px) {
		h2 {
			letter-spacing: <?php echo esc_attr( $heading2_letter_spacing ); ?>px;
		}
	}
	<?php endif; ?>
	<?php if ( ! empty( $heading2_font_family ) ) : ?>
	h2 {
		font-family: '<?php echo esc_attr( $heading2_font_family['font_name'] ); ?>';
	}
	<?php endif; ?>
	<?php if ( ! empty( $heading3_font_size ) ) : ?>
	@media (min-width: 993px) {
		h3,
		.knsl-room-default-post h2,
		.knsl-room-default-post h3,
		.woocommerce h2,
		.woocommerce ul.products li.product .woocommerce-loop-category__title,
		.woocommerce ul.products li.product .woocommerce-loop-product__title,
		.woocommerce ul.products li.product h3 {
			font-size: <?php echo esc_attr( $heading3_font_size ); ?>px;
		}
	}
	<?php endif; ?>
	<?php if ( ! empty( $heading3_font_weight ) ) : ?>
	h3,
	.mphb-room-type h2,
	.knsl-room-default-post h2,
	.knsl-room-default-post h3 {
		font-weight: <?php echo esc_attr( $heading3_font_weight ); ?>;
	}
	<?php endif; ?>
	<?php if ( isset( $heading3_letter_spacing ) && $heading3_letter_spacing != '' ) : ?>
	@media (min-width: 993px) {
		h3,
		.mphb-room-type h2,
		.knsl-room-default-post h2,
		.knsl-room-default-post h3 {
			letter-spacing: <?php echo esc_attr( $heading3_letter_spacing ); ?>px;
		}
	}
	<?php endif; ?>
	<?php if ( ! empty( $heading3_font_family ) ) : ?>
	h3,
	.mphb-room-type h2,
	.knsl-room-default-post h2,
	.knsl-room-default-post h3 {
		font-family: '<?php echo esc_attr( $heading3_font_family['font_name'] ); ?>';
	}
	<?php endif; ?>
	<?php if ( ! empty( $heading4_font_size ) ) : ?>
	@media (min-width: 993px) {
		h4 {
			font-size: <?php echo esc_attr( $heading4_font_size ); ?>px;
		}
	}
	<?php endif; ?>
	<?php if ( ! empty( $heading4_font_weight ) ) : ?>
	h4 {
		font-weight: <?php echo esc_attr( $heading4_font_weight ); ?>;
	}
	<?php endif; ?>
	<?php if ( isset( $heading4_letter_spacing ) && $heading4_letter_spacing != '' ) : ?>
	@media (min-width: 993px) {
		h4 {
			letter-spacing: <?php echo esc_attr( $heading4_letter_spacing ); ?>px;
		}
	}
	<?php endif; ?>
	<?php if ( ! empty( $heading4_font_family ) ) : ?>
	h4 {
		font-family: '<?php echo esc_attr( $heading4_font_family['font_name'] ); ?>';
	}
	<?php endif; ?>
	<?php if ( ! empty( $menu_font_size ) ) : ?>
	@media (min-width: 993px) {
		.knsl-menu nav ul li a {
			font-size: <?php echo esc_attr( $menu_font_size ); ?>px;
		}
	}
	<?php endif; ?>
	<?php if ( ! empty( $menu_font_weight ) ) : ?>
	.knsl-menu nav ul li a {
		font-weight: <?php echo esc_attr( $menu_font_weight ); ?>;
	}
	<?php endif; ?>
	<?php if ( isset( $menu_letter_spacing ) && $menu_letter_spacing != '' ) : ?>
	@media (min-width: 993px) {
		.knsl-menu nav ul li a {
			letter-spacing: <?php echo esc_attr( $menu_letter_spacing ); ?>px;
		}
	}
	<?php endif; ?>
	<?php if ( ! empty( $menu_font_family ) ) : ?>
	.knsl-menu nav ul li a {
		font-family: '<?php echo esc_attr( $menu_font_family['font_name'] ); ?>';
	}
	<?php endif; ?>
	/*End Typography Options*/

	/*Begin Buttons Options*/
	<?php if ( ! empty( $btn_text_color ) ) : ?>
	.knsl-btn,
	.knsl-btn:focus,
	.button,
	.button:focus,
	input[type="submit"],
	input#submit,
	.woocommerce #respond input#submit,
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce input.button,
	.woocommerce #respond input#submit:hover,
	.woocommerce a.button:hover,
	.woocommerce button.button:hover,
	.woocommerce input.button:hover,
	.woocommerce #respond input#submit.alt:hover,
	.woocommerce a.button.alt:hover,
	.woocommerce button.button.alt:hover,
	.woocommerce input.button.alt:hover,
	.woocommerce #respond input#submit.alt.disabled,
	.woocommerce #respond input#submit.alt.disabled:hover,
	.woocommerce #respond input#submit.alt:disabled,
	.woocommerce #respond input#submit.alt:disabled:hover,
	.woocommerce #respond input#submit.alt:disabled[disabled],
	.woocommerce #respond input#submit.alt:disabled[disabled]:hover,
	.woocommerce a.button.alt.disabled,
	.woocommerce a.button.alt.disabled:hover,
	.woocommerce a.button.alt:disabled,
	.woocommerce a.button.alt:disabled:hover,
	.woocommerce a.button.alt:disabled[disabled],
	.woocommerce a.button.alt:disabled[disabled]:hover,
	.woocommerce button.button.alt.disabled,
	.woocommerce button.button.alt.disabled:hover,
	.woocommerce button.button.alt:disabled,
	.woocommerce button.button.alt:disabled:hover,
	.woocommerce button.button.alt:disabled[disabled],
	.woocommerce button.button.alt:disabled[disabled]:hover,
	.woocommerce input.button.alt.disabled,
	.woocommerce input.button.alt.disabled:hover,
	.woocommerce input.button.alt:disabled,
	.woocommerce input.button.alt:disabled:hover,
	.woocommerce input.button.alt:disabled[disabled],
	.woocommerce input.button.alt:disabled[disabled]:hover,
	.woocommerce div.product form.cart .button,
	button.scrollTopStick,
	button.scrollTopStick i {
		color: <?php echo esc_attr( $btn_text_color ); ?>;
	}
	<?php endif; ?>
	<?php if ( ! empty( $btn_bg_color ) ) : ?>
	.knsl-btn,
	.knsl-btn:focus,
	.button,
	.button:focus,
	input[type="submit"],
	input#submit,
	.woocommerce #respond input#submit,
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce input.button,
	.woocommerce #respond input#submit:hover,
	.woocommerce a.button:hover,
	.woocommerce button.button:hover,
	.woocommerce input.button:hover,
	.woocommerce #respond input#submit.alt:hover,
	.woocommerce a.button.alt:hover,
	.woocommerce button.button.alt:hover,
	.woocommerce input.button.alt:hover,
	.woocommerce #respond input#submit.alt.disabled,
	.woocommerce #respond input#submit.alt.disabled:hover,
	.woocommerce #respond input#submit.alt:disabled,
	.woocommerce #respond input#submit.alt:disabled:hover,
	.woocommerce #respond input#submit.alt:disabled[disabled],
	.woocommerce #respond input#submit.alt:disabled[disabled]:hover,
	.woocommerce a.button.alt.disabled,
	.woocommerce a.button.alt.disabled:hover,
	.woocommerce a.button.alt:disabled,
	.woocommerce a.button.alt:disabled:hover,
	.woocommerce a.button.alt:disabled[disabled],
	.woocommerce a.button.alt:disabled[disabled]:hover,
	.woocommerce button.button.alt.disabled,
	.woocommerce button.button.alt.disabled:hover,
	.woocommerce button.button.alt:disabled,
	.woocommerce button.button.alt:disabled:hover,
	.woocommerce button.button.alt:disabled[disabled],
	.woocommerce button.button.alt:disabled[disabled]:hover,
	.woocommerce input.button.alt.disabled,
	.woocommerce input.button.alt.disabled:hover,
	.woocommerce input.button.alt:disabled,
	.woocommerce input.button.alt:disabled:hover,
	.woocommerce input.button.alt:disabled[disabled],
	.woocommerce input.button.alt:disabled[disabled]:hover,
	.woocommerce div.product form.cart .button,
	.knsl-app.knsl-app-minimal.knsl-app-dark a.knsl-btn.knsl-btn-md:hover,
	button.scrollTopStick.active {
		background-color: <?php echo esc_attr( $btn_bg_color ); ?>;
	}
	<?php endif; ?>
	<?php if ( ( isset( $btn_border_size ) && $btn_border_size != '' ) || ! empty( $btn_border_color ) ) :
		if ( ( isset( $btn_border_size ) && $btn_border_size != '' ) && ! ! empty( $btn_border_color ) ) : $btn_border_color = '#FFFFFF'; endif;
		if ( ! empty( $btn_border_color ) && ! ( isset( $btn_border_size ) && $btn_border_size != '' ) ) : $btn_border_size = 10; endif;
	?>
	.knsl-btn,
	.knsl-btn:focus,
	.button,
	.button:focus,
	input[type="submit"],
	input#submit {
		-webkit-box-shadow: 0 0 0 <?php echo esc_attr( $btn_border_size ); ?>px <?php echo esc_attr( $btn_border_color ); ?>, 0 2px 48px 0 rgba(0, 0, 0, 0.04) !important;
	  box-shadow: 0 0 0 <?php echo esc_attr( $btn_border_size ); ?>px <?php echo esc_attr( $btn_border_color ); ?>, 0 2px 48px 0 rgba(0, 0, 0, 0.04) !important;
	}
	<?php endif; ?>
	<?php if ( ! empty( $btn_font_size ) ) : ?>
	@media (min-width: 993px) {
		.knsl-btn,
		.knsl-btn:focus,
		.button,
		.button:focus,
		input[type="submit"],
		input#submit {
			font-size: <?php echo esc_attr( $btn_font_size ); ?>px;
		}
	}
	<?php endif; ?>
	<?php if ( ! empty( $btn_font_weight ) ) : ?>
	.knsl-btn,
	.knsl-btn:focus,
	.button,
	.button:focus,
	input[type="submit"],
	input#submit {
		font-weight: <?php echo esc_attr( $btn_font_weight ); ?>;
	}
	<?php endif; ?>
	<?php if ( ! empty( $btn_font_family ) ) : ?>
	.knsl-btn,
	.knsl-btn:focus,
	.button,
	.button:focus,
	input[type="submit"],
	input#submit {
		font-family: '<?php echo esc_attr( $btn_font_family['font_name'] ); ?>';
	}
	<?php endif; ?>
	<?php if ( isset( $btn_letter_spacing ) && $btn_letter_spacing != '' ) : ?>
	@media (min-width: 993px) {
		.knsl-btn,
		.knsl-btn:focus,
		.button,
		.button:focus,
		input[type="submit"],
		input#submit {
			letter-spacing: <?php echo esc_attr( $btn_letter_spacing ); ?>px;
		}
	}
	<?php endif; ?>
	<?php if ( isset( $btn_border_radius ) & $btn_border_radius != '' ) : ?>
	.knsl-btn,
	.knsl-btn:focus,
	.button,
	.button:focus,
	input[type="submit"],
	input#submit,
	.woocommerce #respond input#submit,
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce input.button,
	.woocommerce div.product form.cart .button {
		border-radius: <?php echo esc_attr( $btn_border_radius ); ?>px;
	}
	<?php endif; ?>
	<?php if ( isset( $btn_height ) & $btn_height != '' ) : ?>
	.knsl-btn,
	.knsl-btn:focus,
	.button,
	.button:focus,
	input[type="submit"],
	input#submit,
	.woocommerce #respond input#submit,
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce input.button,
	.woocommerce div.product form.cart .button {
		height: <?php echo esc_attr( $btn_height ); ?>px;
	}
	<?php endif; ?>
	<?php if ( isset( $btn_transform ) & $btn_transform != '' ) : ?>
	.knsl-btn,
	.knsl-btn:focus,
	.button,
	.button:focus,
	input[type="submit"],
	input#submit,
	.woocommerce #respond input#submit,
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce input.button,
	.woocommerce div.product form.cart .button {
		text-transform: <?php echo esc_attr( $btn_transform ); ?>;
	}
	<?php endif; ?>
	/*End Buttons Options*/

	/*Begin Breadcrumbs Options*/
	<?php if ( ! empty( $brc_text_color ) ) : ?>
	.knsl-breadcrumbs li a,
	.knsl-breadcrumbs li:last-child a,
	.knsl-breadcrumbs li:last-child a:hover {
		color: <?php echo esc_attr( $brc_text_color ); ?>;
	}
	<?php endif; ?>
	<?php if ( ! empty( $brc_bg_color ) ) : ?>
	.knsl-breadcrumbs {
		background-color: <?php echo esc_attr( $brc_bg_color ); ?>;
	}
	<?php endif; ?>
	<?php if ( ( isset( $brc_border_size ) && $brc_border_size != '' ) || ! empty( $brc_border_color ) ) :
		if ( ( isset( $brc_border_size ) && $brc_border_size != '' ) && ! ! empty( $brc_border_color ) ) : $brc_border_color = '#FFFFFF'; endif;
		if ( ! empty( $brc_border_color ) && ! ( isset( $brc_border_size ) && $brc_border_size != '' ) ) : $brc_border_size = 10; endif;
	?>
	.knsl-breadcrumbs {
		-webkit-box-shadow: 0 0 0 <?php echo esc_attr( $brc_border_size ); ?>px <?php echo esc_attr( $brc_border_color ); ?>, 0 2px 48px 0 rgba(0, 0, 0, 0.04) !important;
	  box-shadow: 0 0 0 <?php echo esc_attr( $brc_border_size ); ?>px <?php echo esc_attr( $brc_border_color ); ?>, 0 2px 48px 0 rgba(0, 0, 0, 0.04) !important;
	}
	<?php endif; ?>
	<?php if ( ! empty( $brc_font_size ) ) : ?>
	@media (min-width: 993px) {
		.knsl-breadcrumbs {
			font-size: <?php echo esc_attr( $brc_font_size ); ?>px;
		}
	}
	<?php endif; ?>
	<?php if ( ! empty( $brc_font_weight ) ) : ?>
	.knsl-breadcrumbs {
		font-weight: <?php echo esc_attr( $brc_font_weight ); ?>;
	}
	<?php endif; ?>
	<?php if ( ! empty( $brc_font_family ) ) : ?>
	.knsl-breadcrumbs {
		font-family: '<?php echo esc_attr( $brc_font_family['font_name'] ); ?>';
	}
	<?php endif; ?>
	<?php if ( isset( $brc_letter_spacing ) && $brc_letter_spacing != '' ) : ?>
	@media (min-width: 993px) {
		.knsl-breadcrumbs {
			letter-spacing: <?php echo esc_attr( $brc_letter_spacing ); ?>px;
		}
	}
	<?php endif; ?>
	<?php if ( isset( $brc_border_radius ) && $brc_border_radius != '' ) : ?>
	.knsl-breadcrumbs {
		border-radius: <?php echo esc_attr( $brc_border_radius ); ?>px;
	}
	<?php endif; ?>
	/*End Breadcrumbs Options*/

	/*Begin Preloader Options*/
	<?php if ( ! empty( $preloader ) ) : ?>
	.knsl-preloader-frame {
		display: none !important;
	}
	<?php endif; ?>
	<?php if ( ! empty( $preloader_counter ) ) : ?>
	.knsl-preloader-frame .knsl-preloader-number-wrap {
		display: none !important;
	}
	<?php endif; ?>
	<?php if ( ! empty( $preloader_logo_width ) ) : ?>
	.knsl-preloader-frame .knsl-preloader img {
		width: <?php echo esc_attr( $preloader_logo_width ); ?>px;
	}
	<?php endif; ?>
	<?php if ( ! empty( $preloader_line_height ) ) : ?>
	.knsl-preloader-frame .knsl-preloader .knsl-preloader-progress {
		height: <?php echo esc_attr( $preloader_line_height ); ?>px;
	}
	<?php endif; ?>
	<?php if ( ! empty( $preloader_color ) ) : ?>
	.knsl-preloader-frame .knsl-preloader .knsl-preloader-progress .knsl-preloader-bar {
		background-color: <?php echo esc_attr( $preloader_color ); ?>!important;
	}
	<?php endif; ?>
	/*End Preloader Options*/

	/*Begin Accommodation Attributes Custom Icons*/
	<?php if ( class_exists( 'HotelBookingPlugin' ) ) :
	$args = array(
		'post_type'				=> 'mphb_room_attribute',
		'post_status'			=> 'publish',
		'posts_per_page' 	=> -1,
	);

	$q = new \WP_Query( $args );

	if ( $q->have_posts() ) :

	while ( $q->have_posts() ) : $q->the_post(); $icon = get_field( 'icon' ); if ( $icon ) : ?>
	.mphb-room-type .mphb-loop-room-type-attributes li.mphb-room-type-custom-attribute.mphb-room-type-<?php echo esc_attr( get_post_field( 'post_name', get_the_ID() ) ); ?>:before,
	.mphb-single-room-type-attributes li.mphb-room-type-custom-attribute.mphb-room-type-<?php echo esc_attr( get_post_field( 'post_name', get_the_ID() ) ); ?>:before {
    background-image: url(<?php echo esc_url( $icon ); ?>);
	}
	<?php endif; endwhile; endif; wp_reset_postdata(); endif; ?>
	/*End Accommodation Attributes Custom Icons*/

	<?php if ( $calendar_custom ) : ?>
	/*Begin Custom Calendar Colors*/
	.mphb-calendar .datepick .datepick-nav,
	.datepick-popup .datepick .datepick-nav {
	background-color: <?php echo esc_attr( $calendar_nav_bg_color ); ?>;
	}
	.mphb-calendar .datepick .datepick-nav a,
	.datepick-popup .datepick .datepick-nav a {
	color: <?php echo esc_attr( $calendar_nav_color ); ?>;
	}
	.mphb-calendar .datepick .datepick-nav a:hover,
	.datepick-popup .datepick .datepick-nav a:hover {
	background-color: <?php echo esc_attr( $calendar_nav_hover_color ); ?>;
	color: <?php echo esc_attr( $calendar_nav_color ); ?>;
	}
	.mphb-calendar .datepick .datepick-nav a.datepick-disabled,
	.datepick-popup .datepick .datepick-nav a.datepick-disabled {
	color: <?php echo esc_attr( $calendar_nav_color ); ?>;
	opacity: 0.8;
	}
	.mphb-calendar .datepick .datepick-nav a.datepick-disabled:hover,
	.datepick-popup .datepick .datepick-nav a.datepick-disabled:hover {
	background-color: <?php echo esc_attr( $calendar_nav_bg_color ); ?>;
	}
	.mphb-calendar .datepick .datepick-ctrl,
	.datepick-popup .datepick .datepick-ctrl {
	background-color: <?php echo esc_attr( $calendar_day_bg_color ); ?>;
	}
	.mphb-calendar .datepick .datepick-ctrl a,
	.datepick-popup .datepick .datepick-ctrl a {
	color: <?php echo esc_attr( $calendar_primary_color ); ?>;
	}
	.mphb-calendar .datepick .datepick-ctrl .datepick-cmd:hover,
	.datepick-popup .datepick .datepick-ctrl .datepick-cmd:hover {
	background-color: <?php echo esc_attr( $calendar_nav_hover_color ); ?>;
	color: <?php echo esc_attr( $calendar_primary_color ); ?>;
	}
	.mphb-calendar .datepick .datepick-month-header, .mphb-calendar .datepick .datepick-month-header select, .mphb-calendar .datepick .datepick-month-header input,
	.datepick-popup .datepick .datepick-month-header,
	.datepick-popup .datepick .datepick-month-header select,
	.datepick-popup .datepick .datepick-month-header input {
	background-color: <?php echo esc_attr( $calendar_header_bg_color ); ?>;
	color: <?php echo esc_attr( $calendar_header_color ); ?>;
	}
	@media screen and (min-width: 48em) {
	.mphb-calendar .datepick .datepick-month + .datepick-month,
	.datepick-popup .datepick .datepick-month + .datepick-month {
		border-left-color: <?php echo esc_attr( $calendar_day_bg_color ); ?>;
	}
	}
	.mphb-calendar .datepick .datepick-month th,
	.datepick-popup .datepick .datepick-month th {
	border-color: <?php echo esc_attr( $calendar_day_bg_color ); ?>;
	}
	.mphb-calendar .datepick .datepick-month th,
	.mphb-calendar .datepick .datepick-month th a,
	.datepick-popup .datepick .datepick-month th,
	.datepick-popup .datepick .datepick-month th a {
	background-color: <?php echo esc_attr( $calendar_day_name_bg_color ); ?>;
	color: <?php echo esc_attr( $calendar_day_name_color ); ?>;
	}
	.mphb-calendar .datepick .datepick-month td,
	.datepick-popup .datepick .datepick-month td {
	background-color: <?php echo esc_attr( $calendar_day_bg_color ); ?>;
	border-color: <?php echo esc_attr( $calendar_day_bg_color ); ?>;
	}
	.mphb-calendar .datepick .datepick-month a,
	.datepick-popup .datepick .datepick-month a {
	background-color: <?php echo esc_attr( $calendar_day_bg_color ); ?>;
	color: <?php echo esc_attr( $calendar_day_color ); ?>;
	}
	.mphb-calendar .datepick .datepick-month td span,
	.datepick-popup .datepick .datepick-month td span {
	color: <?php echo esc_attr( $calendar_day_disabled_color ); ?>;
	}
	.mphb-calendar .datepick .datepick-month td .datepick-weekend,
	.datepick-popup .datepick .datepick-month td .datepick-weekend,
	.datepick-month td .datepick-other-month {
	background-color: <?php echo esc_attr( $calendar_day_bg_color ); ?>;
	}
	.mphb-calendar.mphb-datepick .datepick .datepick-month td .mphb-available-date {
	background-color: <?php echo esc_attr( $calendar_day_available_color ); ?> !important;
	color: <?php echo esc_attr( $calendar_day_color ); ?> !important;
	}
	.mphb-calendar.mphb-datepick .datepick .datepick-month td .mphb-available-date.mphb-date-check-out {
	background: -webkit-gradient(linear, left top, right bottom, from(<?php echo esc_attr( $calendar_day_booked_color ); ?>), color-stop(50%, <?php echo esc_attr( $calendar_day_booked_color ); ?>), color-stop(50%, <?php echo esc_attr( $calendar_day_available_color ); ?>), to(<?php echo esc_attr( $calendar_day_available_color ); ?>)) !important;
	background: linear-gradient(to bottom right, <?php echo esc_attr( $calendar_day_booked_color ); ?> 0%, <?php echo esc_attr( $calendar_day_booked_color ); ?> 50%, <?php echo esc_attr( $calendar_day_available_color ); ?> 50%, <?php echo esc_attr( $calendar_day_available_color ); ?> 100%) !important;
	}
	.mphb-calendar.mphb-datepick .datepick .datepick-month td .mphb-not-stay-in-date:not(.mphb-past-date),
	.mphb-calendar.mphb-datepick .datepick .datepick-month td .mphb-not-available-date,
	.datepick-popup .datepick.mphb-datepick-popup .datepick-month td .mphb-not-stay-in-date:not(.mphb-past-date),
	.datepick-popup .datepick.mphb-datepick-popup .datepick-month td .mphb-not-available-date {
	background-color: <?php echo esc_attr( $calendar_day_bg_color ); ?>;
	color: <?php echo esc_attr( $calendar_day_disabled_color ); ?>;
	}
	.mphb-calendar.mphb-datepick .datepick .datepick-month td .mphb-past-date,
	.datepick-popup .datepick.mphb-datepick-popup .datepick-month td .mphb-past-date {
	background-color: <?php echo esc_attr( $calendar_day_bg_color ); ?>;
	color: <?php echo esc_attr( $calendar_day_disabled_color ); ?>;
	}
	.mphb-calendar.mphb-datepick .datepick .datepick-month td .mphb-earlier-min-date,
	.mphb-calendar.mphb-datepick .datepick .datepick-month td .mphb-later-max-date,
	.datepick-popup .datepick.mphb-datepick-popup .datepick-month td .mphb-earlier-min-date,
	.datepick-popup .datepick.mphb-datepick-popup .datepick-month td .mphb-later-max-date {
	background-color: <?php echo esc_attr( $calendar_day_bg_color ); ?>;
	color: <?php echo esc_attr( $calendar_day_disabled_color ); ?>;
	}
	.mphb-calendar.mphb-datepick .datepick .datepick-month td .datepick-selected,
	.datepick-popup .datepick.mphb-datepick-popup .datepick-month td .datepick-selected {
	background-color: <?php echo esc_attr( $calendar_primary_color ); ?>;
	color: <?php echo esc_attr( $calendar_day_active_color ); ?>;
	}
	.datepick-popup .datepick.mphb-datepick-popup .datepick-month td .datepick-today {
	background-color: <?php echo esc_attr( $calendar_day_bg_color ); ?>;
	color: <?php echo esc_attr( $calendar_primary_color ); ?>;
	}
	.datepick-popup .datepick.mphb-datepick-popup .datepick-month td .mphb-booked-date:not(.mphb-selectable-date) {
	background-color: <?php echo esc_attr( $calendar_day_bg_color ); ?>;
	color:<?php echo esc_attr( $calendar_day_disabled_color ); ?>;
	}
	.datepick-popup .datepick.mphb-datepick-popup .datepick-month td a.datepick-highlight {
	background-color: <?php echo esc_attr( $calendar_primary_color ); ?>;
	color: <?php echo esc_attr( $calendar_day_active_color ); ?>;
	}
	.datepick-popup .datepick.mphb-datepick-popup.mphb-check-in-datepick .datepick-month td .mphb-not-check-in-date:not(.mphb-past-date) {
	background-color: <?php echo esc_attr( $calendar_day_bg_color ); ?>;
	color: <?php echo esc_attr( $calendar_day_disabled_color ); ?>;
	}
	.datepick-popup .datepick.mphb-datepick-popup.mphb-check-out-datepick .datepick-month td .mphb-not-check-out-date:not(.mphb-past-date) {
	background-color: <?php echo esc_attr( $calendar_day_bg_color ); ?>;
	color: <?php echo esc_attr( $calendar_day_disabled_color ); ?>;
	}
	.datepick-popup .datepick.mphb-datepick-popup.mphb-check-out-datepick .datepick-month td span.mphb-check-in-date:not(.mphb-past-date) {
	background-color: <?php echo esc_attr( $calendar_header_bg_color ); ?>;
	color: <?php echo esc_attr( $calendar_day_active_color ); ?>;
	}
	.mphb-calendar.mphb-datepick .datepick .datepick-month td .mphb-booked-date {
	background-color: <?php echo esc_attr( $calendar_day_booked_color ); ?> !important;
	color: <?php echo esc_attr( $calendar_day_color ); ?> !important;
	}
	.mphb-calendar.mphb-datepick .datepick .datepick-month td .mphb-booked-date.mphb-date-check-in {
	background: -webkit-gradient(linear, left top, right bottom, from(<?php echo esc_attr( $calendar_day_available_color ); ?>), color-stop(50%, <?php echo esc_attr( $calendar_day_available_color ); ?>), color-stop(50%, <?php echo esc_attr( $calendar_day_booked_color ); ?>), to(<?php echo esc_attr( $calendar_day_booked_color ); ?>)) !important;
	background: linear-gradient(to bottom right, <?php echo esc_attr( $calendar_day_available_color ); ?> 0%, <?php echo esc_attr( $calendar_day_available_color ); ?> 50%, <?php echo esc_attr( $calendar_day_booked_color ); ?> 50%, <?php echo esc_attr( $calendar_day_booked_color ); ?> 100%) !important;
	}
	.mphb-calendar.mphb-datepick .datepick .datepick-month td .mphb-booked-date.mphb-date-check-in.mphb-date-check-out {
	background: <?php echo esc_attr( $calendar_day_booked_color ); ?> !important;
	}
	.mphb-calendar td .mphb-mark-as-unavailable--check-out {
    background: linear-gradient(to top left, <?php echo esc_attr( $calendar_day_available_color ); ?> 0, <?php echo esc_attr( $calendar_day_available_color ); ?> 50%, <?php echo esc_attr( $calendar_day_booked_color ); ?> 50%, <?php echo esc_attr( $calendar_day_booked_color ); ?> 100%);
	}
	/*End Custom Calendar Colors*/
	<?php endif; ?>
</style>

<?php
}
add_action( 'wp_head', 'kinsley_skin', 10 );

}
