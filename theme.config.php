<?php


return [
    'extends' => 'bootstrap3',
    'favicon' => 'acdhch-favicon.ico',
    'helpers' => [
        'factories' => [
            #'AkSearch\View\Helper\AkSearch\Datepicker' => 'AkSearch\View\Helper\AkSearch\DatepickerFactory',
            'AcdhchTheme\View\Helper\AcdhchTheme\Datepicker' => 'AcdhchTheme\View\Helper\AcdhchTheme\DatepickerFactory',
            
            'AkSearch\View\Helper\AkSearch\Warnings' => 'AkSearch\View\Helper\AkSearch\WarningsFactory',
            #'AcdhchTheme\View\Helper\AcdhchTheme\Warnings' => 'AcdhchTheme\View\Helper\AcdhchTheme\WarningsFactory',
            
            'AkSearch\View\Helper\Root\AccountMenu' => 'AkSearch\View\Helper\Root\AccountMenuFactory',
            'AkSearch\View\Helper\Root\Auth' => 'VuFind\View\Helper\Root\AuthFactory',
            'AkSearch\View\Helper\Root\Citation' => 'VuFind\View\Helper\Root\CitationFactory',
            
            #'AkSearch\View\Helper\Root\Record' => 'VuFind\View\Helper\Root\RecordFactory',
            'AcdhchTheme\View\Helper\Root\Record' => 'VuFind\View\Helper\Root\RecordFactory',
            
            'AkSearch\View\Helper\Root\SearchBox' => 'AkSearch\View\Helper\Root\SearchBoxFactory',
            #'AcdhchTheme\View\Helper\Root\SearchBox' => 'AcdhchTheme\View\Helper\Root\SearchBoxFactory',
            
            'VuFind\View\Helper\Root\RecordDataFormatter' => 'aksearchExt\View\Helper\Root\RecordDataFormatterFactory',
            
            
        ],
        'aliases' => [
            'accountMenu' => 'AkSearch\View\Helper\Root\AccountMenu',
            'auth' => 'AkSearch\View\Helper\Root\Auth',
            
            #'datepicker' => 'AkSearch\View\Helper\AkSearch\Datepicker',
            'datepicker' => 'AcdhchTheme\View\Helper\AcdhchTheme\Datepicker',
            
            'searchbox' => 'AkSearch\View\Helper\Root\SearchBox',
            #'searchbox' => 'AcdhchTheme\View\Helper\Root\SearchBox',
            
            'warnings' => 'AkSearch\View\Helper\AkSearch\Warnings',
            #'warnings' => 'AcdhchTheme\View\Helper\AcdhchTheme\Warnings',
            
            // Overrides
            'VuFind\View\Helper\Root\Citation' => 'AkSearch\View\Helper\Root\Citation',
            
            #'VuFind\View\Helper\Root\Record' => 'AkSearch\View\Helper\Root\Record',            
            'VuFind\View\Helper\Root\Record' => 'AcdhchTheme\View\Helper\Root\Record',
        ]
    ],
    'js' => [
        'lightbox.js',
        'vendor/klaro/klaro-config.js',
        'vendor/klaro/klaro.js',
        'acdhchtheme-common.js'
    ],
    'less' => [
        'active' => true,
        'compiled.less'
    ]
];
