<?php

    function css_boostrap(){
        echo "assets/css/boostrap.min.css";
    }

    function css_all(){
        echo "assets/css/all.css";
    }

    function css_animate(){
        echo "assets/css/animate.css";
    }

    function css_style(){
        echo "assets/css/style.css";
    }

    // js files
    function js_main(){
        echo "assets/js/bootstrap.bundle.js";
    }
    function js_wow(){
        echo "assets/js/wow.min.js";
    }
    function js_all(){
        echo "assets/js/all.js";
    }

    // images
    function img($img){
        echo "assets/images/{$img}";
    }