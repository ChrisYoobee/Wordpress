<?php 

	/*
		Template Name: Home Page
		
	*/
	
 ?>

<?php get_header(); ?>

<h1>Custom Site</h1>
<div class="row">
	<div class="col-xs-12 col-sm-8">
		<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post(); ?>

		<?php get_template_part('content', get_post_format()); ?>

	<?php endwhile; ?>	
<?php endif; ?>
	</div>
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
	

</div>



<?php get_footer() ?>