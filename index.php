<?php get_header();?>
<div id="index" class="clearfix">
<div id="loop">
<h1>Hola Mundo</h1>
<h1>MENU</h1>
<?php wp_nav_menu(array('menu' => 'menu2'));?>

  <section id="main">
<h1>ENTRADAS</h1>

<?php 

if (have_posts()){
while (have_posts()) {
the_post(); ?>
<h2 id="post-<?php the_ID(); ?>"> 
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<small>Publicado el <?php the_time('j/m/Y') ?><!-- por <?php the_author_posts_link() ?>--> </small>
<?php
    the_content();

 

 
}
}

?>
</section>
</div>
<div id="sidebar2">
<?php get_sidebar(); ?>
</div>
</div>
<div id=pie>
<?php get_footer(); ?> 
    </div>


  