<?php 


    function lang($phrase){
        
        static $lang = array (
            
            //dashboard
             
            'HOME_ADMIN'        => "Home",
            'EDIT_PROFILE'      =>'Edit Profile',
            'SETTINGS'          => 'Settings',
            'LOGOUT'            => 'Logout',
            'CATEGORIES'        => 'Sections',
            'MEMBERS'           => 'Members',
            'STATISTICS'        => 'Statistics',
            'ITEMS'             => 'Items',
            'LOGS'              => 'logs',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => ''
            
        
            //Settings
            
        
        );
            
            return $lang[$phrase];
        
    }
