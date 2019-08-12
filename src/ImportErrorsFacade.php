<?php
/**
 * Created by PhpStorm.
 * User: ravin
 * Date: 4/3/19
 * Time: 12:06 PM
 */

namespace ImportErrors\ImportDataError;


use Illuminate\Support\Facades\Facade;


class ImportFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'import_data';
    }
}
