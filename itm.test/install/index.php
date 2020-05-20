<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
use Bitrix\Main\ModuleManager;

define('ITM_MODULE_ID', 'itm.test');

if (class_exists('itm_test')) {
    return;
}

class 'itm_test'
    extends CModule
{
    public function __construct()
    {
        $arModuleVersion = [];

        include __DIR__ . '/version.php';

        if (is_array($arModuleVersion) && array_key_exists('VERSION', $arModuleVersion)) {
            $this->MODULE_VERSION = $arModuleVersion['VERSION'];
            $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
        }

        $this->MODULE_ID = ITM_MODULE_ID;
        $this->MODULE_NAME = 'It-m';
        $this->MODULE_DESCRIPTION = 'Тестовое задание';
        $this->PARTNER_NAME = 'it-m';
        $this->PARTNER_URI = 'https://it-m.ru/';
    }

    public function doInstall()
    {
        ModuleManager::registerModule($this->MODULE_ID);
    }

    public function doUnInstall()
    {
        ModuleManager::unregisterModule($this->MODULE_ID);
    }
}