<?php
// A simple script to clear OJS template cache
$dir = __DIR__ . '/cache/t_compile';
if (is_dir($dir)) {
    $files = glob($dir . '/*.php');
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }
    echo "Cache cleared successfully.";
} else {
    echo "Cache directory not found.";
}
?>
