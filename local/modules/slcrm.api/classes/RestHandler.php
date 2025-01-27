<?php

namespace Slcrm\Api;

class RestHandler
{
    public static function onRestServiceBuildDescription()
    {
        file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/log.txt', 'RestHandler called' . PHP_EOL, FILE_APPEND);
        return [
            'slcrm' => [
                'slcrm.api.user.get' => [
                    'callback' => [\Slcrm\Api\Controllers\UserController::class, 'getUserData'],
                    'options' => [],
                ],
                'slcrm.api.documents.list' => [
                    'callback' => [\Slcrm\Api\Controllers\DocumentController::class, 'getDocuments'],
                    'options' => [],
                ],
                'slcrm.api.data.regions' => [
                    'callback' => [\Slcrm\Api\Controllers\DataController::class, 'getRegions'],
                    'options' => [],
                ],
            ],
        ];
    }
}
