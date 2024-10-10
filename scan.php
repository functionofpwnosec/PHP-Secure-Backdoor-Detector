<?php
require 'config.php';
require 'functions.php';

$dangerous_files = scanFiles(SCAN_DIR);

if (!empty($dangerous_files)) {
    sendNotification($dangerous_files);
    generateReport($dangerous_files);
    file_put_contents('log.txt', implode("\n", $dangerous_files), FILE_APPEND);
    echo "File berbahaya ditemukan! Pemberitahuan telah dikirim ke admin.";
} else {
    echo "Tidak ada file berbahaya ditemukan.";
}
?>
