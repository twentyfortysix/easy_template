<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- crafted by http://2046.cz -->
		<!-- some code licensed under Aggressive Copyright http://aggressive-copyright.org -->

		<!-- All the CSS and JS is properly hooked in the functions.php  -->
		<title>
			<?php bloginfo('name') . wp_title(); ?>
		</title>
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class();?>>
		<div class="wrapper">
			<div class="container">
				<div class="row">
					<div class="col-span-12">
						<?php
						// get widgets, most likely a header image or something like that
						dynamic_sidebar('header-top');
						// get widgets, most likely a menu
						dynamic_sidebar('header-menu');
						?>
					</div>
				</div>
			</div>
		
