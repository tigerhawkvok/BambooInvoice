<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
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
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['active_r'] TRUE/FALSE - Whether to load the active record class
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
*/

$active_group = 'default';

include('settings.php');

$db['default']['hostname'] = $hostname;
$db['default']['username'] = $username;
$db['default']['password'] = $password;
$db['default']['database'] = $database;
$db['default']['dbdriver'] = $dbdriver;
$db['default']['dbprefix'] = $dbprefix;
$db['default']['active_r'] = $active_r;
$db['default']['pconnect'] = $pconnect;
$db['default']['db_debug'] = $db_debug;
$db['default']['cache_on'] = $cache_on;
$db['default']['cachedir'] = $cachedir;
$db['default']['char_set'] = $char_set;
$db['default']['dbcollat'] = $dbcollat;

