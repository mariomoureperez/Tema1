<?php get_header(); ?>

<p>Esta entrada fue creada el</p> <?php the_time('l, F jS, Y') ?> at <?php the_time() ?> 
<br></br>
<h1>MENU</h1>
<?php wp_nav_menu(array('menu' => 'menu1'));?>
<br></br>
<?php  edit_post_link('Editar Entrada','',''); ?>
<?php get_sidebar();?>
<?php get_footer(); ?>