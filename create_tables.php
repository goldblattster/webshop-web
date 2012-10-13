<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Database Table Creator thing</title>
</head>
<body>
<p>Hi, I'm here to create tables for webshop! Yay!</p>
<hr>
<?php
$error = '';
$handle = sqlite_open(':memory:', $error);

if (!$handle) die ($error);

$st = 'CREATE TABLE IF NOT EXISTS users
(
id INT AUTOINCREMENT UNSIGNED NOT NULL,
username VARCHAR(20) NOT NULL,
password VARCHAR(25) NOT NULL,
email VARCHAR(32),
role VARCHAR(20),
last_ip VARCHAR(16),
)';

$result = sqlite_exec($handle, $st, $error);
echo "Created database `users`."
?>
</body>
</html>
