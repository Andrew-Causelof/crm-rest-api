<?php

namespace Slcrm\Api\Controllers;

use Bitrix\Main\Application;

class UserController
{
    public static function getUserData($params, $n, $server)
    {
        global $USER;
        if (!$USER->IsAuthorized()) {
            throw new \Bitrix\Rest\RestException("Unauthorized", 401);
        }

        return [
            'id' => $USER->GetID(),
            'name' => $USER->GetFullName(),
            'email' => $USER->GetEmail(),
        ];
    }
}
