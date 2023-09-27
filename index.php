<?php
include_once 'vendor/autoload.php';
use App\classes\HomeData;

$object = new HomeData();
$show = $object->Index();

