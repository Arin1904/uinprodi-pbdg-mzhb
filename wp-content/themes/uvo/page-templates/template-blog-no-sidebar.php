<?php
/**
 * Template Name: Blog No Sidebar
 *
 * @package uvo
 */
get_header();

?><div class="woocommerce-pagetitle blogtitle">
								   <h1 class="woocommerce-products-header__title page-title"><?php the_title(); ?> </h1>
								   </div>
<!-- wraper_blog_main -->
<div class="wraper_blog_main style-five ">
	<div class="container">
		<!-- row -->


					<div  class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="blog_main  blog-posts">

						<?php
						$wp_query = new WP_Query(
							array(
								'post_type'      => 'post',
								'order'          => 'asc',
								'posts_per_page' => 9,
								// name of post type.
								'paged'          => get_query_var( 'paged' ) ?: 1,

							)
						);

						$count = 1;
						while ( $wp_query->have_posts() ) :
							$wp_query->the_post();
							$count++;

							get_template_part( 'template-parts/content-blog-five', get_post_format() );

							?>
						  <?php endwhile; ?>




					<?php

						radiantthemes_pagination();

					?>


				</div>
				</div>





			</div>
			<!-- row -->
		</div>
	</div>
	<!-- wraper_blog_main -->

	<?php

	get_footer();
