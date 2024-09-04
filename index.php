<?php 

    require "helpers/Viewer.php";

    if (isset($_GET['something'])) {
        var_dump("okok");die;
    }else{
        Viewer::render('home');
    }