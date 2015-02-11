<?php 

// Add Your Menu Locations
function register_my_menus() {
  register_nav_menus(
    array(  
    	'header_navigation' => __( 'Header Navigation' ), 
    	'expanded_footer' => __( 'Expanded Footer' )
    )
  );
} 
add_action( 'init', 'register_my_menus' );

function default_header_nav() { // HTML markup for a default message in menu location
	echo "<ul class='nav'>					
		<li>Create the Header Navigation</li>
	</ul>";
}

function default_expanded_footer() { 
	echo "<ul class='nav'>					
		<li>Create the Expanded Footer</li>
	</ul>";
}



// Start Add a widget to the dashboard.
function left_sidebar() {
	register_sidebar( array(
		'name' => 'Left Sidebar',
		'id' => 'left_sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="rounded">',
		'after_title' => '</h4>',
	));
}
add_action( 'widgets_init', 'left_sidebar' );

function right_sidebar() {
	register_sidebar( array(
		'name' => 'Right Sidebar',
		'id' => 'right_sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="rounded">',
		'after_title' => '</h4>',
	));
}
add_action( 'widgets_init', 'right_sidebar' ); 

function contact_sidebar() {
	register_sidebar( array(
		'name' => 'Contact Sidebar',
		'id' => 'contact_sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="rounded">',
		'after_title' => '</h4>',
	));
}
add_action( 'widgets_init', 'contact_sidebar' ); 
// End Add a widget to the dashboard. 



?>