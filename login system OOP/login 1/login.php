<?php
require_once 'core/init.php';
require_once 'classes/DB.php';

$myDB = new DB();

$myDB->query('delete from users ');
echo $myDB->count();

