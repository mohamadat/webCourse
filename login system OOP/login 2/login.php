<?php
require_once 'core/init.php';


// $myDB = new DB();
// $myDB = new DB();
// $myDB = new DB();
// $myDB = new DB();
// $myDB = new DB();

$mynewdb = DB::getInstance();


// $mynewdb->query("delete from users;");

// var_dump ($mynewdb->error());

// var_dump ($mynewdb->count());
// var_dump ($mynewdb->results());

print_r( $mynewdb->action("select * ", "users", array("username","=","jan"))->results());


// $myDB->query("INSERT INTO `users` ( `username`, `name`, `email`, `password`, `salt`, `joined`, `groupId`) VALUES ( '', ?, '', '', '', '', '1');", array('loge'));


// var_dump( $myDB->error());
// // $myDB->query("select * from users");
//  $myDB->query("select * from users;");

// echo $myDB->count();