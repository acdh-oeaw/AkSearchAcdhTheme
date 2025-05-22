<?php
$scss_file = '/usr/local/vufind/themes/AcdhchTheme/scss/acdhchtheme.scss';
$scss = file_get_contents($scss_file);

preg_match_all('/\.([a-zA-Z0-9_-]+)\s*{/', $scss, $matches);

$classes = $matches[1];
$duplicates = array_filter(array_count_values($classes), fn($count) => $count > 1);

if (empty($duplicates)) {
    echo "✅ No duplicate class definitions found.\n";
} else {
    echo "❌ Duplicate class definitions:\n";
    foreach ($duplicates as $class => $count) {
        echo "- .$class defined $count times\n";
    }
}
