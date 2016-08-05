<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fotos Under Construction
 */

get_header(); ?>



<div class="wrap">
			<div class="content">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1><?php bloginfo( 'name' ); ?></h1></a>
				</div>
				<p><?php bloginfo( 'description' ); ?></p>

<?php echo do_shortcode( '[contact-form-7 id="7" title="CIO sign-up"]' ); ?>


				
				</div>
				<div class="footer">
				<div class="social-icons">
					   <a href="<?php echo $faceBook; ?>"><span class="simptip-position-bottom simptip-movable" data-tooltip="Facebook"><img src="<?php echo get_template_directory_uri();?>/images/web/f.png"></span></a>
				       <a href="<?php echo $Gplus; ?>"> <span class="simptip-position-bottom simptip-movable" data-tooltip="Rss"><img src="<?php echo get_template_directory_uri();?>/images/web/r.png"></span></a>
				       <a href="<?php echo $twitter; ?>">  <span class="simptip-position-bottom simptip-movable" data-tooltip="Twitter"><img src="<?php echo get_template_directory_uri();?>/images/web/t1.png"></span></a>
					<div class="clear"> </div>
				</div>
				<p class="copy">&#169; 2016 CIOTank</p>
				</div>
			</div>
		</div>
<?php get_footer(); ?>
