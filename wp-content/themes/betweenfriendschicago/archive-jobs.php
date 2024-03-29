<?php get_header(); ?>

<section <?php post_class($post->post_name); ?>>
	<div class="container">
		<div class="row">
			<div class="col-12">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="header">
						<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
					</header>
					<div class="entry-content">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
						<?php the_content(); ?>
						<div class="entry-links"><?php wp_link_pages(); ?></div>
					</div>
				</article>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>