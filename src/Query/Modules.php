<?php

    // Elevate API Client
namespace ElevateAPI\Query;

use ElevateAPI\Query\QueryAbstract;

class Modules extends QueryAbstract
{
    public $query = 'modules';
    public $parameters = array('moduleCode' => NULL,
                               'moduleInstanceID' => NULL);
}