<?php 
wp_nav_menu( array( 
	'container' => 'div',
	'container_class' => 'nav-collapse collapse',
	'theme_location' => 'primary',
	'menu_class' => 'nav',
	'walker' => new Bootstrap_Walker(),									
) );
