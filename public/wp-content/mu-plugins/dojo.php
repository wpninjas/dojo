<?php

/*
 * Plugin Name: Dojo
 */

class Dojo_MU_Dojo
{

    function __construct() {
        add_action('admin_menu', array( $this, 'register_dojo_menu_page') );
    }

    function register_dojo_menu_page()
    {
        add_menu_page('dojo', 'dojo', 'administrator', 'dojo', array( $this, 'display_dojo_menu_page') );
    }

    function display_dojo_menu_page()
    {
        echo "Welcome to the dojo we've got PHP.";
    }

}

new Dojo_MU_Dojo();