<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package kinsley
 */

if ( ! function_exists( 'kinsley_after_content' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function kinsley_after_content() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'kinsley' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'kinsley' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( '', 'list item separator', 'kinsley' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tags: %1$s', 'kinsley' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'kinsley' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		// Show share buttons in blog post and portfolio
		if ( function_exists( 'kinsley_add_social_share' ) ) :
			echo kinsley_add_social_share( get_the_ID() );
		endif;

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'kinsley' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'kinsley_before_content' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function kinsley_before_content() {
		if ( 'post' === get_post_type() ) {
			$avatar_img = get_avatar_url( get_the_author_meta( 'ID' ) );

			echo '<div class="knsl-room-features-lg knsl-mb-30"><div class="knsl-feature"><div class="knsl-icon-frame knsl-icon-author">';
				echo	'<img src="' . esc_url( $avatar_img ) . '" alt="'. esc_attr__( 'author', 'kinsley' ) . '"></div>';
				echo	'<span>' . esc_html( get_the_author() ) . '</span>';
			echo '</div>';
			echo '<div class="knsl-feature"><div class="knsl-icon-frame">';
				echo '<span class="img-svg img-svg-time"></span></div>';
				echo '<span>' . esc_html( get_the_date() ) . '</span>';
			echo '</div></div>';
		}
	}
endif;

if ( ! function_exists( 'kinsley_single_navigantion' ) ) :
	/**
	 * Displays an optional prev/next/all nagigations.
	 */
	function kinsley_single_navigantion() {
		if ( is_singular() ) :
			$post_type = get_post_type();
			$prev_post = get_adjacent_post( false, '', true );
			$next_post = get_adjacent_post( false, '', false );
			$archive_url = false;
			$archive_page_id = get_field( $post_type . '_page', 'option' );
			if ( ! $archive_page_id ) {
				$archive_url = get_post_type_archive_link( $post_type );
			} else {
				$archive_url = get_permalink( $archive_page_id );
			}

			$prev_str = esc_html__( 'Previous', 'kinsley' );
			$next_str = esc_html__( 'Next', 'kinsley' );
			$all_str = esc_html__( 'All posts', 'kinsley' );

			if ( $post_type == 'mphb_room_service' ) {
				$all_str = esc_html__( 'All services', 'kinsley' );
			}

			?>

	    <!-- projects navigation -->
	    <div class="knsl-navigation">
	      <?php if ( is_a( $prev_post, 'WP_Post' ) ) : ?>
	      <!-- button -->
	      <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" class="knsl-left-link"><span><?php echo esc_html( $prev_str ); ?></span></a>
				<?php else : ?>
				<span></span>
				<?php endif; ?>
	      <?php if ( $archive_url ) : ?>
	      <div class="knsl-navigation-center knsl-m-hidden">
	        <a class="knsl-link-default" href="<?php echo esc_url( $archive_url ); ?>"><?php echo esc_html( $all_str ); ?></a>
	      </div>
	      <?php endif; ?>
	      <?php if ( is_a( $next_post, 'WP_Post' ) ) : ?>
	      <!-- button -->
	      <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="knsl-right-link"><span><?php echo esc_html( $next_str ); ?></span></a>
				<?php else : ?>
				<span></span>
				<?php endif; ?>
	    </div>
	    <!-- projects navigation end -->

		<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'kinsley_comment' ) ) :
	/**
	 * Comments
	 */
	function kinsley_comment( $comment, $args, $depth ) {
		?>
			<li <?php comment_class( 'post-comment' ); ?> id="li-comment-<?php comment_ID(); ?>" >
				<div id="comment-<?php comment_ID(); ?>" class="comment knsl-review-card">
					<div class="knsl-card-header">
						<div class="knsl-name-and-photo">
							<div class="knsl-avatar-frame">
								<?php
									$avatar_size = 80;
									if ( '0' != $comment->comment_parent ) : $avatar_size = 80; endif;
									echo get_avatar( $comment, $avatar_size );
								?>
							</div>
							<div>
								<h5><?php comment_author_link(); ?></h5>
								<span>
									<span><?php comment_time(); ?></span>
									<span><?php comment_date(); ?></span>
								</span>
							</div>
						</div>
					</div>
					<div class="single-post-text knsl-comment-content knsl-text">
						<?php comment_text(); ?>
					</div>
          <div class="comment-reply">
							<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
					</div>
				</div>

		<?php
	}
endif;

if ( ! function_exists( 'kinsley_deco_svg' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function kinsley_deco_svg( $position = 'right' ) {
		$bg_svg = get_field( 'background_svg', 'option' );
		$bg_svg_icon = get_field( 'background_svgicon', 'option' );

		if ( $bg_svg ) {
			if ( ! $bg_svg_icon ) {
		  	$bg_svg_icon = get_template_directory_uri() . '/assets/img/palm.svg';
			}

			$alt = esc_attr__( 'palm', 'kinsley' );
	?>

		<?php if ( $position == 'both' ) : ?>
		<img src="<?php echo esc_url( $bg_svg_icon ); ?>" class="knsl-deco-left" alt="<?php echo esc_attr( $alt ); ?>" />
		<img src="<?php echo esc_url( $bg_svg_icon ); ?>" class="knsl-deco-right" alt="<?php echo esc_attr( $alt ); ?>" />
		<?php elseif ( $position == 'left' ) : ?>
		<img src="<?php echo esc_url( $bg_svg_icon ); ?>" class="knsl-deco-left" alt="<?php echo esc_attr( $alt ); ?>" />
		<?php else : ?>
		<img src="<?php echo esc_url( $bg_svg_icon ); ?>" class="knsl-deco-right" alt="<?php echo esc_attr( $alt ); ?>" />
		<?php endif; ?>

	<?php
		}
	}
endif;
