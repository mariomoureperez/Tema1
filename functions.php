<?php	register_nav_menus( array(
		'menu1' => __( 'Menu 1 menos menus', 'Tema1' ),
		'menu2'  => __( 'Menu 2 mas menus', 'Tema1' ),
	) ); 
	

	register_sidebar( array(
		'name'          => __( 'Widget Area', 'tema1' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'tema1' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	?>