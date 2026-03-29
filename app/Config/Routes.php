<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/sobre', 'Home::sobre');
$routes->get('/servicos', 'Home::servicos');
$routes->get('/projetos', 'Home::projetos');
$routes->get('/contacto', 'Home::contacto');

$routes->post('/contacto/enviar', 'Contacto::enviar');
$routes->get('/teste-email', 'Teste::email');

$routes->get('/lang/(:segment)', 'Home::setLang/$1');