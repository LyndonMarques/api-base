<?php

namespace DataImport;

use Illuminate\Support\Facades\Facade;

class DataImportFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return DataImport::class;
    }
}
