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

//any function to be used in the app



echo $GLOBALS['config']['mysql']['db'];
// get('config/mysql/db')