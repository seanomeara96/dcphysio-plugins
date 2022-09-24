<?php 
    /**
     * Plugin Name: DC Physio Plugins
     * Description: Custom Block Types and the like
     * Version: 1.0
     * Author: Sean O'Meara
     * Author URI: https://github.com/seanomeara96
     */
 if (! defined('ABSPATH')) exit; // exit if accessed directly

 class DC_Physio_Plugins {
    function __construct(){
        add_action('enqueue_block_editor_assets', array($this, 'adminAssets'));
    }

    function adminAssets(){
        wp_enqueue_script('ourNewBlockType', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks', "wp-element"));
    }
 }

 $dC_Physio_Plugins = new DC_Physio_Plugins();