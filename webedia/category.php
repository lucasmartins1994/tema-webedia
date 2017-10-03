<?php get_header(); ?> 
 
<div class="container">
<?php bloglite_breadcrumb(); ?>
<?php 
 $categories = get_the_category();
// Check if there are any posts to display
$wp_query = new WP_Query();
	query_posts( array(
		'showposts' => 5,
		'category_name' => $categories[0]->name
	));
if ( have_posts() ) : ?>
 
<div class="Categoria">
<h1 class="titulo-categoria">Categoria: <?php echo $categories[0]->name; ?></h1>
</div>
 
<?php
 
// The Loop
while ( have_posts() ) : the_post(); ?>

<section class="conteudo">
	<article class="nota">
		<a href="<?php the_permalink(); ?>">
			<h1 class="titulo-nota"><?php the_title(); ?></h1>
			<div class="sub-titulo"><?php the_excerpt(); ?></div>
			<div class="imagem-nota">
				<?php if ( has_post_thumbnail() ) {
					echo the_post_thumbnail( 'thumb-post' );
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
<?php else: ?>
<p>Deculpe, Matéria não encontrada</p>
 
 
<?php endif; ?>

</div>
 
<?php get_footer(); ?>