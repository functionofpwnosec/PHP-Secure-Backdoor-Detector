<?php
function scanFiles($dir) {
    $files = scandir($dir);
    $dangerous_files = [];

    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            $file_path = $dir . '/' . $file;
            if (is_dir($file_path)) {
                $dangerous_files = array_merge($dangerous_files, scanFiles($file_path));
            } else {
                if (!in_array($file, SAFE_FILES) && isDangerousFile($file_path)) {
                    $dangerous_files[] = $file_path;
                    backupFile($file_path);
                }
            }
        }
    }
    return $dangerous_files;
}

function isDangerousFile($file_path) {
    $content = file_get_contents($file_path);
    foreach (MALICIOUS_PATTERNS as $pattern) {
        if (strpos($content, $pattern) !== false) {
            return true;
        }
    }
    return false;
}

function backupFile($file_path) {
    $backup_dir = 'backup/';
    if (!file_exists($backup_dir)) {
        mkdir($backup_dir);
    }
    copy($file_path, $backup_dir . basename($file_path) . '-' . time());
}

function sendNotification($dangerous_files) {
    $subject = "Peringatan Keamanan: File Berbahaya Ditemukan";
    $message = "File berikut ditemukan berbahaya:\n" . implode("\n", $dangerous_files);
    mail(ADMIN_EMAIL, $subject, $message);
}

function generateReport($dangerous_files) {
    $report = "Laporan Deteksi File Berbahaya:\n" . implode("\n", $dangerous_files);
    file_put_contents('report.txt', $report);
}
?>
