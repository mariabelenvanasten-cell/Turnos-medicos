<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');

$method = $_SERVER['REQUEST_METHOD'];
$requestUri = $_SERVER['REQUEST_URI'];
$path = parse_url($requestUri, PHP_URL_PATH);

$path = str_replace('/prog3-clase2/public', '', $path);
$path = str_replace('/prog3-clase2', '', $path);
$path = str_replace('/index.php', '', $path); // 👈 ESTA ES LA CLAVE
$path = rtrim($path, '/');

// -------------------------
// FORMULARIO (GET)
// -------------------------
if ($method === 'GET' && ($path === '/items/new' || $path === '' || $path === '/')) {
    header('Content-Type: text/html');
    require_once __DIR__ . '/../views/form.html'; // ✅ CAMBIO IMPORTANTE
    exit;
}

// -------------------------
// HEALTH
// -------------------------
if ($method === 'GET' && $path === '/health') {
    header('Content-Type: application/json');
    echo json_encode([
        "status" => "ok",
        "timestamp" => date("Y-m-d H:i:s"),
        "php_version" => phpversion()
    ], JSON_PRETTY_PRINT);
    exit;
}

// -------------------------
// API ITEMS (POST y GET)
// -------------------------
if ($path === '/items') {
    require_once __DIR__ . '/../routes/items.php'; // ✅ CAMBIO IMPORTANTE
    exit;
}

// -------------------------
// 404
// -------------------------
http_response_code(404);
echo json_encode([
    "error" => "Ruta no encontrada",
    "ruta" => $path
]);

