<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users','UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//MCIL
//MCIL Categories
//Sector
Route::get('/mcil/sector/category/index',[
    'uses'=>'Admin\McilSectorCategoryController@index',
    'as'=>'get.McilSectorCategoryIndex'
]);
Route::get('/mcil/sector/category/create',[
    'uses'=>'Admin\McilSectorCategoryController@create',
    'as'=>'get.McilSectorCategoryCreate'
]);
Route::post('/mcil/sector/category/store',[
    'uses'=>'Admin\McilSectorCategoryController@store',
    'as'=>'post.McilSectorCategoryStore'
]);
Route::post('/mcil/sector/category/update',[
    'uses'=>'Admin\McilSectorCategoryController@update',
    'as'=>'post.McilSectorCategoryUpdate'
]);
Route::delete('/mcil/sector/category/{id}/destroy',[
    'uses'=>'Admin\McilSectorCategoryController@destroy',
    'as'=>'post.McilSectorCategoryDestroy'
]);

//Region
Route::get('/mcil/region/category/index',[
    'uses'=>'Admin\McilRegionCategoryController@index',
    'as'=>'get.McilRegionCategoryIndex'
]);
Route::get('/mcil/region/category/create',[
    'uses'=>'Admin\McilRegionCategoryController@create',
    'as'=>'get.McilRegionCategoryCreate'
]);
Route::post('/mcil/region/category/store',[
    'uses'=>'Admin\McilRegionCategoryController@store',
    'as'=>'post.McilRegionCategoryStore'
]);
Route::post('/mcil/region/category/update',[
    'uses'=>'Admin\McilRegionCategoryController@update',
    'as'=>'post.McilRegionCategoryUpdate'
]);
Route::delete('/mcil/region/category/{id}/destroy',[
    'uses'=>'Admin\McilRegionCategoryController@destroy',
    'as'=>'post.McilRegionCategoryDestroy'
]);

//MCIL Investments
//Sector
Route::get('/mcil/sector/investment/index',[
    'uses'=>'Admin\McilSectorInvestmentController@index',
    'as'=>'get.McilSectorInvestmentIndex'
]);
Route::get('/mcil/sector/investment/create',[
    'uses'=>'Admin\McilSectorInvestmentController@create',
    'as'=>'get.McilSectorInvestmentCreate'
]);
Route::post('/mcil/sector/investment/store',[
    'uses'=>'Admin\McilSectorInvestmentController@store',
    'as'=>'post.McilSectorInvestmentStore'
]);
Route::post('/mcil/sector/investment/update',[
    'uses'=>'Admin\McilSectorInvestmentController@update',
    'as'=>'post.McilSectorInvestmentUpdate'
]);
Route::delete('/mcil/sector/investment/{id}/destroy',[
    'uses'=>'Admin\McilSectorInvestmentController@destroy',
    'as'=>'post.McilSectorInvestmentDestroy'
]);

//Region
Route::get('/mcil/region/investment/index',[
    'uses'=>'Admin\McilRegionInvestmentController@index',
    'as'=>'get.McilRegionInvestmentIndex'
]);
Route::get('/mcil/region/investment/create',[
    'uses'=>'Admin\McilRegionInvestmentController@create',
    'as'=>'get.McilRegionInvestmentCreate'
]);
Route::post('/mcil/region/investment/store',[
    'uses'=>'Admin\McilRegionInvestmentController@store',
    'as'=>'post.McilRegionInvestmentStore'
]);
Route::post('/mcil/region/investment/update',[
    'uses'=>'Admin\McilRegionInvestmentController@update',
    'as'=>'post.McilRegionInvestmentUpdate'
]);
Route::delete('/mcil/region/investment/{id}/destroy',[
    'uses'=>'Admin\McilRegionInvestmentController@destroy',
    'as'=>'post.McilRegionInvestmentDestroy'
]);


//FIL
//FIL Categories
//Sector
Route::get('/fil/sector/category/index',[
    'uses'=>'Admin\FilSectorCategoryController@index',
    'as'=>'get.FilSectorCategoryIndex'
]);
Route::get('/fil/sector/category/create',[
    'uses'=>'Admin\FilSectorCategoryController@create',
    'as'=>'get.FilSectorCategoryCreate'
]);
Route::post('/fil/sector/category/store',[
    'uses'=>'Admin\FilSectorCategoryController@store',
    'as'=>'post.FilSectorCategoryStore'
]);
Route::post('/fil/sector/category/update',[
    'uses'=>'Admin\FilSectorCategoryController@update',
    'as'=>'post.FilSectorCategoryUpdate'
]);
Route::delete('/fil/sector/category/{id}/destroy',[
    'uses'=>'Admin\FilSectorCategoryController@destroy',
    'as'=>'post.FilSectorCategoryDestroy'
]);

