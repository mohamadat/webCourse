<?php
require_once 'core/init.php';
$ram = new Ram();

$x = $ram->coonect()->insert()->error()->clear();

echo $ram->memory;
$x = 0;
$x = "cds";
// $ram->add();
// $ram->add();
// $ram->add();
// $ram->clear();
// $ram->add();

// echo '<br>'. $ram->memory;
