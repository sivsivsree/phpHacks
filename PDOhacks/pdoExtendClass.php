
<?php
/**********************************************************************************

                   ######  hack by : Siv.S  ######



 ---------------
 PDOconfig Class
 ---------------

     PDOconfig class which extends the PDO class and can be used to 
     initialise the dns , username and password

     instead of calling the PDO construct every time with the
         DNS string, username and password 
     PDOconfig class object should be called
     
 --------------
     Usage
 ---------------
   
     $pdo = new PDOConfig;

  //same as the ordinary pdo  
    $prepare = $pdo->prepare(...);
    $result  = $prepare->execute();

 ************************************************************************************/


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

?>
