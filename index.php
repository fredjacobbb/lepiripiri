<?php 

    require "helpers/Viewer.php";

    require 'models/DbConnect.php';

    require 'controllers/ControllerProducts.php';

    DbConnect::connect();

    if (isset($_GET['something'])) {
        var_dump("okok");die;
    }else{
        Viewer::render('home');
    }