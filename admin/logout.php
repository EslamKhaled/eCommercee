<?php


    session_start();//Start The session 


    session_unset(); //Unset The data (not destroy but remove the info)


    session_destroy(); // destroy the session

    header('Location:index.php'); //redirect to index.php page

    
    exit();