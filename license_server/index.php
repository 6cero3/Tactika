<?php
require_once __DIR__.'/../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $domain = $_POST['domain'];
    $token = bin2hex(random_bytes(16));
    $type = $_POST['type'];
    $duration = (int)$_POST['duration'];
    $expires = $duration ? date('Y-m-d H:i:s', strtotime("+$duration days")) : '2099-12-31 23:59:59';
    $stmt = $pdo->prepare("INSERT INTO licenses (domain, token, type, expires_at) VALUES (?,?,?,?)");
    $stmt->execute([$domain, $token, $type, $expires]);
    echo "License created for $domain with token $token";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>License Generator</title></head>
<body>
<form method="post">
Domain: <input name="domain"><br>
Type: <select name="type"><option value="demo">Demo</option><option value="full">Full</option></select><br>
Duration (days, 0=perpetual): <input name="duration" type="number" value="30"><br>
<button>Create</button>
</form>
</body>
</html>
