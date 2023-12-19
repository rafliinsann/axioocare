<?php

require_once __DIR__ . '/../vendor/autoload.php';

use RafliInsan\BelajarPhpMvc\App\Router;
use RafliInsan\BelajarPhpMvc\Controller\HomeController;

Router::add('GET', '/', HomeController::class, 'lndex');
Router::add('GET', '/index', HomeController::class, 'index');
Router::add('GET', '/login', HomeController::class, 'login');
// Router::add('GET', '/lndex', HomeController::class, 'lndex');
Router::add('GET', '/register', HomeController::class, 'register');
Router::add('GET', '/services', HomeController::class, 'services');
Router::add('GET', '/order', HomeController::class, 'order');
Router::add('GET', '/dokter', HomeController::class, 'dokter');
Router::add('GET', '/edit', HomeController::class, 'edit');
Router::add('GET', '/about', HomeController::class, 'about');
Router::add('GET', '/pelayanan', HomeController::class, 'pelayanan');
Router::add('GET', '/tentang', HomeController::class, 'tentang');
Router::add('GET', '/contact', HomeController::class, 'contact');
Router::add('GET', '/kontak', HomeController::class, 'kontak');

Router::run();


?>