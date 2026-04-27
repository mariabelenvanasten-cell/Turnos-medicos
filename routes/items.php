<?php

$method = $_SERVER['REQUEST_METHOD'];

// -------------------------
// POST: crear servicio
// -------------------------
if ($method === 'POST') {

    $input = json_decode(file_get_contents('php://input'), true);

    $nombre = $input['nombre'] ?? '';
    $descripcion = $input['descripcion'] ?? '';
    $tipo = $input['tipo'] ?? '';

    $errores = [];

    // validaciones
    if (empty($nombre)) {
        $errores[] = "El nombre del servicio es obligatorio";
    }

    if (empty($descripcion)) {
        $errores[] = "La descripción es obligatoria";
    }

    if (empty($tipo)) {
        $errores[] = "El tipo es obligatorio";
    }

    // si hay errores
    if (!empty($errores)) {
        http_response_code(400);
        echo json_encode([
            "success" => false,
            "errors" => $errores
        ]);
        exit;
    }

    // simulación de guardado
    $item = [
        "id" => rand(1, 1000),
        "nombre" => htmlspecialchars($nombre),
        "descripcion" => htmlspecialchars($descripcion),
        "tipo" => htmlspecialchars($tipo)
    ];

    echo json_encode([
        "success" => true,
        "data" => $item
    ]);
    exit;
}

// -------------------------
// GET: listar servicios
// -------------------------
if ($method === 'GET') {
    echo json_encode([
        "items" => []
    ]);
}