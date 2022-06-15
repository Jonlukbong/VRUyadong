<?php

use Illuminate\Support\Facades\Route;

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
//Route Admin --------------------------------------------------------------------
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route for normal user
// Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
// });
//Route for admin
// Route::group(['prefix' => 'admin'], function () {
//     Route::group(['middleware' => ['admin']], function () {
//         Route::get('/dashboard', 'admin\AdminController@index');
//     });
// });
Route::get('/adminyadong', 'Adminyadong\AdminyadongController@index');
Route::resource('product', 'ProductController');
Route::resource('promotion', 'PromotionController');
Route::resource('admin_user', 'Adminyadong\Admin_userController');
Route::resource('admin_customer', 'Adminyadong\Admin_customerController');
// Route::get('/login',)

//Route Customer --------------------------------------------------------------------
Route::get('/customer', 'Customer\CustomerController@index');
Route::resource('customer_branch', 'Customer\Customer_branchController');
Route::resource('customer_product', 'Customer\Customer_productController');
Route::resource('customer_contact', 'Customer\Customer_contactController');


//Route Dealer --------------------------------------------------------------------
Route::get('/dealer', 'Dealer\DealerController@index');

Route::resource('branch', 'Dealer\BranchController');
Route::resource('dealer_product', 'Dealer\Dealer_productController');
Route::resource('dealer_contact', 'Dealer\Dealer_contactController');