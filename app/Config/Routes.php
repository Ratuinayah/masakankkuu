<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
// $routes->get('/home', 'Home::index');
$routes->get('/index', 'Pages::index');
$routes->get('/about', 'Pages::about');
$routes->get('/faq', 'Pages::faq');
$routes->get('/menu', 'Pages::menu');
$routes->get('/sapi', 'Pages::sapi');
$routes->get('/ayam', 'Pages::ayam');
$routes->get('/kambing', 'Pages::kambing');
$routes->get('/babi', 'Pages::babi');