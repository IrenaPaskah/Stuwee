<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User\Home::index', ["as" => "home"]);
$routes->get('Contact', 'User\Contact::index', ["as" => "contact"]);
$routes->get('Blog', 'User\Blog::main', ['as' => 'blog']);
$routes->get('About', 'User\About::index', ['as' => 'blog']);
$routes->get('Portofolio', 'User\Portofolio::index', ["as" => "portofolio"]);
$routes->get('Pricing', 'User\pricing::index', ["as" => "pricing"]);
$routes->get('Services', 'User\services::index', ["as" => "services"]);
$routes->get('Services', 'User\service-details::index', ["as" => "service-details"]);
