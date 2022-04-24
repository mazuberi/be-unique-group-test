<?php
	class Database {   
	    private $host = "localhost";
	    private $db_name = "maz_wp869";
	    private $username = "maz_wp869";
	    private $password = "Swb(F.p387";
	    
	    public $conn;
	     
	    public function dbConnection() {
		    $this->conn = null;    
	        try {
	            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
	        }
			catch(PDOException $exception) {
	            echo "Connection error: " . $exception->getMessage();
	        }

	        return $this->conn;
	    }
	}
?>