<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Pengaturan Keamanan</title>
</head>
<body>
    <h1>Pengaturan File Aman</h1>
    <form action="update_settings.php" method="post">
        <label for="safe_files">File Aman (pisahkan dengan koma):</label><br>
        <input type="text" id="safe_files" name="safe_files" value="<?php echo implode(',', SAFE_FILES); ?>" required><br><br>
        <button type="submit">Perbarui Pengaturan</button>
    </form>
</body>
</html>
