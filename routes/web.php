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

Route::middleware('auth')->group(function () {
    Route::post('products', 'ProductController@store')->middleware('can:create,App\Models\Product\Product');
    Route::delete('products/{id}', 'ProductController@destroy')->middleware('can:delete,id');

    Route::post('products/{id}/order', 'OrderController@store');

    Route::post('products/{id}/comments', 'ProductCommentController@store')->middleware('can:create,App\Models\Product\Comment');
    Route::get('products/{id}/comments', 'ProductCommentController@index');

    Route::post('comment/{id}/reaction', 'CommentReactionController@store')->middleware('can:create,App\Models\CommentReaction');

    Route::post('wishlist', 'WishListController@store');

    Route::put('products/{id}/cover', 'ProductCoverController@update')->middleware('can:update,id');

    Route::post('payment', 'PaymentController@store');
});
