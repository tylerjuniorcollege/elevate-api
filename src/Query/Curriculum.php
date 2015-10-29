<?php

    // Elevate API Client
namespace ElevateAPI\Query;

use ElevateAPI\Query\QueryAbstract;

class Curriculum extends QueryAbstract
{
    public $query = 'curriculum';
    public $parameters = array('guid' => NULL,
                               'id' => NULL,
                               'userName' => NULL,
                               'courseCode' => NULL,
                               'instanceCode' => NULL,
                               'session' => NULL,
                               'courseInstanceID' => NULL);
}