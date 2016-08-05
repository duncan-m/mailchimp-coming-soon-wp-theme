<?php /* Template Name: Full Width Page */ ?>


<?php get_header(); ?>

<div id="page-wrapper">
<?php if (have_posts()) while (have_posts()) : the_post(); ?>
<div id="header">
<?php the_title('<h1>', '</h1>'); ?>
</div>
<div id="content">
<?php the_content(); ?>

<?php if (current_user_can('edit_post', get_the_ID())) { ?>
<p class="aligncenter"><?php edit_post_link('Edit'); ?></p>
<?php } ?>
</div>
<?php if (comments_open()) { comments_template(); } ?>
<?php endwhile; ?>
</div>

<?php get_footer(); ?> 