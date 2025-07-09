<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 **/

$routes->get('/', 'Supplier::index');
$routes->get('supplier', 'Supplier::index');          
$routes->get('supplier/create', 'Supplier::create');     
$routes->post('supplier/store', 'Supplier::store');     
$routes->get('supplier/edit/(:num)', 'Supplier::edit/$1');   
$routes->post('supplier/update/(:num)', 'Supplier::update/$1');
$routes->get('supplier/delete/(:num)', 'Supplier::delete/$1'); 