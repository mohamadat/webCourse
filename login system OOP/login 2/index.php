<?php
require_once 'core/init.php';

// include config



$user1 = new User();

echo Config::get('mysql/host');