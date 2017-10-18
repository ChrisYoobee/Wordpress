<html>
<head>
	<title>Custom Wordpress theme</title>
	<?php wp_head(); ?>
</head>
<?php 
	if( is_front_page()){
		$bodyClass = array('my-body', 'front-page');
	}else{
		$bodyClass = array('my-body');
	}
	

?>
<body <?php body_class($bodyClass); ?> >
	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width = "100%">

<?php wp_nav_menu(array('theme_location'=> 'primary')); ?>
<div class="container">

	<?php if(display_header_text()==true): ?>
		