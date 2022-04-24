<?php
	require_once("db-oop.php");

	class LOAD_PRODUCTS_CATS_DATA {
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

		public function loadProductsCatsData() {
			$load_data = array();

			$load_final_data = array();

			$product_cat_status = '2';

			try {
				$stmt = $this->conn->prepare("SELECT * FROM products_cats WHERE product_cat_status = :product_cat_status");

				$stmt->execute(array(
					':product_cat_status'=>$product_cat_status,
				 ));
				
				$userRow=$stmt->fetchAll(PDO::FETCH_ASSOC);

				if($stmt->rowCount() >= 1) {

				    foreach($userRow as $row){
				    	$product_cat_id = $row['product_cat_id'];
				    	$product_cat_name = $row['product_cat_name'];
				    	$product_cat_image = $row['product_cat_image'];
				    	$product_cat_status = $row['product_cat_status'];

				        array_push($load_final_data, array(
			            	// products
			            	'product_cat_id' => $product_cat_id,
			            	'product_cat_name' => $product_cat_name,
			            	'product_cat_image' => $product_cat_image,
			            	'product_cat_status' => $product_cat_status,
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