<?php

    // Elevate API Client
namespace ElevateAPI\Query;

use ElevateAPI\Query\QueryAbstract;

class Ping extends QueryAbstract
{
    public $query = 'ping';
    public $parameters = array();
}
