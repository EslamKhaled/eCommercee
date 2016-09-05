<?php
    
    /* 
    Categories => [Manage | Edit | Update | Add | Insert | Delete | Stats]
        
    */

    //Getting the GET request to move from a page to another page
    $do = isset($_GET['do']) ? $_GET['do'] : 'manage';
    /* 
    //The above line equals this block of code 
    
    $do = '';

    if(isset($_GET['do'])){
        
        $do =  $_GET['do'];    
    
    
    } else {
        
        $do = 'Manage';
    }
    
  */

    //If the page Is the main page
    if($do == 'manage'){
        
       echo 'Welcome to manage page';
       echo '<a href="page.php?do=add"> Add New Category + </a>';    
        
    }

    //If the page Is the add page
    elseif($do == 'add'){
        echo 'you are in add page';
    }
    //If the page Is the delete page

     elseif($do == 'delete'){
        echo 'you are in delete page';
    
    //If the page Is edit page     
    }elseif($do == 'edit'){
        echo 'you are in delete page';
    }

    //If the page Is the error page
    else{
        echo 'Error , No page with this name ';
    }