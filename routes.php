<?php
// routes.php

require_once 'app/controllers/TabelLoansController.php';

$controller = new LoansController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/loans/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/loans/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/loans/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/loans\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($userId);
} elseif (preg_match('/\/loans\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($userId, $_POST);
} elseif (preg_match('/\/loans\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}