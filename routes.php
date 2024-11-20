<?php
// routes.php

require_once 'app/controllers/BukuController.php';

$controller = new BukuController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/Buku/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/Buku/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/Buku/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/Buku\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($userId);
} elseif (preg_match('/\/Buku\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($userId, $_POST);
} elseif (preg_match('/\/Buku\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}