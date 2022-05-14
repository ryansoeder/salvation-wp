<?php

    class WP_Boilerplate_API {
        // =========================================================================
        //  EXTEND OR MODIFY API ENDPOINTS
        // =========================================================================
        static function main_menu() {
            // Replace your menu name, slug or ID carefully
            return wp_get_nav_menu_items('Main Menu');
        }

        static function init_main_nav() {
            register_rest_route( 'wp/v2', 'main_menu', array(
                'methods' => 'GET',
                'callback' => 'self::main_menu',
            ) );
        }
    }
    