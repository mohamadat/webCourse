<?php
session_start();

//save some global data
$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'db' => 'codelogin'

        
    ),
    'session' => array(),

);

$GLOBALS['name'] = "atwa";

// Dependency injection
//auto import when new||:: is called
spl_autoload_register(function($class){
    require_once ('classes/' . $class .  '.php');
  });
  require_once ('includes/nav.php');


  require_once ('functions/clearcode.php');
// escape("A  is <b>bold</b>");


//any function to be used in the app

// include_once 'classes/Config.php';
// include_once 'classes/User.php';


// new
// ::


// echo $GLOBALS['config']['mysql']['db'];
// get('config/mysql/db')