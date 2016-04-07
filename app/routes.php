<?php

$app->route(['GET'], '/', \Savage\Http\Controllers\HomeController::class)->setName('home');

$app->group('/auth', function() {
    $this->route(['GET', 'POST'], '/register', \Savage\Http\Controllers\AuthController::class, 'register')->setName('auth.register');
    $this->route(['GET', 'POST'], '/login', \Savage\Http\Controllers\AuthController::class, 'login')->setName('auth.login');
});