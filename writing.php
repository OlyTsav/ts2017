<?php
/*
Template Name: Writing
 */
?>
<?php get_header(); ?>
      <!-- START THE FEATURETTES -->
<div class="container project-container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-3 sidebar-container">
		<?php /* Widgetized sidebar */
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('project-sidebar') ) : ?><?php endif; ?>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-8 col-lg-push-1">
	  	<iframe src="https://medium.com/@olytsav"></iframe>
		</div>
  	</div><!--row-->
</div><!--container-->
<?php get_footer(); ?>