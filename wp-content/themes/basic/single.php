<?php get_header(); ?>


<div class="row">



	<div class="col-xs-10">
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	      	

		<div class="row">
			<div class="col-xs-8">
				<div class="feat-image">
					<?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail('large',  array( 'class' => 'img-responsive' ));
					} 
					?>
				</div>
				
			</div>

			<div class="col-xs-4">

				<h2><?php the_title(); ?></h2>

		      	<div class="meta">
		      		<?php // the_author(); ?><?php echo get_the_date(); ?>  &nbsp;/&nbsp;  <?php the_category(', ')?>
		      	</div><!-- .meta -->

		     	<p><?php the_content(); ?>
		      	</p>

		      	<p><div class="tags">
		      		<?php // the_tags(__('tags: '), ', ', ' / ') . edit_post_link(__('Edit'), ''); ?>
		      	</div><!-- .tags -->

		      	</p>

				<?php endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>

				<div class="ender"></div>
			</div>
		</div>
	</div><!-- .col-xs-9 -->


</div><!-- .row -->

<div class="separator"></div>

<div class="row">
	<div class="col-xs 12">
		
	</div>
</div>
<?php get_footer(); ?>