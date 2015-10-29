<?php

    // Elevate API Client
namespace ElevateAPI\Query;

abstract class QueryAbstract {
    public $query;
    public $parameters = array();
    
    abstract function getSecurityString($auth_key);
    
    function authSecurityString($type, $auth_key) {
        switch(strtolower($type)) {
            case 'md5':
                return md5($this->getSecurityString($auth_key));
                break;
            
            case 'sha1':
                return sha1($this->getSecurityString($auth_key));
                break;
            
            case 'key':
                return $auth_key;
                break;
        }
    }
}
