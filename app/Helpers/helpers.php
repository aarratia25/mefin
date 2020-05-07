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