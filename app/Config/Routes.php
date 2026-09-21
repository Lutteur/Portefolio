<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('Presentation', 'Presentation::index');
$routes->get('Competence1', 'Competence1::index');
$routes->get('Competence2', 'Competence2::index');
$routes->get('Competence3', 'Competence3::index');