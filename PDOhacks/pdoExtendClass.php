
<?php
/**
 *
 *                 ♣♣♣♦♦♠  hack by : SIV.S  ♠♦♦♣♣♣
 *
 *
 *
 *  [ PDOCONFIG CLASS ] 
 *
 *    PDOconfig class which extends the PDO class and 
 *    instead of calling the PDO construct every time with the
 *    DNS string, username and password 
 *    PDOconfig class object should be used.
 *
 *  
 **/


class PDOConfig extends PDO {
    
    private $_engine;
    private $_host;
    private $_database;
    private $_user;
    private $_pass;
   
    public function __construct(){


        $this->_engine = 'mysql';  
        $this->_host = 'localhost';
        $this->_database = 'db';
        $this->_user = 'root';
        $this->_pass = '';

        $dns = $this->_engine.':dbname='.$this->_database.";host=".$this->_host;

        #invoking the parent constructer ie, PDO
        parent::__construct( $dns, $this->_user, $this->_pass );   // the real meat
    }

}

?

/** 
 * How to use:
 *
 *
 *   $pdo = new PDOConfig;
 *
 *   $prepare = $pdo->prepare(...);
 *   $result  = $prepare->execute();
 *
 **/ 
