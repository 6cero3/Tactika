<?php
$dsn = 'mysql:host=localhost;dbname=tactika;charset=utf8mb4';
$user = 'root';
$pass = '';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die('DB Connection failed');
}

function validate_license($domain, $token) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM licenses WHERE domain = ? AND token = ? AND expires_at > NOW()");
    $stmt->execute([$domain, $token]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
