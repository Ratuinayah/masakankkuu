<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/index', 'Home::index');
$routes->get('/menu', 'Home::menu');
$routes->get('/detail', 'Home::detail');
$routes->get('/faq', 'Home::faq');
$routes->get('/about', 'Home::about');
$routes->get('/(:segment)', 'Home::detail/$1');
