<?php get_header();
/*
Template Name: About
*/
?>

<div class="row">



	<div class="col-xs-9">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		  	<h2><?php the_title(); ?></h2>
		 	
		 	<?php the_content(); ?>
			
			<div class="ender"></div>

		  <?php endwhile; else: ?>
		    <p>Sorry, no pages matched your criteria.</p>
		<?php endif; ?>
	</div><!-- .col-xs-9 -->




</div><!-- .row -->

<?php get_footer(); ?>