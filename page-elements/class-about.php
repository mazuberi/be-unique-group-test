<?php
	require_once("db-oop.php");

	class LOAD_ABOUT_DATA {
		private $conn;

		public function __construct() {
			$database = new Database();
			$db = $database->dbConnection();
			$this->conn = $db;
	    }
		
		public function runQuery($sql) {
			$stmt = $this->conn->prepare($sql);
			return $stmt;
		}

		public function loadAboutData() {
			$load_data = array();

			$load_final_data = array();

			$about_status = '2';

			try {
				$stmt = $this->conn->prepare("SELECT * FROM about WHERE about_status = :about_status");

				$stmt->execute(array(
					':about_status'=>$about_status,
				 ));
				
				$userRow=$stmt->fetchAll(PDO::FETCH_ASSOC);

				if($stmt->rowCount() >= 1) {

				    foreach($userRow as $row){
				    	$about_id = $row['about_id'];
				    	$about_text = $row['about_text'];
				    	$about_status = $row['about_status'];

				        array_push($load_final_data, array(
			            	// products
			            	'about_id' => $about_id,
			            	'about_text' => $about_text,
			            	'about_status' => $about_status,
			            ));
					}

					// echo json_encode(array("load_final_data"=>$load_final_data));

		            return $load_final_data;
				}
				else {

					return false;
				}
			}
			catch(PDOException $e) {
				echo $e->getMessage();
			}
		}
	}
?>