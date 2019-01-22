<?php

namespace TodoProgramacion\DataTablesRender;

/**
 * Class Render
 *
 * This class allows to easily render an answer with a collection of data to be used in jQuery DataTables
 *
 * @package TodoProgramacion\DataTablesRender
 * @author  Eborio Linarez
 */
class Render
{
    /**
     * Render records
     *
     * @param int $draw Rendered page
     * @param int $recordsTotal Total records
     * @param int $recordsFiltered Total records filtered
     * @param array $data DataTable data
     * @return array
     */
    public static function make($draw, $recordsTotal, $recordsFiltered, $data)
    {
        $response = [
            'draw' => intval($draw),
            'recordsTotal' => intval($recordsTotal),
            'recordsFiltered' => intval($recordsFiltered),
            'data' => $data
        ];
        return $response;
    }
}
