<?php       
    /*
    **
    ** Title function the echo the page title
    ** Has the variable $pageTitle and echo Default title for other pages
    **
    */

    function getTitle(){
        
        global $pageTitle;
        if(isset($pageTitle)){
            echo $pageTitle;   
        }else{
            echo 'Default';
        } 
    }