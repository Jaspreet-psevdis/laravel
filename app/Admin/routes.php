<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('pages', PagesController::class);
    $router->resource('hero-images', HeroImageController::class);
    $router->resource('side-images', SideImageController::class);
    $router->resource('stories', StoryController::class);
});
