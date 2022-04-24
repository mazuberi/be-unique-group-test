<?php
    require_once("class-products-cats.php");
    
    $load_products_cats_data = new LOAD_PRODUCTS_CATS_DATA();

    if(!$load_products_cats_data->loadProductsCatsData()) {
        echo "Failed";
    }
?>