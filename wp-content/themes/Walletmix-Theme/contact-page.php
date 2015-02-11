<?php 
/* Template Name: Contact page */
get_header(); ?>
	<div id="">
		<div class="container">
			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-sm-3">
					<?php if ( is_active_sidebar( 'contact_sidebar' ) ) : ?>
						<?php dynamic_sidebar( 'contact_sidebar' ); ?>
					<?php endif; ?>
				</div>
				<div class="col-sm-9">
					<h3><?php the_title(); ?></h3>
					<p><?php the_content(); ?></p>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>