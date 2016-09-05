<?php 


    function lang( $phrase ) {
        
        static $lang = array(
            
            'MESSAGE' => 'اهلا',
            'ADMIN' => 'بالمدير'
            
        
        );
        
        return $lang[$phrase];
        
    }
