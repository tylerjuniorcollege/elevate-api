<?php

    // Elevate API Client
namespace ElevateAPI\Query;

use ElevateAPI\Query\QueryAbstract;

class Enrolment extends QueryAbstract
{
    public $query = 'enrolment';
    public $parameters = array('guid' => NULL,
                               'id' => NULL,
                               'userName' => NULL,
                               'courseCode' => NULL,
                               'instanceCode' => NULL,
                               'academicSession' => NULL);
}