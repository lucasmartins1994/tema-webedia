	<?php get_header(); ?>
	
	<div class="container">
		<?php     
		   $wp_query = new WP_Query();
			query_posts( array(
				'post_type' => 'post',
				'showposts' => 5,
				'paged'=>$paged 
			));
        if ( have_posts() ) :
            while ( $wp_query->have_posts() ) :
                $wp_query->the_post();
            ?>
			<section class="conteudo">
				<article class="nota">
					<a href="<?php the_permalink(); ?>">
						<h1 class="titulo-nota"><?php the_title(); ?></h1>
						<div class="sub-titulo"><?php the_excerpt(); ?></div>
						<div class="imagem-nota">
							<?php if ( has_post_thumbnail() ) {
					                  echo the_post_thumbnail( 'meu-thumb' );
							} ?>
						</div>
						<div class="separador"></div>
						<div class="textoDestaque"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></div>
						<div class="textoConteudo"><?php the_content(); ?></div>
					</a>	
				</article>
			</section>	
            <?php endwhile; ?>
			<div id="navegacao">
			<div class="recentes"><?php next_posts_link('« Anteriores' ) ?></div>
			<div class="anteriores"><?php previous_posts_link('Recentes »' ) ?></div>
			</div>
        <?php endif;
    ?>
			</div>	
			
	<?php get_footer(); ?>