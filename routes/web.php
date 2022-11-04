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
Route::get('/admin_customer/finance/{id}', 'Adminyadong\Admin_customerController@finance');
Route::get('/admin_customer/finance2/{id}', 'Adminyadong\Admin_customerController@finance2');

Route::resource('adminorder', 'Adminyadong\AdminorderController');

// Route::get('/login',)
Route::resource('cusorder', 'CusorderController')->except(['show','edit']);
//Route Customer --------------------------------------------------------------------
Route::get('/customer', 'Customer\CustomerController@index');

Route::resource('customer_branch', 'Customer\Customer_branchController');
Route::resource('Cus_stock', 'Customer\Cus_stockController');
Route::resource('Cus_buy', 'Customer\Cus_buyController');
Route::get('/Cus_buy/{id}/drop', 'Customer\Cus_buyController@drop');
Route::get('/cus_order/buy_all', 'Customer\Cus_buyController@buy_all');

Route::get('/report/{id}', 'Customer\PdfController@report');

Route::resource('finance', 'Customer\FinanceController');
Route::resource('finance2', 'Customer\Finance2Controller');

Route::resource('cus_dealerorder', 'Customer\Cus_dealerorderController');

// Route::get('customer_branch', 'Customer\Customer_branchController@index');
// Route::get('customer_branch/create', 'Customer\Customer_branchController@create');
// Route::get('customer_branch', 'Customer\Customer_branchController@store');
// Route::get('customer_branch/{branch->id}/edit', 'Customer\Customer_branchController@edit');
// Route::patch('customer_branch/{branch->id}', 'Customer\Customer_branchController@update');


Route::resource('customer_product', 'Customer\Customer_productController');

Route::resource('customer_contact', 'Customer\Customer_contactController');



//Route Dealer --------------------------------------------------------------------
Route::get('/dealer', 'Dealer\DealerController@index');

Route::resource('branch', 'Dealer\BranchController');
Route::resource('dealer_product', 'Dealer\Dealer_productController');
Route::resource('dealer_contact', 'Dealer\Dealer_contactController');

// Route::resource('dealerorder', 'Dealer\DealerorderController');
Route::get('/dealerorder/{id}', 'Dealer\DealerorderController@index');
Route::get('/dealerorder/create/{id}', 'Dealer\DealerorderController@create');
Route::post('/dealerorder/{id}', 'Dealer\DealerorderController@store');
Route::get('/dealerorder/{id}/edit', 'Dealer\DealerorderController@edit');
Route::patch('/dealerorder/{id}/update', 'Dealer\DealerorderController@update');
Route::get('/dealerorder/buy_all', 'Dealer\DealerorderController@buy_all');
Route::get('/dealerorder/{id}/drop', 'Dealer\DealerorderController@drop');

Route::get('/dealerorder/buy_all/{shop_id}', 'Dealer\DealerorderController@buy_all');