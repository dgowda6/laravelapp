<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');


/*Route::get('people', 'AboutConttroller@people');
Route::get('people/person/{id}', 'AboutConttroller@personDetail');
Route::get('people/person/edit/{id}', 'AboutConttroller@personEdit');
Route::patch('people/{id}', 'AboutConttroller@personUpdate');*/

Route::resource('people', 'PeopleController',
    ['names' => [
        'index' => 'people',
        'create' => 'people_create',
        'store' => 'people_store',
        'show' => 'people_show',
        'edit' => 'people_edit',
        'update' => 'people_update',
        'delete' => 'people_delete',
        ]
    ]
);

/*Route::get('about', 'AboutConttroller@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/
