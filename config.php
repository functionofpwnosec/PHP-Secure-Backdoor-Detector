<?php
// Konfigurasi dasar
define('SAFE_FILES', ['index.php', 'config.php']); // Tambahkan nama file aman
define('SCAN_DIR', '/path/to/your/website'); // Ganti dengan path ke direktori website
define('ADMIN_EMAIL', 'admin@example.com'); // Ganti dengan email admin
define('MALICIOUS_PATTERNS', ['eval(', 'base64_decode(', 'exec(', 'shell_exec(', 'passthru(', 'system(', 'cmd.exe', '.php', '.sh']);
?>
