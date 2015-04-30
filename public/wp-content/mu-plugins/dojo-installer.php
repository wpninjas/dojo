<?php

/*
 * Plugin Name: Dojo Installer
 */

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

class Dojo_Installer
{

    private $title = 'WP Ninja DOJO';
    private $admin_user = 'admin';
    private $admin_email = 'test@test.test';
    private $admin_password = 'password';

    // Not a public blog, don't ping.
    private $public = false;

    function __construct()
    {
        add_action('init', array( $this, 'install' ) );
    }

    function install()
    {
        if ( is_blog_installed() ) {
            return false;
        }

        if ( !is_email( $this->admin_email ) ) {
            return false;
        }

        $result = wp_install(
            $this->title,
            $this->admin_user,
            $this->admin_email,
            $this->public,
            '', //
            $this->admin_password
        );

        if ( is_wp_error( $result ) ) {
            return false;
        }

        $this->auto_signon();
    }

    function auto_signon()
    {
        $user = wp_signon( array(
            'user_login' => $this->admin_user,
            'user_password' => $this->admin_password,
            'remember' => true
        ), false );

        if ( is_wp_error($user) ) {
            return false;
        }

        wp_redirect( admin_url() );
        exit;
    }

}

new Dojo_Installer();
