<?php
/*------------------------------------------------------------------------------
Plugin Name: Google +1 (Social Button)
Plugin URI: http://waiphyohan.tumblr.com/google-plusone-button
Description: Add Google +1 button to your pages to help your site stand out.
Author: Wai Phyo Han
Version: 1.0
Author URI: http://waiphyohan.tumblr.com/
------------------------------------------------------------------------------*/

define('GOOGLE_BUTTON_TEMPLATE', '<div style="float: right; margin-left: 10px;"><g:plusone size="%s" count="%s" url="%s"></g:plusone></div>');

/*-------------------------------------------------------------------------------*/
add_action('admin_init','google1settings_add_js_to_head');
add_action('wp_head','google1plus_add_js_to_head');
add_filter('the_content','google1_get_button');
add_action('admin_menu', 'google1_admin_menu');
register_activation_hook(__FILE__, 'google1_default_settings');
add_filter('plugin_action_links', 'google1_settings_links', 10, 2);

/*-------------------------------------------------------------------------------*/

function _google1_get_post_url(){
    $id = get_the_ID();
    return get_permalink($id);
}

function _google1_get_button_size(){
    $google1_button_size = get_option('google1_button_type');
    if($google1_button_size == 'sm_with_count' || $google1_button_size == 'sm_without_count'){
        return 'small';
    }elseif($google1_button_size == 'm_with_count' || $google1_button_size == 'm_without_count'){
        return 'medium';
    }elseif($google1_button_size == 't_with_count'){
        return 'tall';
    }else{
        return 'standard';
    }
}

function _google1_get_button_count(){
    $google1_button_count = get_option('google1_button_type');
    if($google1_button_count == 'sm_without_count' || $google1_button_count == 'm_without_count' || $google1_button_count == 'st_without_count'){
        return 'false';
    }else{
        return 'true';
    }
}

function _google1_get_language(){
    
}

/*-------------------------------------------------------------------------------*/


function google1settings_add_js_to_head(){
    $src = plugins_url('js/google1_settings.js', __FILE__);
    wp_register_script('google1', $src);
    wp_enqueue_script('google1');
}

function google1plus_add_js_to_head(){
    $google1_button_language = get_option('google1_languages');
    echo '<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
            {"lang": "'. $google1_button_language .'"}
        </script>';
}

function google1_default_settings(){
        update_option('google1_languages', 'en-US');
        update_option('google1_button_type', 'st_with_count');
        update_option('google1_display_front', '1');
        update_option('google1_display_page', '1');
        update_option('google1_display_single', '1');
        update_option('google1_position', 'after');
}

function google1_get_button($content){
    
    global $posts;
    
    $size = _google1_get_button_size();
    $count = _google1_get_button_count();
    $url = _google1_get_post_url();
    
    $google1_button = sprintf(
        GOOGLE_BUTTON_TEMPLATE,
        $size,
        $count,
        $url
    );
    
    if( is_single() && get_option('google1_display_single') == '1' ){
        if( get_option('google1_position') == 'before' ){
           $content =  $google1_button . $content;
        }else{
            $content = $content . $google1_button;
        }
    }
    
    if( is_page() && get_option('google1_display_page') == '1' ){
        if( get_option('google1_position') == 'before' ){
           $content =  $google1_button . $content;
        }else{
            $content = $content . $google1_button;
        }
    }
    
    if( is_home() && get_option('google1_display_front') == '1' ){
        if( get_option('google1_position') == 'before' ){
           $content =  $google1_button . $content;
        }else{
            $content = $content . $google1_button;
        }
    }
    
    return $content;
}

function google1_admin_menu(){
    add_options_page('Google +1 Button', 'Google +1 Button', 'manage_options', basename(__FILE__), 'google_generate_admin_page');
}

function google_generate_admin_page(){
    $msg = '';
    
    if ( !empty($_POST) && check_admin_referer('google1_admin_options_update') ){
        
        update_option('google1_languages', $_POST['google1_languages']);
        update_option('google1_button_type', $_POST['google1_button_type']);
        update_option('google1_display_front', $_POST['google1_display_front']);
        update_option('google1_display_page', $_POST['google1_display_page']);
        update_option('google1_display_single', $_POST['google1_display_single']);
        update_option('google1_position', $_POST['google1_position']);
       
        
        $msg = '<div class="updated"><p>Your settings have been <strong>updated</strong></p></div>';
    }
    
    include('includes/google1_admin_page.php');
}

function google1_settings_links($links, $file){
    static $this_plugin;
    
    if(!$this_plugin){
        $this_plugin = plugin_basename(__FILE__);
    }
    
    if($file == $this_plugin){
        $settings_link = '<a href="'. get_bloginfo('wpurl') .'/wp-admin/options-general.php?page=index.php">Settings</a>';
        array_unshift($links, $settings_link);
    }
    
    return $links;
}



