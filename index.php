<?php get_header(); ?>
      <!-- START THE FEATURETTES -->

<?php get_header(); ?>
      <!-- START THE FEATURETTES -->
<div class="container project-container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-3 sidebar-container">
		<?php /* Widgetized sidebar */
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('project-sidebar') ) : ?><?php endif; ?>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-8 col-lg-push-1">
	  	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div class="row">
		<div class="col-xs-12">
			<h1 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h1>
			<ul class="company-year">
				<li class="project-company"><?php the_field('company'); ?></li>
				<li class="project-work-year"><?php the_field('work-year'); ?></li>
			</ul>
			<?php the_tags( '<ul class="post-tags"><li>', '</li><li>', '</li></ul>' ); ?>
		</div>
		<div class="project-content col-xs-12">
		<?php the_excerpt() ?>

		<?php endwhile; ?>
		</div><!--project-content-->
		</div>
		<?php wp_reset_postdata(); ?>
    	<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
    	<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
		<?php else : ?>
		<p><a href="<?php echo get_option('home'); ?>">Return to the homepage</a></p>
		<?php endif; ?>
	</div>
  	</div><!--row-->
</div><!--container-->

<?php get_footer(); ?>


