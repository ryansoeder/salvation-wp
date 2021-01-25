<?php
    // =========================================================================
    // The autoloader will allow you to pull dynamically pull in any class
    // that you define in the inc/classes folder. If you store any classes
    // in a sub folder e.g. classes/subfolder be sure to use a namespace
    // at the top of your class file e.g. namespace subfolder;
    // =========================================================================
    spl_autoload_register( function($classname) {

        // Regular
        $class      = str_replace( '\\', DIRECTORY_SEPARATOR, strtolower($classname) ); 
        $classpath  = dirname(__FILE__) .  DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . $class . '.php';

        // WordPress
        $parts      = explode('\\', $classname);
        $class      = 'class-' . strtolower( array_pop($parts) );
        $folders    = strtolower( implode(DIRECTORY_SEPARATOR, $parts) );
        $wppath     = dirname(__FILE__) .  DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . $folders . DIRECTORY_SEPARATOR . $class . '.php';

        if ( file_exists( $classpath ) ) {
            include_once $classpath;
        } elseif(  file_exists( $wppath ) ) {
            include_once $wppath;
        }

    } );