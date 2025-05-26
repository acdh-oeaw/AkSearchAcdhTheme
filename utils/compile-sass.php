<?php

require '/usr/local/vufind/vendor/autoload.php';

use ScssPhp\ScssPhp\Compiler;
use ScssPhp\ScssPhp\OutputStyle;

// Initialize compiler
 $compiler = new ScssPhp\ScssPhp\Compiler();
 $scss_file = '/usr/local/vufind/themes/AcdhchTheme/scss/acdhchtheme.scss';
$css_file  = __DIR__ . '/../css/acdhchtheme.css';

$compiled = $compiler->compileString(file_get_contents($scss_file));


 file_put_contents($css_file, $compiled->getCss());


echo "✅ SCSS compiled successfully!";
