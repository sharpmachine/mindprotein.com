<?php
function remove_dashboard_widgets(){
  global$wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); 
  unset($wp_meta_boxes['dashboard']['normal']['core']['yoast_db_widget']);
}

add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

//Admin style overrides
function admin_overrides() {
  echo '<style type="text/css">
	#cpt_info_box {
		display: none !important; /* Hides Custom Post Type info box */
	}
    </style>';
}

add_action('admin_head', 'admin_overrides');

//Login Logo
function custom_login_logo() {
  echo '<style type="text/css">
    h1 a 
    {
    	 background-image:url('.get_bloginfo('template_directory').'/img/logo.png) !important;
		 background-size: 347px 89px !important;
    	 width: 347px !important; /* Same width as logo */
    	 height: 89px !important; /* Same height as logo */
	     margin-left: -20px !important; /* adjust to center logo above login box */
	 }
    </style>';
}

add_action('login_head', 'custom_login_logo');

?>