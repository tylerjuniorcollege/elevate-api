<?php

    // Elevate API Client
namespace ElevateAPI\Query;

use ElevateAPI\Query\QueryAbstract;

class Interactions extends QueryAbstract
{
    public $query = 'interactions';
    public $parameters = array('userName' => NULL,
                               'id' => NULL,
                               'guid' => NULL,
                               'serviceCode' => NULL,
                               'instanceCode' => NULL,
                               'modeOfStudyCode' => NULL,
                               'locationCode' => NULL,
                               'statusCode' => NULL);
}