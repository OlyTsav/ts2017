<?php
/*
Template Name: Category
*/
?>
<?php get_header(); ?>

<div class="container project-container">
	<h2 class="results-title">Displaying results for: <font style="color:#383838;"><?php single_cat_title(); ?></font></h2>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-3 sidebar-container">
		<?php /* Widgetized sidebar */
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('tag-sidebar') ) : ?><?php endif; ?>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-8 col-lg-push-1 tag-content">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<h1 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h1>
			<ul class="company-year">
				<li class="project-company"><?php the_field('company'); ?></li>
				<li class="project-work-year"><?php the_field('work-year'); ?></li>
			</ul>
			<?php the_tags( '<ul class="post-tags"><li>', '</li><li>', '</li></ul>' ); ?>
<span class="exerpt-p"><?php the_excerpt(); ?></span>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p><a href="<?php echo get_option('home'); ?>">Return to the homepage</a></p>
<?php endif; ?>
<p style="text-align: center; color:#ccc; padding:50px 0px; text-decoration:underline">No more results for: <?php single_cat_title(); ?></p>
	</div>
  	</div><!--row-->
  	<?php next_posts_link( 'Older Posts' ); ?>
<?php previous_posts_link( 'Newer Posts' ); ?>
</div><!--container-->

<?php get_footer(); ?>