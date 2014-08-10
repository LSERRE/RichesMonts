<?php
/* Bones Custom Post Type Example
This page walks you through creating
a custom post type and taxonomies. You
can edit this one or copy the following code
to create another one.

I put this in a separate file so as to
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}

// let's create the function for the custom type recettes
function custom_post_type_recettes() {
	// creating (registering) the custom type
	register_post_type( 'recettes', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Recettes', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Recettes', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'Toutes les recettes', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Ajouter une recette', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Ajouter une nouvelle recette', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Modifier', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Modifier une recette', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'Nouvelle recette', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'Voir recette', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Chercher une recette', 'bonestheme' ), /* Search Custom Type Title */
			'not_found' =>  __( 'Rien a été trouvé en base de donnée.', 'bonestheme' ), /* This displays if there are no entries yet */
			'not_found_in_trash' => __( 'Rien a été trouvé dans la corbeille', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'L\'ensemble des recettes RichesMonts', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 11, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/post-type-recette-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'custom_type', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'custom_type', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */

}

// let's create the function for the custom type fromage
function custom_post_type_fromages() {
	// creating (registering) the custom type
	register_post_type( 'fromages', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Fromages', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Fromages', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'Tout les fromages', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Ajouter un fromage', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Ajouter un nouveau fromage', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Modifier', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Modifier un fromage', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'Nouveau fromage', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'Voir fromage', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Chercher un fromage', 'bonestheme' ), /* Search Custom Type Title */
			'not_found' =>  __( 'Rien a été trouvé en base de donnée.', 'bonestheme' ), /* This displays if there are no entries yet */
			'not_found_in_trash' => __( 'Rien a été trouvé dans la corbeille', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'L\'ensemble des fromages RichesMonts', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 12, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/post-type-fromage-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'custom_type', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'custom_type', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */

}
// let's create the function for the custom type fromage
function custom_post_type_astuces() {
	// creating (registering) the custom type
	register_post_type( 'astuces', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Astuces', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Astuce', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'Toutes les astuces', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Ajouter une astuce', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Ajouter une nouvelle astuce', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Modifier', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Modifier une astuce', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'Nouvelle astuce', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'Voir astuce', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Chercher une astuce', 'bonestheme' ), /* Search Custom Type Title */
			'not_found' =>  __( 'Rien a été trouvé en base de donnée.', 'bonestheme' ), /* This displays if there are no entries yet */
			'not_found_in_trash' => __( 'Rien a été trouvé dans la corbeille', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'L\'ensemble des astuces', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 13, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/post-type-astuce-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'custom_type', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'custom_type', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */

}
// let's create the function for the custom type slider
function custom_post_type_slides() {
	// creating (registering) the custom type
	register_post_type( 'slider', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Slider', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Slide', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'Toutes les slides', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Ajouter une slide', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Ajouter une nouvelle slide', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Modifier', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Modifier une slide', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'Nouvelle slide', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'Voir slide', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Chercher une slide', 'bonestheme' ), /* Search Custom Type Title */
			'not_found' =>  __( 'Rien a été trouvé en base de donnée.', 'bonestheme' ), /* This displays if there are no entries yet */
			'not_found_in_trash' => __( 'Rien a été trouvé dans la corbeille', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'L\'ensemble des slides', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 14, /* this is what order you want it to appear in on the left hand side menu */
			'rewrite'	=> array( 'slug' => 'custom_type', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'custom_type', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */

}

// let's create the function for the custom type bloc info
function custom_post_type_acceuil_bloc_info() {
	// creating (registering) the custom type
	register_post_type( 'accueil-bloc-info', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Accueil blocs info', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Accueil bloc info', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'Tout les blocs', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Ajouter un bloc', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Ajouter un nouveau bloc', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Modifier', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Modifier un bloc', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'Nouveau bloc', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'Voir bloc', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Chercher un bloc', 'bonestheme' ), /* Search Custom Type Title */
			'not_found' =>  __( 'Rien a été trouvé en base de donnée.', 'bonestheme' ), /* This displays if there are no entries yet */
			'not_found_in_trash' => __( 'Rien a été trouvé dans la corbeille', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'L\'ensemble des blocs', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 15, /* this is what order you want it to appear in on the left hand side menu */
			'rewrite'	=> array( 'slug' => 'custom_type', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'custom_type', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */

}

// let's create the function for the custom type partenaire
function custom_post_type_partenaires() {
	// creating (registering) the custom type
	register_post_type( 'partenaires', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Partenaires', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Partenaire', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'Tout les partenaires', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Ajouter un partenaire', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Ajouter un nouveau partenaire', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Modifier', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Modifier un partenaire', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'Nouveau partenaire', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'Voir partenaire', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Chercher un partenaire', 'bonestheme' ), /* Search Custom Type Title */
			'not_found' =>  __( 'Rien a été trouvé en base de donnée.', 'bonestheme' ), /* This displays if there are no entries yet */
			'not_found_in_trash' => __( 'Rien a été trouvé dans la corbeille', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'L\'ensemble des partenaires', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 16, /* this is what order you want it to appear in on the left hand side menu */
			'rewrite'	=> array( 'slug' => 'custom_type', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'custom_type', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */

}

// now let's add astuces categories
register_taxonomy( 'astuces_cat',
	array('astuces'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'Types d\'astuce', 'bonestheme' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Type d\'astuce', 'bonestheme' ), /* single taxonomy name */
			'search_items' =>  __( 'Chercher un type d\'astuce', 'bonestheme' ), /* search title for taxomony */
			'all_items' => __( 'Tout les types d\'astuce', 'bonestheme' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent type d\'astuce', 'bonestheme' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent type d\'astuce:', 'bonestheme' ), /* parent taxonomy title */
			'edit_item' => __( 'Modifier le type d\'astuce', 'bonestheme' ), /* edit custom taxonomy title */
			'update_item' => __( 'Mettre à jour le type d\'astuce', 'bonestheme' ), /* update title for taxonomy */
			'add_new_item' => __( 'Ajouter un type d\'astuce', 'bonestheme' ), /* add new title for taxonomy */
			'new_item_name' => __( 'Nouveau type d\'astuce', 'bonestheme' ) /* name title for taxonomy */
		),
		'show_admin_column' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'astuces_cat' ),
	)
);

// now let's add fromages categories
register_taxonomy( 'fromages_cat',
	array('fromages'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'Catégories de fromage', 'bonestheme' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Catégorie de fromage', 'bonestheme' ), /* single taxonomy name */
			'search_items' =>  __( 'Chercher une catégorie', 'bonestheme' ), /* search title for taxomony */
			'all_items' => __( 'Toutes les catégories ', 'bonestheme' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent catégorie', 'bonestheme' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent catégorie', 'bonestheme' ), /* parent taxonomy title */
			'edit_item' => __( 'Modifier la catégorie', 'bonestheme' ), /* edit custom taxonomy title */
			'update_item' => __( 'Mettre à jour la catégorie', 'bonestheme' ), /* update title for taxonomy */
			'add_new_item' => __( 'Ajouter une catégorie', 'bonestheme' ), /* add new title for taxonomy */
			'new_item_name' => __( 'Nouvelle catégorie', 'bonestheme' ) /* name title for taxonomy */
		),
		'show_admin_column' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'fromages_cat' ),
	)
);

// now let's add recettes categories
register_taxonomy( 'recettes_cat',
	array('recettes'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'Catégories de recette', 'bonestheme' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Catégorie de recette', 'bonestheme' ), /* single taxonomy name */
			'search_items' =>  __( 'Chercher une catégorie', 'bonestheme' ), /* search title for taxomony */
			'all_items' => __( 'Toutes les catégories ', 'bonestheme' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent catégorie', 'bonestheme' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent catégorie', 'bonestheme' ), /* parent taxonomy title */
			'edit_item' => __( 'Modifier la catégorie', 'bonestheme' ), /* edit custom taxonomy title */
			'update_item' => __( 'Mettre à jour la catégorie', 'bonestheme' ), /* update title for taxonomy */
			'add_new_item' => __( 'Ajouter une catégorie', 'bonestheme' ), /* add new title for taxonomy */
			'new_item_name' => __( 'Nouvelle catégorie', 'bonestheme' ) /* name title for taxonomy */
		),
		'show_admin_column' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'recettes_cat' ),
	)
);

function add_menu_icons_styles() {
?>
<style type="text/css" media="screen">
    #adminmenu #menu-posts-slider div.wp-menu-image:before{
    	content: "\f233";
    }
    #adminmenu #menu-posts-accueil-bloc-info div.wp-menu-image:before{
    	content: "\f180";
    }
    #adminmenu #menu-posts-partenaires div.wp-menu-image:before{
    	content: "\f103";
    }
    body.login{
  		background-color: #009fe3;
	}

</style>
<?php
}

/*
	looking for custom meta boxes?
	check out this fantastic tool:
	https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
*/
	// adding the function to the Wordpress init

add_action( 'init', 'custom_post_type_recettes');

add_action( 'init', 'custom_post_type_fromages');

add_action( 'init', 'custom_post_type_astuces');

add_action( 'init', 'custom_post_type_slides');

add_action( 'init', 'custom_post_type_acceuil_bloc_info');

add_action( 'init', 'custom_post_type_partenaires');

add_action( 'admin_head', 'add_menu_icons_styles' );



?>
