<?php

namespace infrastructure\Facades;

use Illuminate\Support\Facades\Facade;
use infrastructure\Files;
use infrastructure\FileService;


class FileFacade extends Facade {
    
    protected static function getFacadeAccessor(){
        return FileService::class;
    }
}