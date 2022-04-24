<?php
    require_once("class-products.php");
    
    $load_products_data = new LOAD_PRODUCTS_DATA();

    if(!$load_products_data->loadProductsData()) {
        echo "Failed";
    }
?>