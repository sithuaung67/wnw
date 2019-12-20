<?php


Route::get('/', function () {
    return view('auth.login');
});
Route::get('charts','Admin\ChartController@index');
Route::get('charts/getData/{id}','Admin\ChartController@getSubCategory');
Route::get('charts/getSubData/{id}','Admin\ChartController@getSubDataCategory');

// Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('dashboard','DashboardController@index')->name('dashboard');

// Main Category
Route::get('main-categories','Admin\MainCategoryController@index')->name('main-categories.index');
Route::get('main-categories/create','Admin\MainCategoryController@create')->name('main-categories.create');
Route::post('main-categories/store','Admin\MainCategoryController@store')->name('main-categories.store');
Route::patch('main-categories/update/{id}','Admin\MainCategoryController@update')->name('main-categories.update');
Route::delete('main-categories/delete/{id}','Admin\MainCategoryController@destroy')->name('main-categories.destroy');

// Sub Category
Route::get('sub-categories','Admin\SubCategoryController@index')->name('sub-categories.index');
Route::get('sub-categories/create','Admin\SubCategoryController@create')->name('sub-categories.create');
Route::post('sub-categories/store','Admin\SubCategoryController@store')->name('sub-categories.store');
Route::patch('sub-categories/update/{id}','Admin\SubCategoryController@update')->name('sub-categories.update');
Route::delete('sub-categories/delete/{id}','Admin\SubCategoryController@destroy')->name('sub-categories.destroy');

// Sub Data Category
Route::get('sub-data-categories','Admin\SubDataCategoryController@index')->name('sub-data-categories.index');
Route::get('sub-data-categories/create','Admin\SubDataCategoryController@create')->name('sub-data-categories.create');
Route::post('sub-data-categories/store','Admin\SubDataCategoryController@store')->name('sub-data-categories.store');
Route::patch('sub-data-categories/update/{id}','Admin\SubDataCategoryController@update')->name('sub-data-categories.update');
Route::delete('sub-data-categories/delete/{id}','Admin\SubDataCategoryController@destroy')->name('sub-data-categories.destroy');

Route::get('sub-data-categories/getData/{id}','Admin\SubDataCategoryController@getSubCategory');

Route::get('sub-data-categories/getSubData/{id}','Admin\SubDataCategoryController@getSubDataCategory');

Route::resource('investments','Admin\InvetmentController');

// Sez Zone Category
Route::get('sez-zone-categories','Admin\SezZoneCategoryController@index')->name('sez-zone-categories.index');
Route::get('sez-zone-categories/create','Admin\SezZoneCategoryController@create')->name('sez-zone-categories.create');
Route::post('sez-zone-categories/store','Admin\SezZoneCategoryController@store')->name('sez-zone-categories.store');
Route::patch('sez-zone-categories/update/{id}','Admin\SezZoneCategoryController@update')->name('sez-zone-categories.update');
Route::delete('sez-zone-categories/delete/{id}','Admin\SezZoneCategoryController@destroy')->name('sez-zone-categories.destroy');

// Sez Zone Investment
Route::get('sez-zone-investment','Admin\SezZoneInvestmentController@index')->name('sez-zone-investment.index');
Route::get('sez-zone-investment/create','Admin\SezZoneInvestmentController@create')->name('sez-zone-investment.create');
Route::post('sez-zone-investment/store','Admin\SezZoneInvestmentController@store')->name('sez-zone-investment.store');
Route::patch('sez-zone-investment/update/{id}','Admin\SezZoneInvestmentController@update')->name('sez-zone-investment.update');
Route::delete('sez-zone-investment/delete/{id}','Admin\SezZoneInvestmentController@destroy')->name('sez-zone-investment.destroy');

// Sez Sector Category
Route::get('sez-sector-categories','Admin\SezSectorCategoryController@index')->name('sez-sector-categories.index');
Route::get('sez-sector-categories/create','Admin\SezSectorCategoryController@create')->name('sez-sector-categories.create');
Route::post('sez-sector-categories/store','Admin\SezSectorCategoryController@store')->name('sez-sector-categories.store');
Route::put('sez-sector-categories/update/{id}','Admin\SezSectorCategoryController@update')->name('sez-sector-categories.update');
Route::delete('sez-sector-categories/delete/{id}','Admin\SezSectorCategoryController@destroy')->name('sez-sector-categories.destroy');

// Sez Sector Investment
Route::get('sez-sector-investment','Admin\SezSectorInvestmentController@index')->name('sez-sector-investment.index');
Route::get('sez-sector-investment/create','Admin\SezSectorInvestmentController@create')->name('sez-sector-investment.create');
Route::post('sez-sector-investment/store','Admin\SezSectorInvestmentController@store')->name('sez-sector-investment.store');
Route::patch('sez-sector-investment/update/{id}','Admin\SezSectorInvestmentController@update')->name('sez-sector-investment.update');
Route::delete('sez-sector-investment/delete/{id}','Admin\SezSectorInvestmentController@destroy')->name('sez-sector-investment.destroy');

// Sez Country Category
Route::get('sez-country-categories','Admin\SezCountryCategoryController@index')->name('sez-country-categories.index');
Route::get('sez-country-categories/create','Admin\SezCountryCategoryController@create')->name('sez-country-categories.create');
Route::post('sez-country-categories/store','Admin\SezCountryCategoryController@store')->name('sez-country-categories.store');
Route::put('sez-country-categories/update/{id}','Admin\SezCountryCategoryController@update')->name('sez-country-categories.update');
Route::delete('sez-country-categories/delete/{id}','Admin\SezCountryCategoryController@destroy')->name('sez-country-categories.destroy');

// Sez Country Investment
Route::get('sez-country-investment','Admin\SezCountryInvestmentController@index')->name('sez-country-investment.index');
Route::get('sez-country-investment/create','Admin\SezCountryInvestmentController@create')->name('sez-country-investment.create');
Route::post('sez-country-investment/store','Admin\SezCountryInvestmentController@store')->name('sez-country-investment.store');
Route::patch('sez-country-investment/update/{id}','Admin\SezCountryInvestmentController@update')->name('sez-country-investment.update');
Route::delete('sez-country-investment/delete/{id}','Admin\SezCountryInvestmentController@destroy')->name('sez-country-investment.destroy');

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
