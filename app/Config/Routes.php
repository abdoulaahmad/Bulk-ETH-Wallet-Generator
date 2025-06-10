<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'EthController::index'); // Load main page
$routes->post('generate', 'EthController::generate'); // Generate addresses
$routes->get('downloadCSV', 'EthController::downloadCSV'); // Download CSV
