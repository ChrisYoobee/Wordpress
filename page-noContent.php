<?php 

	/*
		Template Name: Page no Content
		
	*/
	
 ?>

<?php get_header(); ?>
	<h2>This is a template</h2>
	<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post(); ?>
		<h3><?php the_title(); ?></h3>
		<small> Posted on: <?php the_time('F j Y'); ?></small>
	<?php endwhile; ?>	
<?php endif; ?>
<?php get_footer() ?>