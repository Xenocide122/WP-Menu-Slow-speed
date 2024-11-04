add_action('init', 'remove_these', 10 );

function remove_these() {
	remove_all_actions( 'wp_nav_menu_item_custom_fields', 10);
    remove_all_actions( 'wp_update_nav_menu_item', 10 );
    remove_all_filters( 'manage_nav-menus_columns', 10 );
}
