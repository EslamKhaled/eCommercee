<?php 


    function lang( $phrase ) {
        
        static $lang = array(
            
            
            //dashboard 
            'HOME_ADMIN' => "Startseite",
            
            'EDIT_PROFILE'  =>'Profil bearbeiten',
            'SETTINGS'      => 'Einstellungen',
            'LOGOUT'        => 'Ausloggen',
            'CATEGORIES'    => 'Abschnitte',
            'MEMBERS'       => 'Mitglieder',
            'STATISTICS'    => 'Statistiken',
            'ITEMS'         => 'Stück',
            'LOGS'          => 'Protokolle',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => ''
            
        
        );
        
        return $lang[$phrase];
        
    }
