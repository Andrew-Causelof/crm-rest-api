<?php

use Bitrix\Main\ModuleManager;

class slcrm_api extends CModule
{
    public $MODULE_ID = "slcrm.api";
    public $MODULE_VERSION;
    public $MODULE_VERSION_DATE;
    public $MODULE_NAME = "SLCRM API";
    public $MODULE_DESCRIPTION = "Модуль для реализации REST API личного кабинета";

    public function __construct()
    {
        $this->MODULE_VERSION = "1.0.0";
        $this->MODULE_VERSION_DATE = "2025-01-27";
        $this->PARTNER_NAME = "Seogravity";
        $this->PARTNER_URI = "https://seo-gravity.ru/";
    }

    public function DoInstall()
    {
        global $APPLICATION;

        ModuleManager::registerModule('slcrm.api');

        // Очистка всего кэша
        BXClearCache(true);

        // Регистрируем зависимость для REST API
        RegisterModuleDependences(
            'main',
            'OnRestServiceBuildDescription',
            'slcrm.api',
            '\\Slcrm\\Api\\RestHandler',
            'onRestServiceBuildDescription'
        );

        $APPLICATION->IncludeAdminFile(
            'Установка модуля: SLCRM API',
            __DIR__ . '/step.php'
        );
    }

    public function DoUninstall()
    {
        UnRegisterModuleDependences("main", "OnRestServiceBuildDescription", $this->MODULE_ID, "\\Slcrm\\Api\\RestHandler", "onRestServiceBuildDescription");
        ModuleManager::unRegisterModule($this->MODULE_ID);
    }
}
