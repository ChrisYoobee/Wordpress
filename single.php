<?php get_header(); ?>

<div class="row">
	<h3>Single post page</h3>
	<div class="col-xs-12 col-sm-8">
		<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post(); ?>
		<h3><?php the_title(); ?></h3>
		<div><?php the_post_thumbnail('thumbnail'); ?></div>
		<div><?php add_theme_support( 'custom-logo' ); ?></div>
		<div><?php add_theme_support( 'automatic-feed-links' ); ?></div>
		<div><?php add_theme_support( 'title-tag' ); ?></div>
		<small> Posted on: <?php the_time('F j Y'); ?></small>
		<div><?php the_content(); ?></div>
		<hr>

	<?php endwhile; ?>	
<?php endif; ?>
	</div>
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
	

</div>


<?php get_footer() ?>