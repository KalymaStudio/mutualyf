<?php

// Load Wordpress Framework
if ( !defined('ABSPATH') ) { require_once( dirname(__FILE__) . "/../wp-load.php"); } 

wp_logout();

$url = ( is_ssl() ? 'https://' : 'http://' ) . 'mobile.mutualyf.com.ar/';
wp_redirect($url);
exit();
