<?php
return [
    'extends' => 'bootstrap5',
    'favicon' => 'acdhch-favicon.ico',
    'helpers' => [
        'factories' => [
            'AkSearch\View\Helper\AkSearch\Warnings' => 'AkSearch\View\Helper\AkSearch\WarningsFactory',
            #'AcdhchTheme\View\Helper\AcdhchTheme\Warnings' => 'AcdhchTheme\View\Helper\AcdhchTheme\WarningsFactory',
            ],
        'aliases' => [
            'warnings' => 'AkSearch\View\Helper\AkSearch\Warnings',
            #'warnings' => 'AcdhchTheme\View\Helper\AcdhchTheme\Warnings',
        ],
    ],
    /**
     * The following is all custom attributes for this theme
     * in order to demonstrate the themeConfig view helper.
     */
    'home-content' => [
        'links' => [
            'Setup' => 'install-home',
            'Dev Tools' => 'devtools-home',
        ],
    ],
    'css' => [
        'compiled.css',
        'acdhchtheme.css'
    ],
    'js' => [
        'theme-common.js'
    ],
    'header-nav' => parse_ini_file('header-nav.ini', true),
];
