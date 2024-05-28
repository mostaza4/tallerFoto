<?php

class Database{
    private $dns;
    private $dbuser;
    private $dbpass; 
    
    public function __construct($dns,$dbuser,$dbpass) {
        $this->dns    = $dns;
        $this->dbuser = $dbuser;
        $this->dbpass = $dbpass;

    }

    public function Connect() {
        
        try {
            $db = new PDO(
                            $this->dns,
                            $this->dbuser,
                            $this->dbpass
                        );
            
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}

?>