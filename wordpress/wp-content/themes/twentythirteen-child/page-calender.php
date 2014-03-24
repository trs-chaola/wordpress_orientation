<?php
//Template Name: Calendar Page

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div id="post-4" class="post-4 page type-page status-publish hentry">
				<div class="entry-header clear">
					<div class="left">
						<img src="<?php echo get_template_directory_uri(); ?>-child/images/calendar/calendar-icon.png" alt="accomodation page icon"/>
					</div>
					<div class="left">
						<h5 class="page-titles">
							CALENDAR<br/>
							<font>カレンダー</font>
						</h5>
					</div>
					<div class="right breadcrumbs">
						<a href="">TOP</a>&nbsp;>&nbsp;カレンダー
					</div>
				</div><!-- .entry-header -->
				<div class="entry-content">
					<?php while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content">
								<?php the_content(); ?>
							</div><!-- .entry-content -->
						</article><!-- #post -->
					<?php endwhile; ?>
				</div><!-- .entry-content -->
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
	<script type="text/javascript">
		jQuery(document).ready(function($){
			var imageUrl = "<?php echo get_template_directory_uri(); ?>-child/images/calendar/calendar-bg1.png";
			$(".entry-content article").css('background-image', 'url(' + imageUrl + ')');
		});
	</script>
<?php get_sidebar(); ?>
<?php get_footer(); ?>