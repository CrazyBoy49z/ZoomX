<?php

if (!defined('MODX_CORE_PATH')) {
    $path = dirname(__FILE__, 3);
    while (!file_exists($path . '/core/config/config.inc.php') && (strlen($path) > 1)) {
        $path = dirname($path);
    }
    define('MODX_CORE_PATH', $path . '/core/');
}

return [
    /**************************************************************************/
    /*                                                                        */
    /*                      Название и версия пакета                          */
    /*                                                                        */
    /**************************************************************************/
    'name' => 'ZoomX',
    'name_lower' => 'zoomx',
    'version' => '2.1.1',
    'release' => 'beta',

    /**************************************************************************/
    /*                                                                        */
    /*            Установить пакет сразу после создания пакета                */
    /*                                                                        */
    /**************************************************************************/
    'install' => false,

    /**************************************************************************/
    /*                                                                        */
    /*  Какие элементы должны быть обновлены при обновлении пакета на сайте   */
    /*                                                                        */
    /**************************************************************************/
    'update' => [
        'plugins' => true,
        'chunks' => false,
        'menus' => false,
        'permission' => false,
        'policies' => false,
        'policy_templates' => false,
        'resources' => false,
        'settings' => false,
        'snippets' => false,
        'templates' => false,
        'widgets' => false,
    ],

    /**************************************************************************/
    /*                                                                        */
    /*      Какие элементы должны быть статическими по-умолчанию              */
    /*                                                                        */
    /**************************************************************************/
    'static' => [
        'plugins' => false,
        'snippets' => false,
        'chunks' => false,
    ],

    /**************************************************************************/
    /*                                                                        */
    /*                     Настройки логирования                              */
    /*                                                                        */
    /**************************************************************************/
    'log_level' => !empty($_REQUEST['download']) ? 0 : 1,
    'log_target' => PHP_SAPI === 'cli' ? 'ECHO' : 'HTML',

    /**************************************************************************/
    /*                                                                        */
    /*                  Скачать пакет после создания                          */
    /*                                                                        */
    /**************************************************************************/
    'download' => !empty($_REQUEST['download']),
];