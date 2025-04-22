<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User\Home::index', ["as" => "home"]);
$routes->get('Contact', 'User\Contact::index', ["as" => "contact"]);
$routes->get('Blog', 'User\Blog::index', ['as' => 'blog']);
$routes->get('blog-details', 'User\Blog::details', ['as' => 'blog-details']);
$routes->get('About', 'User\About::index', ['as' => 'about']);
$routes->get('Pricing', 'User\pricing::index', ["as" => "pricing"]);
$routes->get('Services', 'User\services::index', ["as" => "services"]);
$routes->get('services-details', 'User\Services::details', ["as" => "service-details"]);
$routes->group('admin', function ($routes) {
    $routes->add('login', 'Admin\Admin::login', ['as' => 'admin']);
    $routes->add('admin/sukses', 'Admin\Admin::sukses', ['as' => 'admin']);
});
