<?php get_header(); ?>
<?php 
$args = array(
    'post_type' => 'post',
    'category' => 'cylindre',
    'meta_key' => 'cylindre', // nom du champ personnalisé
    'meta_value_num' => 500, // ou meta_value pour tester un texte
    'meta_compare' => '>' // < > != >= <=
);
$query = new WP_Query( $args );
?>
<div class="projets">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<article class="voiture">
<?php the_post_thumbnail( 'thumbnail' ); ?>
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