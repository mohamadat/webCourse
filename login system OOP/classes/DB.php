<?php
include 'Config.php';

// DB DDL/DSL -> sql


// 1- Create PDO object  -> we have connection with database
// 2- Create PDOSQLSTMT (prepare(SQL))  -> we have PDOQUERY
//     a- if PDOQUERY has ? ,? we have to bindeValu(pos,value) -> we ready     PDOQUERY
// 3- excute the PDOQUery  -> DONE and we have _pdoquery!


class DB{
    //proprties
    private $_pdo,
            $_error = false,
            $_results,
            $_count = 0,
            $_query;


    //methods
    public function __construct(){
        $pdopath = 'mysql:host=' . 
        Config::get('mysql/host') . 
        ';dbname=' . 
        Config::get('mysql/db')
        ;

    try {
        $this->_pdo = new PDO($pdopath,
        Config::get('mysql/username'),
        Config::get('mysql/password'));
        echo 'connected susccfuly';
     } 
        catch (PDOException $e) {
         die('Connection failed: ' . $e->getMessage());
    }
   


     
    }

    public function query($sql, $params = array())
    {   
        $this->_error = false;
        //here we give $this->_query a value if prepare works well!
        if ($this->_query = $this->_pdo->prepare($sql)) {
            // $this->_query = $this->_pdo->prepare($sql);

            $x = 1;
            foreach ($params as $param) {
                # code...
                $this->_query->bindValue($x, $param);
                $x++;

            }

            if ($this->_query->execute()){
                $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
                $this->_count = $this->_query->rowCount();
            }
            else{
                $this->_error = true;
            }

        }

        // $db->query('select * from users where username = ? or username = ? ', array('atwa','mikel'))
        
        
        //PREPARE ?
        //BINDVARIAVLES
        //EXCUTE


        //prepare(sql + ?) + bindvariables()
        // $this->_pdo->execute();
    }

     public function error()
    {
       return $this->_error;
    }

    public function count()
    {
       return $this->_count;
    }


}