<?php

    class WP_Boilerplate_ACF {
        //======================================================================
        // CUSTOMIZE ACF JSON SAVE FOLDER
        //======================================================================
        static function json_save_folder( $path ) {
            
            // update path
            $path = get_stylesheet_directory() . '/functions/acf/json/';
            
            // return
            return $path;
            
        }

        //======================================================================
        // CUSTOMIZE ACF JSON LOAD FOLDER
        //======================================================================
        static function json_load_folder( $paths ) {
            
            // remove original path (optional)
            unset($paths[0]);
            
            // append path
            $paths[] = get_stylesheet_directory() . '/functions/acf/json/';
            
            // return
            return $paths;
            
        }

        //======================================================================
        // ADD OPTIONS PAGE
        //======================================================================
        static function add_option_page() {
            if ( function_exists( 'acf_add_options_page' ) ) {

                acf_add_options_page( array(
                    'page_title'	=> 'App Options',
                    'menu_title'	=> 'App Options',
                    'menu_slug' 	=> 'acf-app-options',
                    'capability'	=> 'edit_posts',
                    'redirect'		=> false,
                ));
            
            }
        }
    }