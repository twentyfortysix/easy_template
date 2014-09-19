<?php
// get header.php
get_header(); 
?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php
			// get the base content
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					echo '<h1>'.get_the_title().'</h1>';
					the_content();
				}
			}
			?>
		</div>
		<div class="col-md-3">
			<?php 
			// get the content of the dynamic sidebar (widgets)
			dynamic_sidebar('page-second-column');
			 ?>
		</div>
		<div class="col-md-3">
			<?php 
			// get the content of the dynamic sidebar (widgets)
			dynamic_sidebar('page-third-column');
			 ?>
		</div>
	</div>
</div>
<?php 
// get footer.php
get_footer();
