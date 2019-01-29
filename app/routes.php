 <?php

$router->get('', 'IndexController@index');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

$router->get('product', 'ProductController@index');

$router->get('cart', 'CartController@index');
$router->get('login', 'LoginController@index');

