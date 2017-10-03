	<?php get_header(); ?>
	<div class="container">
	<?php bloglite_breadcrumb(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="conteudo-post">
			<h1 class="titulo-post"><?php the_title(); ?></h1>
			<div class="imagem-nota">
				<?php if ( has_post_thumbnail() ) {
					echo the_post_thumbnail( 'thumb-post' );
				} ?>
			</div>
			<div class="separador"></div>
			<p class="conteudo-post"><?php the_content(); ?></p>
		</article>
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>	
	</div>	
	<?php get_footer(); ?>