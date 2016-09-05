<?php 


    //Database

    include 'connect.php';

    // Routes
    $tpl = 'includes/templates/'; //Template Directory
    $lang ='includes/languages/'; // language Directory
    $func = 'includes/functions/'; //functions Directory
    $css = 'layout/css/'; //css Directory
    $js = 'layout/js/'; //js Directory
    
    
        
        
    //include the Important files
    include $func . 'functions.php';
    include $lang . 'english.php';
    include $tpl . 'header.php'; 

    //Include navbar in all pages except the one with noNavbar variable 

    if(!isset($noNavbar)){ include $tpl . 'navbar.php';}


    