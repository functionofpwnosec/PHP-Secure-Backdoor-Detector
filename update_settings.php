<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $safe_files = explode(',', $_POST['safe_files']);
    $safe_files = array_map('trim', $safe_files);
    
    $config_content = "<?php\n";
    $config_content .= "define('SAFE_FILES', " . var_export($safe_files, true) . ");\n";
    $config_content .= "define('SCAN_DIR', '/path/to/your/website');\n";
    $config_content .= "define('ADMIN_EMAIL', 'admin@example.com');\n";
    $config_content .= "define('MALICIOUS_PATTERNS', ['eval(', 'base64_decode(', 'exec(', 'shell_exec(', 'passthru(', 'system(', 'cmd.exe', '.php', '.sh']);\n";
    
    file_put_contents('config.php', $config_content);
    echo "Pengaturan berhasil diperbarui!";
}
?>
