<?php

    // Elevate API Client
namespace ElevateAPI\Query;

use ElevateAPI\Query\QueryAbstract;

class Courses extends QueryAbstract
{
    public $query = 'courses';
    public $parameters = array('courseCode' => NULL,
                               'instanceCode' => NULL);
}