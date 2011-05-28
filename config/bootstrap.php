<?php

// require_once (APP_PATH . DS . 'config' . DS . 'config.php');
// require_once (APP_PATH . DS . 'libraries' . DS . 'config.php');

define('LIBRARY_PATH', dirname(__DIR__) . DS . 'libraries');

// TODO
// 1. sanitise (remove magic quotes, slashes, global vars)
// 2. do the routing - convert path into controller and action
// 3. autoload objects
// 4. error level/reporting

// include routes

$routes = array();
$routes['#^/$#i'] = array('controller' => 'home', 'action' => 'index');
$routes['#^/things$#i'] = array('controller' => 'things', 'action' => 'index');
$routes['#^/things/new$#i'] = array('controller' => 'things', 'action' => 'add');
$routes['#^things/create$#i'] = array('controller' => 'things', 'action' => 'create');
$routes['#^/things/([0-9]{1,5})$#i'] = array('controller' => 'things', 'action' => 'show');

