	<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-span-12">	
			<?php if (have_posts()) :
				echo '<div ';
					post_class();
				echo '>';
				while (have_posts()) : the_post();     
					//~ get the propriate image
					$thumb = get_the_post_thumbnail($post->ID, 'thumbnail');
					$thmb_html = '';
					if(!empty($thumb)){
						$thmb_html .= '<div class="featured_img">';
							$thmb_html .= '<a href="'.get_permalink().'" title="'.get_the_title().'">';
								$thmb_html .= $thumb;
							$thmb_html .= '</a>';
						$thmb_html .= '</div>';
					}
					echo $thmb_html .'
							<h2>
								'.get_the_title().'
							</h2>
							<div class="entry">';
								the_content();
							echo '</div>';
				endwhile; 
				echo '</div>';
			endif; ?>
		</div>
	</div>
</div>
<?php get_footer();
