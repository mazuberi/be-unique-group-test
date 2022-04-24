<?php
	require_once("db-oop.php");

	class LOAD_PRODUCTS_DATA {
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

		public function loadProductsData() {
			$load_data = array();

			$load_final_data = array();

			$product_status = '2';

			try {
				$stmt = $this->conn->prepare("SELECT products.*, products_cats.* FROM products INNER JOIN products_cats ON products.product_cat_id = products_cats.product_cat_id WHERE products.product_status = :product_status");

				$stmt->execute(array(
					':product_status'=>$product_status,
				 ));
				
				$userRow=$stmt->fetchAll(PDO::FETCH_ASSOC);

				if($stmt->rowCount() >= 1) {

				    foreach($userRow as $row){
				    	// products
				    	$product_id = $row['product_id'];
				    	$product_cat_id = $row['product_cat_id'];
				    	$product_name = $row['product_name'];
				    	$product_currency = $row['product_currency'];
				    	$product_price = $row['product_price'];
				    	$additional_label = $row['additional_label'];
				    	$additional_text = $row['additional_text'];
				    	$product_image = $row['product_image'];
				    	$product_status = $row['product_status'];

				    	// products_cats
				    	$product_cat_id = $row['product_cat_id'];
				    	$product_cat_name = $row['product_cat_name'];
				    	$product_cat_image = $row['product_cat_image'];
				    	$product_status = $row['product_status'];

				        array_push($load_final_data, array(
				        	// products
				        	'product_id' => $product_id,
				        	'product_cat_id' => $product_cat_id,
				        	'product_name' => $product_name,
				        	'product_currency' => $product_currency,
				        	'product_price' => $product_price,
				        	'additional_label' => $additional_label,
				        	'additional_text' => $additional_text,
				        	'product_image' => $product_image,
				        	'product_status' => $product_status,

			            	// products cats
			            	'product_cat_id' => $product_cat_id,
			            	'product_cat_name' => $product_cat_name,
			            	'product_cat_image' => $product_cat_image,
			            	'product_status' => $product_status,
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