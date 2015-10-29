<?php

    // Elevate API Client
namespace ElevateAPI\Query;

use ElevateAPI\Query\QueryAbstract;

class Person extends QueryAbstract
{
    public $query = 'person';
    public $parameters = array('guid' => NULL,
                               'id' => NULL,
                               'userName' => NULL);
}