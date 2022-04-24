<?php
    require_once("class-banner.php");
    
    $load_banner_data = new LOAD_BANNER_DATA();

    if(!$load_banner_data->loadBannerData()) {
        echo "Banner Failed";
    }
?>