<?php
session_start();
require_once __DIR__.'/../config/config.php';
$err = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $domain = $_SERVER['HTTP_HOST'];
    $token = $_POST['token'];
    $ch = curl_init('http://localhost/license_server/validate.php?domain='.$domain.'&token='.$token);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $data = json_decode($response, true);
    if ($data && $data['valid']) {
        $_SESSION['user'] = 'admin';
        $_SESSION['token'] = $token;
        header('Location: dashboard.php');
        exit;
    } else {
        $err = 'Invalid license';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <form method="post" class="bg-white p-6 rounded shadow-md">
        <h1 class="mb-4 text-lg font-bold">TÁCTIKA | War Room</h1>
        <?php if($err): ?>
            <p class="text-red-500 mb-2"><?php echo $err; ?></p>
        <?php endif; ?>
        <input name="token" class="border p-2 w-full mb-4" placeholder="License token" required>
        <button class="bg-blue-500 text-white px-4 py-2 rounded">Login</button>
    </form>
</body>
</html>
