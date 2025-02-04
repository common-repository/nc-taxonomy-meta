<?php
/* 
 * Removing Plugin data using uninstall.php
 * the below function clears the database table on uninstall
 * only loads this file when uninstalling a plugin.
 */

/* 
 * exit uninstall if not called by WP
 */
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit();
}

/* 
 * Making WPDB as global
 * to access database information.
 */
global $wpdb;

/* 
 * @var $table_name 
 * name of table to be dropped
 * prefixed with $wpdb->prefix from the database
 */


// drop the table from the database.
$wpdb->query( "DROP TABLE IF EXISTS ".$wpdb->prefix."nc_taxonomy_meta");
$wpdb->query( "DROP TABLE IF EXISTS ".$wpdb->prefix."nc_taxonomies");