<?php

namespace domain\Facades;

use domain\Service\StudentService;
use Illuminate\Support\Facades\Facade;

class StudentFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
         return StudentService::class;
    }

}


