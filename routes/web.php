<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

/**
 * Routes for resource student
 */
$app->get('student', 'StudentController@all');
$app->get('student/{id}', 'StudentController@get');
$app->post('student', 'StudentController@add');
//$app->put('student/{id}', 'StudentController@put');
$app->post('student/update', 'StudentController@update');
$app->delete('student/{id}', 'StudentController@remove');
