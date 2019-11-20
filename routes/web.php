<?php


Route::get('/', function () {
    return view('auth.login');
});
Route::get('charts', function () {
    return view('admin.chart.chart');
});
// Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('dashboard','DashboardController@index')->name('dashboard');
// Route::get('/', 'HomeController@index');


// Sez Zone Category
Route::get('sez-zone-categories','SezZoneCategoryController@index')->name('sez-zone-categories.index');
Route::get('sez-zone-categories/create','SezZoneCategoryController@create')->name('sez-zone-categories.create');
Route::post('sez-zone-categories/store','SezZoneCategoryController@store')->name('sez-zone-categories.store');
Route::patch('sez-zone-categories/update/{id}','SezZoneCategoryController@update')->name('sez-zone-categories.update');
Route::delete('sez-zone-categories/delete/{id}','SezZoneCategoryController@destroy')->name('sez-zone-categories.destroy');

// Sez Zone Investment
Route::get('sez-zone-investment','SezZoneInvestmentController@index')->name('sez-zone-investment.index');
Route::get('sez-zone-investment/create','SezZoneInvestmentController@create')->name('sez-zone-investment.create');
Route::post('sez-zone-investment/store','SezZoneInvestmentController@store')->name('sez-zone-investment.store');
Route::patch('sez-zone-investment/update/{id}','SezZoneInvestmentController@update')->name('sez-zone-investment.update');
Route::delete('sez-zone-investment/delete/{id}','SezZoneInvestmentController@destroy')->name('sez-zone-investment.destroy');

// Sez Sector Category
Route::get('sez-sector-categories','SezSectorCategoryController@index')->name('sez-sector-categories.index');
Route::get('sez-sector-categories/create','SezSectorCategoryController@create')->name('sez-sector-categories.create');
Route::post('sez-sector-categories/store','SezSectorCategoryController@store')->name('sez-sector-categories.store');
Route::put('sez-sector-categories/update/{id}','SezSectorCategoryController@update')->name('sez-sector-categories.update');
Route::delete('sez-sector-categories/delete/{id}','SezSectorCategoryController@destroy')->name('sez-sector-categories.destroy');

// Sez Sector Investment
Route::get('sez-sector-investment','SezSectorInvestmentController@index')->name('sez-sector-investment.index');
Route::get('sez-sector-investment/create','SezSectorInvestmentController@create')->name('sez-sector-investment.create');
Route::post('sez-sector-investment/store','SezSectorInvestmentController@store')->name('sez-sector-investment.store');
Route::patch('sez-sector-investment/update/{id}','SezSectorInvestmentController@update')->name('sez-sector-investment.update');
Route::delete('sez-sector-investment/delete/{id}','SezSectorInvestmentController@destroy')->name('sez-sector-investment.destroy');

// Sez Country Category
Route::get('sez-country-categories','SezCountryCategoryController@index')->name('sez-country-categories.index');
Route::get('sez-country-categories/create','SezCountryCategoryController@create')->name('sez-country-categories.create');
Route::post('sez-country-categories/store','SezCountryCategoryController@store')->name('sez-country-categories.store');
Route::put('sez-country-categories/update/{id}','SezCountryCategoryController@update')->name('sez-country-categories.update');
Route::delete('sez-country-categories/delete/{id}','SezCountryCategoryController@destroy')->name('sez-country-categories.destroy');

// Sez Country Investment
Route::get('sez-country-investment','SezCountryInvestmentController@index')->name('sez-country-investment.index');
Route::get('sez-country-investment/create','SezCountryInvestmentController@create')->name('sez-country-investment.create');
Route::post('sez-country-investment/store','SezCountryInvestmentController@store')->name('sez-country-investment.store');
Route::patch('sez-country-investment/update/{id}','SezCountryInvestmentController@update')->name('sez-country-investment.update');
Route::delete('sez-country-investment/delete/{id}','SezCountryInvestmentController@destroy')->name('sez-country-investment.destroy');

