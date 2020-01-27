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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// average
Route::get('avg', function () {

    $data = [1,2,4,6,9,11];

    return collect($data)->avg();
});

Route::get('avg2', function () {

    $data = [
        ['price' => 200],
        ['price' => 100],
        ['price' => 500],
    ];

    return collect($data)->avg('price');
});


Route::get('avg3', function () {

    $data = [
        ['price' => 100, 'item' => 5],
        ['price' => 300, 'item' => 4],
        ['price' => 500, 'item' => 8],
    ];

    return collect($data)->avg(function ($value) {
        return $value['price'] + $value['item'];
    });
});

Route::get('avg4', function () {

    $data = [
        ['price' => 100, 'item' => 5, 'action' => true],
        ['price' => 300, 'item' => 4, 'action' => true],
        ['price' => 500, 'item' => 8, 'action' => false],
    ];

    return collect($data)->avg(function ($value) {
        if ($value['action'] == false)
        {
            return null;
        }
        return $value['price'] + $value['item'];
    });
});


// max

Route::get('max', function () {

    $data = [1,2,4,67,9,11];

    return collect($data)->max();
});

Route::get('max2', function () {

    $data = [
        ['price' => 200],
        ['price' => 100],
        ['price' => 500],
    ];

    return collect($data)->max('price');
});


Route::get('max3', function () {

    $data = [
        ['price' => 100, 'item' => 5],
        ['price' => 300, 'item' => 4],
        ['price' => 500, 'item' => 8],
    ];

    return collect($data)->max(function ($value) {
        return $value['price'] + $value['item'];
    });
});

Route::get('max4', function () {

    $data = [
        ['price' => 100, 'item' => 5, 'action' => true],
        ['price' => 300, 'item' => 4, 'action' => true],
        ['price' => 500, 'item' => 8, 'action' => false],
    ];

    return collect($data)->max(function ($value) {
        if ($value['action'] == false)
        {
            return null;
        }
        return $value['price'] + $value['item'];
    });
});

