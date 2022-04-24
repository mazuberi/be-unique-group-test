<?php
    require_once("class-about.php");
    
    $load_about_data = new LOAD_ABOUT_DATA();

    if(!$load_about_data->loadAboutData()) {
        echo "Failed";
    }
?>