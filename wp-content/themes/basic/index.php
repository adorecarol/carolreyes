<?php get_header(); ?>


<div class="row">

	<div class="col-xs-12">
		<?php if(have_posts()): while (have_posts()) : the_post(); ?>

			<div class="col-xs-4">
				<div class="row">

					<div class="feat-image">
						<a href="<?php the_permalink() ?>">
							<?php 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail('large',  array( 'class' => 'img-responsive' ));
							} 
							?>
						</a>
					</div><!-- .feat-image -->


				</div><!-- .row -->
			</div><!-- .col-xs-4 -->

		<?php endwhile; endif; ?>
	

	</div><!-- .col-xs-12 -->
</div><!-- .row -->

<?php get_footer(); ?>