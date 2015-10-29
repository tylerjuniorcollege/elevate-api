<?php

    // Elevate API Client
namespace ElevateAPI\Query;

use ElevateAPI\Query\QueryAbstract;

class Common extends QueryAbstract
{
    public $query = 'common';
    public $parameters = array();
    
    public function getSecurityString($auth_key) {
        return $auth_key;
    }
}