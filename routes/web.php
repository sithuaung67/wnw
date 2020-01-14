<?php
Route::get('/users',[
    'uses'=>'AdminController@getUsers',
    'as'=>'users'
]);
Route::get('/user/new',[
    'uses'=>'AdminController@getNewUser',
    'as'=>'user.new'
]);
Route::post('/user/new',[
    'uses'=>'AdminController@postNewUser',
    'as'=>'user.new'
]);
Route::post('/user/delete',[
    'uses'=>'AdminController@postDeleteUser',
    'as'=>'user.delete'
]);
Route::post('/user/update',[
    'uses'=>'AdminController@postUpdateUser',
    'as'=>'user.update'
]);
//Account
Route::get('/account/setting',[
    'uses'=>'AdminController@getUserAccountSetting',
    'as'=>'account.setting'
]);
Route::post('/password/update/user',[
    'uses'=>'AdminController@postUpdatePassword',
    'as'=>'password.update'
]);
Route::post('/password/update/customer',[
    'uses'=>'AdminController@postUpdateCustomerPassword',
    'as'=>'password.update.customer'
]);
Route::get('/dashboard',[
    'uses'=>'AdminController@getDashboard',
    'as'=>'dashboard'
]);

Route::get('/logout',[
    'uses'=>'AuthController@getLogout',
    'as'=>'logout'
]);
Route::get('/error',[
    'uses'=>'AdminController@getError',
    'as'=>'error'
]);




//Route::get('/', function () {
//    return view('auth.login');
//});
Route::get('/', function () {
    return view('Frontend.index');
});
//Auth::routes();

Route::get('/logout',[
    'uses'=>'HomeController@getLogout',
    'as'=>'logout'
]);

///////////////Start Payment
Route::get('payment','Payment\PaymentController@index')->name('payment');
Route::post('response','Payment\PaymentController@response')->name('response');
///////////////End Payment

////////////////Start Frontend Page
//start package
Route::get('get_select_package','Frontend\SelectPackageController@index')->name('get_select_package');
Route::post('post_select_package','Frontend\SelectPackageController@create')->name('post_select_package');
//end package

//start Index
Route::get('frontend_home','Frontend\HomeController@index')->name('frontend_home');
//end Index

//Start Member
Route::get('frontend_member_index','Frontend\MemberController@index')->name('frontend_member_index');
Route::get('frontend_member_new','Frontend\MemberController@NewMember')->name('frontend_member_new');
Route::post('add/new_member',[
    'uses'=>'Frontend\MemberController@create',
    'as'=>'add.member'
]);
//end Member

//Start Contact
Route::get('frontend_contact_index','Frontend\ContactController@index')->name('frontend_contact_index');
//End Contact

Route::get('frontend_about_index','Frontend\AboutController@index')->name('frontend_about_index');
//End Contact
////////////////end Frontend Page

////////////////Start Backend Page
// Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Dashboard
Route::get('dashboard','DashboardController@index')->name('dashboard');

//Packages
Route::get('package_view','Admin\PackagesController@index')->name('package_view');
Route::get('package_table','Admin\PackagesController@show')->name('package_table');
Route::get('package_create','Admin\PackagesController@createPage')->name('package_create');
Route::post('post_package_create','Admin\PackagesController@create')->name('post_package_create');
Route::get('/package-image/{img_name}', [
    'uses'=>'Admin\PackagesController@getPostImage',
    'as'=>'view.image'
]);

//Edit Profile
Route::get('edit_profile','Admin\ProfileController@index')->name('edit_profile');
Route::get('edit_profile/personal_info','Admin\ProfileController@personal_info')->name('edit_profile/personal_info');
Route::get('edit_profile/account_info','Admin\ProfileController@account_info')->name('edit_profile/account_info');
Route::get('edit_profile/wallet_info','Admin\ProfileController@wallet_info')->name('edit_profile/wallet_info');
Route::get('edit_profile/bank_detail','Admin\ProfileController@bank_detail')->name('edit_profile/bank_detail');

//Point Collection Summary
Route::get('point_collection_summary','Admin\PointCollectionSummaryController@index')->name('point_collection_summary');
Route::get('tour_points_balance','Admin\PointCollectionSummaryController@tour')->name('tour_points_balance');
Route::get('loyalty_points_balance','Admin\PointCollectionSummaryController@loyalty')->name('loyalty_points_balance');
Route::get('deposit_points_balance','Admin\PointCollectionSummaryController@deposit')->name('deposit_points_balance');
Route::get('travel_points_balance','Admin\PointCollectionSummaryController@travel')->name('travel_points_balance');

//jorgchart
Route::get('jorgchart','HomeController@jorgchart')->name('jorgchart');
Route::get('chart','HomeController@chart')->name('chart');

//Overall
Route::get('admin/overall','Admin\OverallController@index')->name('admin/overall');

//New Member
Route::get('admin/new_member','Admin\Network\MemberController@index')->name('admin/new_member');
//Route::post('admin/new_member/create','Admin\Network\MemberController@create')->name('admin/new_member/create');
Route::post('admin/new_member',[
   'uses'=>'Admin\Network\MemberController@create',
   'as'=>'post.member'
]);



