<?php
function autoload($data){
    if (file_exists("app/classes/{$data}.php")){
        include_once "app/classes/{$data}.php";
    }
    if (file_exists("app/helpers/$data.php")){
        include_once "app/helpers/{$data}.php";
    }

}
spl_autoload_register("autoload");