<?php get_header(); ?>
<div class="projets">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<article class="voiture">
<?php the_post_thumbnail( 'thumbnail' ); ?>
<?php the_terms( $post->ID, 'dimension', 'Dimension : ' ); ?><br>
<?php the_terms( $post->ID, 'couleur', 'Couleur : ' ); ?><br>
<?php the_terms( $post->ID, 'cylindre', 'Cylindré : ' ); ?><br>
<?php the_terms( $post->ID, 'anneemodele', 'Année modèle : ' ); ?><br>
<?php the_terms( $post->ID, 'marque', 'Marque : ' ); ?><br>
<h1 class="title">
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h1>
<div class="content">
<?php the_content(); ?>
</div>
</article>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>