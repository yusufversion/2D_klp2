<?php
// routes.php

require_once 'app/controllers/UserController.php';
require_once 'app/controllers/BukuController.php';
require_once 'app/controllers/TabelLoansController.php';

$controller = new UserController();
$controller = new BukuController();
$controller = new LoansController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

// route User
if ($url == '/user/index' || $url == '/') {
    $controller->index(); //usercontroller yg di dalam nya ada metod index

} elseif ($url == '/user/create' && $requestMethod == 'GET') {
    $controller->create();

} elseif ($url == '/user/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/user\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($userId);
} elseif (preg_match('/\/user\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($userId, $_POST);
} elseif (preg_match('/\/user\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}

// route Buku
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

// route loans
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