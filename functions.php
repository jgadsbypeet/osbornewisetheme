<?php
function wptiny($initArray){
    $initArray['height'] = '200px';
    return $initArray;
}
add_filter('tiny_mce_before_init', 'wptiny');
add_theme_support( 'post-thumbnails' ); 

?>