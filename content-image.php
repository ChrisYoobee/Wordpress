	<h3><?php the_title(); ?></h3>
		<div><?php the_post_thumbnail('thumbnail'); ?></div>
		<div><?php add_theme_support( 'custom-logo' ); ?></div>
		<div><?php add_theme_support( 'automatic-feed-links' ); ?></div>
		<div><?php add_theme_support( 'title-tag' ); ?></div>
		<small> Posted on: <?php the_time('F j Y'); ?></small>
		<div><?php the_content(); ?></div>
		<hr>