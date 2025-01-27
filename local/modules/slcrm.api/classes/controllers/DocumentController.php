<?php

namespace Slcrm\Api\Controllers;

class DocumentController
{
    public static function getDocuments($params, $n, $server)
    {
        // Здесь можно подключить логику для получения документов
        return [
            ['id' => 1, 'name' => 'Документ 1'],
            ['id' => 2, 'name' => 'Документ 2'],
        ];
    }
}
