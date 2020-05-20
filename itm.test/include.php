<?
defined('B_PROLOG_INCLUDED') and (B_PROLOG_INCLUDED === true) or die();

use \Bitrix\Main\Loader;

define('ITM_MODULE_ID', 'itm.test');

Loader::registerAutoLoadClasses(ITM_MODULE_ID, [
    'Itm\Controller' => 'lib/controller/Base.php',
]);