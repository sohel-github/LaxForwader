<?php get_header(); ?>
	<div id="">
		<div class="container">
			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-sm-12">
					<h3><?php the_title(); ?></h3>
					<p><?php the_content(); ?></p>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>