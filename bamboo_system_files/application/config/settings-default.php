<?php
/*******
 * Default settings. Based off of
 * https://github.com/tigerhawkvok/BambooInvoice/pull/3
 *
 * Remember to rename this to settings.php when you've configured it!
 *******/
/*
  | -------------------------------------------------------------------
  | DATABASE CONNECTIVITY SETTINGS
  | -------------------------------------------------------------------
  | This file will contain the settings needed to access your database.
  |
  | For complete instructions please consult the 'Database Connection'
  | page of the User Guide.
  |
  | -------------------------------------------------------------------
  | EXPLANATION OF VARIABLES
  | -------------------------------------------------------------------
  |
  |  ['hostname'] The hostname of your database server.
  |  ['username'] The username used to connect to the database
  |  ['password'] The password used to connect to the database
  |  ['database'] The name of the database you want to connect to
  |  ['dbdriver'] The database type. ie: mysql.  Currently supported:
  mysql, mysqli, postgre, odbc, mssql
  |  ['dbprefix'] You can add an optional prefix, which will be added
  |         to the table name when using the  Active Record class
  |  ['pconnect'] TRUE/FALSE - Whether to use a persistent connection
  |  ['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
  |  ['active_r'] TRUE/FALSE - Whether to load the active record class
  |  ['cache_on'] TRUE/FALSE - Enables/disables query caching
  |  ['cachedir'] The path to the folder where cache files should be stored
  |
  | The $active_group variable lets you choose which connection group to
  | make active.  By default there is only one group (the 'default' group).
  |
*/
$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database = 'bambooinvoice';
$dbdriver = 'mysql';
$dbprefix = 'bamboo_';
$active_r = TRUE;
$pcconnect = FALSE;
$db_debug = TRUE;
$cache_on = FALSE;
$cachedir = '';
$char_set = 'utf8';
$dbcollat = 'utf8_general_ci';


$cookie_prefix = "bamboo";
$cookie_domain = "";
$cookie_path = "/";
/*
  |--------------------------------------------------------------------------
  | Encryption Key
  |--------------------------------------------------------------------------
  |
  | If you use the Encryption class or the Sessions class with encryption
  | enabled you MUST set an encryption key.  See the user guide for info.
  |
*/
$encryption_key = "bamboo_encryption_key_Gg2F5";
/*
  |--------------------------------------------------------------------------
  | Index File
  |--------------------------------------------------------------------------
  |
  | Typically this will be your index.php file, unless you've renamed it to
  | something else. If you are using mod_rewrite to remove the page set this
  | variable so that it is blank.
  |
*/
$index_page = "index.php";
/*
  |--------------------------------------------------------------------------
  | Base Site URL
  |--------------------------------------------------------------------------
  |
  | URL to your Code Igniter root. Typically this will be your base URL,
  | WITH a trailing slash:
  |
  |	http://www.your-site.com/
  |
*/
$base_url = "http://localhost/bambooinvoice/";
// This should be a full address, with a slash.  For example, here's what
// I use on bambooinvoice.org:
//$config['base_url']	= 'http://bambooinvoice.org/';


?>