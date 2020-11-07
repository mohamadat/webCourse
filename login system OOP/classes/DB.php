<?php
include '../core/init.php';
session_start();

class DB{
    //proprties
    private $_pdo,
            $_error = false,
            $_results,
            $_count = 0;


    //methods
    public function __construct(){
        $this->_pdo = new PDO('mysql:host=localhost/'. Config::get() ', 'root', '' );
    }

    public function query($sql)
    {
        //prepare(sql + ?) + bindvariables()
        $this->_pdo->execute();
    }

    


}