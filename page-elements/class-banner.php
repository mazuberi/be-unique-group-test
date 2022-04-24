<?php
	require_once("db-oop.php");

	class LOAD_BANNER_DATA {
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

		public function loadBannerData() {
			$load_data = array();

			$load_final_data = array();

			$banner_status = '2';

			try {
				$stmt = $this->conn->prepare("SELECT * FROM banners WHERE banner_status = :banner_status");

				$stmt->execute(array(
					':banner_status'=>$banner_status,
				 ));
				
				$userRow=$stmt->fetchAll(PDO::FETCH_ASSOC);

				if($stmt->rowCount() >= 1) {

				    foreach($userRow as $row){
				    	$banner_id = $row['banner_id'];
				    	$banner_title = $row['banner_title'];
				    	$banner_image = $row['banner_image'];
				    	$banner_status = $row['banner_status'];

				        array_push($load_final_data, array(
			            	// products
			            	'banner_id' => $banner_id,
			            	'banner_title' => $banner_title,
			            	'banner_image' => $banner_image,
			            	'banner_status' => $banner_status,
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