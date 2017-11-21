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

Route::get('product/{id}', function (App\Product $product) {
    return view('product', compact('product'));
});
Route::resource('product', 'ProductController');

/*
Route::prefix('product')->group(function () {
	Route::redirect('save', '145', 302);
	Route::get('remove', 'ProductController@destroy');
	Route::get('/{id}', function ($id) {
		return "welcome$id";
	});
	Route::view('/', 'welcome');
	Route::get('update/{product_id}', function ($id) {
		return view('product', compact('id'));
	})->where(['product_id' => '^\d+\-\w{3,}']);
	
});
 */



