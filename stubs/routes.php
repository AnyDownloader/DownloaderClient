<?php
$router->get('/', function () {
    return view('home');
})->name('home');


$router->get('/viewer', function () {
    return view('viewer');
})->name('viewer');