//Region
Route::get('/fil/region/category/index',[
    'uses'=>'Admin\FilRegionCategoryController@index',
    'as'=>'get.FilRegionCategoryIndex'
]);
Route::get('/fil/region/category/create',[
    'uses'=>'Admin\FilRegionCategoryController@create',
    'as'=>'get.FilRegionCategoryCreate'
]);
Route::post('/fil/region/category/store',[
    'uses'=>'Admin\FilRegionCategoryController@store',
    'as'=>'post.FilRegionCategoryStore'
]);
Route::post('/fil/region/category/update',[
    'uses'=>'Admin\FilRegionCategoryController@update',
    'as'=>'post.FilRegionCategoryUpdate'
]);
Route::delete('/fil/region/category/{id}/destroy',[
    'uses'=>'Admin\FilRegionCategoryController@destroy',
    'as'=>'post.FilRegionCategoryDestroy'
]);

//Country
Route::get('/fil/country/category/index',[
    'uses'=>'Admin\FilCountryCategoryController@index',
    'as'=>'get.FilCountryCategoryIndex'
]);
Route::get('/fil/country/category/create',[
    'uses'=>'Admin\FilCountryCategoryController@create',
    'as'=>'get.FilCountryCategoryCreate'
]);
Route::post('/fil/country/category/store',[
    'uses'=>'Admin\FilCountryCategoryController@store',
    'as'=>'post.FilCountryCategoryStore'
]);
Route::post('/fil/country/category/update',[
    'uses'=>'Admin\FilCountryCategoryController@update',
    'as'=>'post.FilCountryCategoryUpdate'
]);
Route::delete('/fil/country/category/{id}/destroy',[
    'uses'=>'Admin\FilCountryCategoryController@destroy',
    'as'=>'post.FilCountryCategoryDestroy'
]);

//MCIL Investments
//Sector
Route::get('/fil/sector/investment/index',[
    'uses'=>'Admin\FilSectorInvestmentController@index',
    'as'=>'get.FilSectorInvestmentIndex'
]);
Route::get('/fil/sector/investment/create',[
    'uses'=>'Admin\FilSectorInvestmentController@create',
    'as'=>'get.FilSectorInvestmentCreate'
]);
Route::post('/fil/sector/investment/store',[
    'uses'=>'Admin\FilSectorInvestmentController@store',
    'as'=>'post.FilSectorInvestmentStore'
]);
Route::post('/fil/sector/investment/update',[
    'uses'=>'Admin\FilSectorInvestmentController@update',
    'as'=>'post.FilSectorInvestmentUpdate'
]);
Route::delete('/fil/sector/investment/{id}/destroy',[
    'uses'=>'Admin\FilSectorInvestmentController@destroy',
    'as'=>'post.FilSectorInvestmentDestroy'
]);
//Region
Route::get('/fil/region/investment/index',[
    'uses'=>'Admin\FilRegionInvestmentController@index',
    'as'=>'get.FilRegionInvestmentIndex'
]);
Route::get('/fil/region/investment/create',[
    'uses'=>'Admin\FilRegionInvestmentController@create',
    'as'=>'get.FilRegionInvestmentCreate'
]);
Route::post('/fil/region/investment/store',[
    'uses'=>'Admin\FilRegionInvestmentController@store',
    'as'=>'post.FilRegionInvestmentStore'
]);
Route::post('/fil/region/investment/update',[
    'uses'=>'Admin\FilRegionInvestmentController@update',
    'as'=>'post.FilRegionInvestmentUpdate'
]);
Route::delete('/fil/region/investment/{id}/destroy',[
    'uses'=>'Admin\FilRegionInvestmentController@destroy',
    'as'=>'post.FilRegionInvestmentDestroy'
]);

//Country
Route::get('/fil/country/investment/index',[
    'uses'=>'Admin\FilCountryInvestmentController@index',
    'as'=>'get.FilCountryInvestmentIndex'
]);
Route::get('/fil/country/investment/create',[
    'uses'=>'Admin\FilCountryInvestmentController@create',
    'as'=>'get.FilCountryInvestmentCreate'
]);
Route::post('/fil/country/investment/store',[
    'uses'=>'Admin\FilCountryInvestmentController@store',
    'as'=>'post.FilCountryInvestmentStore'
]);
Route::post('/fil/country/investment/update',[
    'uses'=>'Admin\FilCountryInvestmentController@update',
    'as'=>'post.FilCountryInvestmentUpdate'
]);
Route::delete('/fil/country/investment/{id}/destroy',[
    'uses'=>'Admin\FilCountryInvestmentController@destroy',
    'as'=>'post.FilCountryInvestmentDestroy'
]);


