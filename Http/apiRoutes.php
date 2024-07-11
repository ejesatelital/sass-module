<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/sass/v1','middleware' => ['api.token', 'auth.admin']], function (Router $router) {
$router->group(['prefix' =>'/companies'], function (Router $router) {

    $router->get('/', [
        'as' => 'api.sass.company.index',
        'uses' => 'CompanyApiController@index',
        'middleware' => ['token-can:sass.companies.index']
    ]);

    $router->post('/', [
        'as' => 'api.sass.company.store',
        'uses' => 'CompanyApiController@store',
        'middleware' => ['token-can:sass.companies.create']
    ]);

    $router->get('/{company}', [
        'as' => 'api.sass.company.show',
        'uses' => 'CompanyApiController@show',
        'middleware' => ['token-can:sass.companies.index']
    ]);
    $router->put('/{company}', [
        'as' => 'api.sass.company.update',
        'uses' => 'CompanyApiController@update',
        'middleware' => ['token-can:sass.companies.edit']
    ]);
    $router->delete('/{company}', [
        'as' => 'api.sass.company.destroy',
        'uses' => 'CompanyApiController@destroy',
        'middleware' => ['token-can:sass.companies.destroy']
    ]);

});

// append


});
