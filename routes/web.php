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

    use App\Http\Requests\PublishPostForm;

    Route::get(
        '/',
        function () {

            return view('welcome');
        }
    );

    Route::post(
        'posts',
        function (PublishPostForm $form) {
            $form->persist();

            return 'Success';
        }
    );

    Route::get( 'purchases', 'PurchasesController@store');