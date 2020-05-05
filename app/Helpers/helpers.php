<?php

if (!function_exists('getRoles')) {
    /**
     * getRoles
     * 
     * @return roles string
     */
    function getRoles($roles)
    {
        if ($roles->count() > 0) {
            
            $getRoles = $roles->toArray();
            
            return implode(', ', $getRoles);
        }
        
        return 'disabled';
    }
}

if (!function_exists('classModal')) {
    /**
     * classModal
     * 
     * @return class config
     */
    function classModal($configs)
    {
        if( !is_null($configs) ){

            return implode(' ', $configs);

        }
       
        return 'modal-dialog-popout'; 
    }
}