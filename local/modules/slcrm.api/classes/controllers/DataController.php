<?php

namespace Slcrm\Api\Controllers;

class DataController
{
    public static function getRegions($params, $n, $server)
    {
        // Заглушка для списка регионов
        return [
            ['id' => '01', 'name' => 'Республика Адыгея'],
            ['id' => '02', 'name' => 'Республика Башкортостан'],
        ];
    }
}
