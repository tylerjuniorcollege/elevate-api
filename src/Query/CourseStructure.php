<?php

    // Elevate API Client
namespace ElevateAPI\Query;

use ElevateAPI\Query\QueryAbstract;

class CourseStructure extends QueryAbstract
{
    public $query = 'course_structure';
    public $parameters = array('courseInstanceID' => NULL,
                               'instanceCode' => NULL,
                               'session' => NULL,
                               'courseCode' => NULL);
}