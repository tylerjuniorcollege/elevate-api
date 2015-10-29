<?php

    // Elevate API Client
namespace ElevateAPI\Query;

use ElevateAPI\Query\QueryAbstract;

class Common extends QueryAbstract
{
    public $query = 'common';
    public $parameters = array('serviceCode' => NULL,
                               'instanceCode' => NULL,
                               'modeOfStudyCode' => NULL,
                               'locationCode' => NULL);
}