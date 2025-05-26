<?php

require __DIR__ . '/../vendor/autoload.php';

use ScssPhp\ScssPhp\Compiler;
use ScssPhp\ScssPhp\OutputStyle;

// Initialize compiler
 $compiler = new ScssPhp\ScssPhp\Compiler();
 $scss_file = '/usr/local/vufind/themes/AcdhchTheme/scss/acdhchtheme.scss';
$css_file  = __DIR__ . '/../css/acdhchtheme.css';

/*
$compiler->setImportPaths([
    __DIR__ . '/../scss/',
    __DIR__ . '/../vendor/twbs/bootstrap/scss/', // ✅ Tell SCSSPHP where to find Bootstrap
    __DIR__ . '/../vendor/twbs/bootstrap/scss/components', // ✅ Tell SCSSPHP where to find Bootstrap
]);
 * 
 */
//$scss->setImportPaths('/usr/local/vufind/themes/AcdhchThemeB5/scss/');
//$scss->setImportPaths('/usr/local/vufind/themes/AcdhchThemeB5/vendor/twbs/bootstrap/scss/');
// Load SCSS file

//$scssContent = file_get_contents('/usr/local/vufind/themes/AcdhchThemeB5/scss/acdhchtheme.scss');

// Compile SCSS to CSS
//$css = $scss->compileString($scssContent);
//$css = $scss->compileString('@import "acdhchtheme.scss";');

// Save output
//file_put_contents(__DIR__ . '/../css/compiled.css', $css->getCss());

//$compiler->setSourceMap(Compiler::SOURCE_MAP_FILE);
    //$compiler->setOutputStyle(\ScssPhp\ScssPhp\OutputStyle::EXPANDED);

$compiled = $compiler->compileString(file_get_contents($scss_file));


 file_put_contents($css_file, $compiled->getCss());


echo "✅ SCSS compiled successfully!";
