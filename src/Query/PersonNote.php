<?php

    // Elevate API Client
namespace ElevateAPI\Query;

use ElevateAPI\Query\QueryAbstract;

class PersonNote extends QueryAbstract
{
    public $query = 'person_note';
    public $parameters = array('guid' => NULL,
                               'id' => NULL,
                               'userName' => NULL,
                               'current' => NULL,
                               'noteType' => NULL);
}