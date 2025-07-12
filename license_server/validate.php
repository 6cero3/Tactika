<?php
require_once __DIR__.'/../config/config.php';
$domain = $_GET['domain'] ?? '';
$token = $_GET['token'] ?? '';
$license = validate_license($domain, $token);
header('Content-Type: application/json');
if ($license) {
    echo json_encode(['valid' => true, 'type' => $license['type'], 'expires_at' => $license['expires_at']]);
} else {
    echo json_encode(['valid' => false]);
}
?>
