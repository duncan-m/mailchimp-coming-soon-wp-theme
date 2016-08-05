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
			<div class="content">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1><?php bloginfo( 'name' ); ?></h1></a>
				</div>
				<p><?php bloginfo( 'description' ); ?></p>
				<?php if(isset($_REQUEST['mailID']) && $_REQUEST['mailID']=='')
				{
				?>
				<p> Please Enter your Email</p>
				<?php } if ($mail_status=='yes'){?>
					<p> Thanks, we will keep you updated </p>
					<?php }?>
				<div class="form">
					<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post">
							<input name="mailID" type="email" class="textbox" value="">
							<input type="submit" value="Subscribe">
					</form>
					
				</div>
				<div class="footer">
				<div class="social-icons">
					   <a href="<?php echo $faceBook; ?>"><img src="<?php echo get_template_directory_uri();?>/images/mobile/f1.png"></a>
				       <a href="<?php echo $Gplus; ?>"> <img src="<?php echo get_template_directory_uri();?>/images/mobile/r1.png"></a>
				       <a href="<?php echo $twitter; ?>"> <img src="<?php echo get_template_directory_uri();?>/images/mobile/t1.png"></a>
					<div class="clear"> </div>
				</div>
				<p class="copy">&#169; 2013 Designed by <a href="http://wpmthemes.com" target="_blank">&nbsp;WPM themes</a> </p>
				</div>
			</div>
<?php get_footer(); ?>
