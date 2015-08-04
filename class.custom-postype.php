<?php 
class NTcontact_postype{
		
		function __construct()
		{
			add_action('init',array($this,'nt_contact_reigster_type'));
		}
		public function nt_contact_reigster_type(){
			$labels = array(
				'name'               => _x( 'Messeger', 'post type general name'),
				'singular_name'      => _x( 'Messeger', 'post type singular name'),
				'menu_name'          => _x( 'Messeger', 'admin menu'),
				'name_admin_bar'     => _x( 'Messeger', 'add new on admin bar'),
				'edit_item'          => __( 'Edit'),
				'view_item'          => __( 'View'),
				'search_items'       => __( 'Search'),
				'parent_item_colon'  => __( 'Parent:' ),
				'not_found'          => __( 'No found.'),
				'not_found_in_trash' => __( 'No found in Trash.')
			);
			$args = array(
				'labels'             => $labels,
				'description'        => __( 'Description.'),
				'public'             => true,
				'exclude_from_search'=>	true,
				'publicly_queryable' => true,
				'show_in_nav_menus'	 =>	false,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'contact-messege' ),
				'capability_type'    => 'post',
				'capabilities'		 =>	array('create_posts'=>false),	
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'supports'           => array( 'title', 'editor')
			);
			register_post_type( 'contact_messege', $args );
		}
}
if(class_exists('NTcontact_postype'))
{
	new NTcontact_postype();
}
?>