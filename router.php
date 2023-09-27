<?php
require_once 'vendor/autoload.php';
require_once 'pages/header.php';
// if have a header section
//    page link here in condion check
    if ('portpholio' == $_GET['page']){
        $Servicess = new \App\classes\HomeData();
        $allservicess = $Servicess->getAllServices();
        include_once 'pages/portpholio.php';
    }

    if ('card-details' == $_GET['page']){

        include_once 'pages/card-deteails.php';
    }
// if have a footer section

require_once 'pages/footer.php';