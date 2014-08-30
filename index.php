<?php
// get header.php
get_header(); 
// get some extra content, most likely carousel or that sort of content
if ( is_active_sidebar('extra-top-content') ){
	echo '<div class="container">
		<div class="row">
			<div class="col-md-12">';
				dynamic_sidebar('extra-top-content');
			echo '</div>
		</div>
	</div>';
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php
			// get some extra content, most likely carousel or that sort of content
			// dynamic_sidebar('extra-top-content');
			// get the base content
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					echo '<h2><a href="'.get_permalink().'">'.get_the_title().'</a></h2>';
					the_content();
					edit_post_link();
				}
			}
			?>
		</div>
		<div class="col-md-3">
			<?php 
			// get the content of the dynamic sidebar (widgets)
			dynamic_sidebar('index-second-column');
			 ?>
		</div>
		<div class="col-md-3">
			<?php 
			// get the content of the dynamic sidebar (widgets)
			dynamic_sidebar('index-third-column');
			 ?>
		</div>
	</div>
</div>
<?php 
// get footer.php
get_footer();
