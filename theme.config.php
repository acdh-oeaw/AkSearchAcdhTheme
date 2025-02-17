<?php
return [
    'extends' => 'bootstrap5',
    'favicon' => 'acdhch-favicon.ico',
    'helpers' => [
        'factories' => [
            'AkSearch\View\Helper\AkSearch\Warnings' => 'AkSearch\View\Helper\AkSearch\WarningsFactory',
            'aksearchExt\View\Helper\Root\Record' => 'VuFind\View\Helper\Root\RecordFactory',
            'aksearchExt\View\Helper\aksearchExt\Datepicker' => 'aksearchExt\View\Helper\aksearchExt\DatepickerFactory',
            'aksearchExt\View\Helper\Root\AccountMenu' => 'AkSearch\View\Helper\Root\AccountMenuFactory',
            'AkSearch\View\Helper\Root\Auth' => 'VuFind\View\Helper\Root\AuthFactory',
            'AkSearch\View\Helper\Root\Citation' => 'VuFind\View\Helper\Root\CitationFactory',
            'AkSearch\View\Helper\Root\SearchBox' => 'AkSearch\View\Helper\Root\SearchBoxFactory',
            'VuFind\View\Helper\Root\RecordDataFormatter' => 'aksearchExt\View\Helper\Root\RecordDataFormatterFactory',
            
            ],
        'aliases' => [
            'warnings' => 'AkSearch\View\Helper\AkSearch\Warnings',
            'record' => 'aksearchExt\View\Helper\Root\Record',
            'datepicker' => 'aksearchExt\View\Helper\aksearchExt\Datepicker',
            'accountMenu' => 'AkSearch\View\Helper\Root\AccountMenu',
            'auth' => 'AkSearch\View\Helper\Root\Auth',
            'citation' => 'AkSearch\View\Helper\Root\Citation',
            'searchbox' => 'AkSearch\View\Helper\Root\SearchBox',
            
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
        'acdhchtheme.css',
        'popoverEntityFacts.css',
        'popoverKeywordChain.css'
    ],
    'js' => [
        'theme-common.js',
        
    ],
    'header-nav' => parse_ini_file('header-nav.ini', true),
];
