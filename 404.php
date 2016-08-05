<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Fotos Under Construction
 */

get_header(); ?>

	<div class="content">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1><?php bloginfo( 'name' ); ?></h1></a>
				</div>
				<p><?php bloginfo( 'description' ); ?></p>
			<section class="error-404 not-found">
				<header class="page-header">
					<p><?php _e( 'Oops! That page can&rsquo;t be found.', 'fotos-under-construction' ); ?></p>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location.', 'fotos-under-construction' ); ?></p>

					<?php //get_search_form(); ?>

					<?php //the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php /*if ( fotos_under_construction_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'fotos-under-construction' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; */?>

					<?php
					/* translators: %1$s: smiley */
					//$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'fotos-under-construction' ), convert_smilies( ':)' ) ) . '</p>';
					//the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

					<?php //the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		
	</div><!-- #primary -->

<?php get_footer(); ?>