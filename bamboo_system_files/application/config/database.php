<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

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


