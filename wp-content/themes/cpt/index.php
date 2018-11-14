<?php get_header(); ?>
	
	<div id="container content-main">

			<div class="section-1-parent">
				<div class="section-1-child">
					<div class="row-alain-content">						
                        <div class="col-12 col-md-12">
                        
                                <h2>Meet the team!</h2>
                                <?php
                                $args = array( 'post_type' => 'people', 'posts_per_page' => -1 );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post();
                                    echo '<div>Name: ';
                                    the_field( 'Name' );
                                    echo '</div><div>Title: ';
                                    the_field( 'Title' );
                                    echo '</div><div>Bio: ';
                                    the_field( 'Bio' );
                                    echo '</div><br>';
                                endwhile;
                                ?>

                        </div>	
						
					</div>
				</div>
			</div>

			
	<script>
	jQuery(document).ready(function() {
		revapi = jQuery("#slider-1").revolution({
			sliderLayout: "fullscreen",
			gridwidth: 1230,
			gridheight: 720
		});
	});
	</script>

	<?php get_footer();