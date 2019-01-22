<?php

namespace TodoProgramacion\DataTablesRender\Facades;

use TodoProgramacion\DataTablesRender\DataTablesRender;

/**
 * Class DataTablesRender
 *
 * DataTables Render facade
 *
 * @package  TodoProgramacion\DataTablesRender\Facades
 * @author  Eborio Linarez
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * Get the accessor of the package
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return DataTablesRender::class;
    }
}
