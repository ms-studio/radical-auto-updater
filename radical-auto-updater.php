<?php
/*
Plugin Name: Radical Auto-Updater
Plugin URI: https://github.com/ms-studio/radical-auto-updater
Description: A plugin (best used as must-use-plugin) that enables all Automatic Background Updates for WordPress: Core updates, Plugin updates, Theme updates, Translation file updates.
Version: 0.0.2
Author: Manuel Schmalstieg
Author URI: http://ms-studio.net
*/

/*

 Info: https://codex.wordpress.org/Configuring_Automatic_Background_Updates
 By default, every site has automatic updates enabled for minor core releases and translation files.
 
*/

add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );

add_filter( 'auto_update_translation', '__return_true' );

add_filter( 'allow_minor_auto_core_updates', '__return_true' );
add_filter( 'allow_major_auto_core_updates', '__return_true' );

///
