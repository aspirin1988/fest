<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 3/28/16
 * Time: 3:40 PM
 */

function add_menu()  {
    //add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
    add_menu_page('Add user group', 'add user group', 'manager_options', REG_GR_PLUGIN_FOLDER, 'load_page', REG_GR_PLUGIN_URL . 'images/icbw-16x16.png');

    //add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function )
    add_submenu_page( REG_GR_PLUGIN_FOLDER , 'Adderfer Collection', 'Add Collection', 'manage_options', REG_GR_PLUGIN_FOLDER, array (&$this, 'load_page'));
    add_submenu_page( REG_GR_PLUGIN_FOLDER , 'Manageerf Collections', 'Manage Collections', 'manage_options', 'REG_GR-collection-manger', array (&$this, 'load_page'));
    add_submenu_page( REG_GR_PLUGIN_FOLDER , 'Defaultefe Options', 'Default Options', 'manage_options', 'REG_GR-default-options', array (&$this, 'load_page'));
    add_submenu_page( REG_GR_PLUGIN_FOLDER , 'Uninstalerfl', 'Uninstall', 'manage_options', 'REG_GR-uninstall', array (&$this, 'load_page'));
}

add_menu();