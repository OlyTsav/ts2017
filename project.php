<?php
/*
Template Name: Project Page
 */
?>
<?php get_header(); ?>
      <!-- START THE FEATURETTES -->
<div class="container project-container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-3">
		<?php /* Widgetized sidebar */
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('project-sidebar') ) : ?><?php endif; ?>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-8 col-lg-push-1">
	  	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div class="row">
		<div class="col-xs-12">
			<h1 class="post-title"><?php the_title(); ?></h1>
		</div>
		<div class="project-content col-xs-12">
		<?php the_content() ?>

		<?php endwhile; ?>
		</div><!--project-content-->
		</div>
		<?php wp_reset_postdata(); ?>
		<?php else : ?>
		<p><a href="<?php echo get_option('home'); ?>">Return to the homepage</a></p>
		<?php endif; ?>
	</div>
  	</div><!--row-->
</div><!--container-->
<?php get_footer(); ?>