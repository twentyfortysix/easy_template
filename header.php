<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('charset') ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- web crafted by http://2046.cz -->
		<!-- some code licensed under Aggressive Copyright http://aggressive-copyright.org -->
		<title>
			<?php bloginfo('name') . wp_title(); ?>
		</title>
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class();?>>
		<?php get_sidebar() ?>
