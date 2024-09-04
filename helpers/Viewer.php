<?php 

    class Viewer {

        public static function render($view){
            require "views/$view/$view.php";
            require "views/template.php";
        }

    }